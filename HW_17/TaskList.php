<?php

namespace HW_17;
use TaskStatus;

class TaskList
extends ClassTest // пункт 4.1 Ключевые слова extendsи implementsДОЛЖНЫ быть объявлены в той же строке, что и имя класса.
{
    private string $filePath; private string $taskName; // пункт 2.3 НЕ ДОЛЖНО быть более одного оператора в строке.
    private integer $priority; // пункт 2.4 ДОЛЖНА использоваться краткая форма ключевых слов типа
    PRIVATE $tasks = []; // пункт 2.4 Все зарезервированные ключевые слова и типы PHP ДОЛЖНЫ быть в нижнем регистре.

    use TraidTest; // пункт 4.2 ДОЛЖНО быть объявлено на следующей строке после открывающей скобки.

    public function __construct(string $filePath)
    {
        $this->setFilePath($filePath);
    }

    /**
     * @param string $filePath
     */
     function setFilePath(string $filePath): void // пункт 4.4 Видимость ДОЛЖНА быть объявлена для всех методов.
    {
        if (!file_exists($filePath)) {
            throw new Exception('Not file');
        }

        $this->filePath = $filePath;

        if (filesize($filePath) != 0) {
            $this->getTaskArray();
        }
    }

    private function getFilePath(): string
    {
        return $this->filePath;
    }

    /**
     * @param string $taskName
     */
    private function setTaskName(string $taskName): void
    {
        if ($taskName === null) {
            throw new Exception('Invalid Task');
        }
        $this->taskName = $taskName;
    }

    /**
     * @param int $priority
     */
    private function setPriority(int $priority)
    : void //пункт 4.5 Двоеточие и объявление ДОЛЖНЫ находиться в той же строке, что и закрывающая скобка списка аргументов, без пробелов между двумя символами
    {
        if ($priority <= 0) {
            throw new Exception('Invalid priority');
        }
        $this->priority = $priority;
    }

    public function AddTask(string $taskName ,int $priority) //пункт 4.5 В списке аргументов НЕ ДОЛЖНО быть пробела перед каждой запятой и ДОЛЖЕН быть один пробел после каждой запятой
    {
        $this->setTaskName($taskName);
        $this->setPriority($priority);

        $taskId = count($this->tasks) + 1;
        $taskInfo = ["id" => $taskId, "name" => $this->taskName, "priority" => $this->priority, "status" => TaskStatus::NOT_COMPLETED];
        $this->tasks[] = $taskInfo;

        $this->saveTasksToFile();
    }

    public function getTasks()
    {
        usort($this->tasks, function ($a, $b) {
            return $a['priority'] - $b['priority'];
        });

        $this->saveTasksToFile();
    }

    public function deleteTask(int $taskId)
    {
        foreach ($this->tasks as $key => $task) {
            if( $task['id'] == $taskId ) {unset($this->tasks[$key]);} // пункт 5 нарушение
        }
        $this->saveTasksToFile();
    }

    public function changeStatus(int $taskId, TaskStatus $newStatus)
    {
        foreach( $this->tasks as &$task )  // пункт 5.5 нарушение
        {
            if ($task['id'] == $taskId) {
                $task['status'] = $newStatus;
            }
        }
        $this->saveTasksToFile();
    }

    private function getTaskArray()
    {
        $filePath = $this->getFilePath();
        $fileContent = file_get_contents($filePath);
        $lines = explode(PHP_EOL, $fileContent);

        foreach ($lines as $line) {
            $taskData = explode(',', $line);
            $taskInfo = [
                'id' => $taskData[0],
                'name' => $taskData[1],
                'priority' => $taskData[2],
                'status' => $taskData[3],
            ];
            $this->tasks[] = $taskInfo;
        }


    }

    private function saveTasksToFile()
    {
        $filePath = $this->getFilePath();;
        $taskString = '';
        $file = fopen($filePath, 'w');
        foreach ($this->tasks as $task) {
            $taskString .= implode(',', $task) . PHP_EOL;
        }
        fwrite($file, $taskString);
        fclose($file);

    }

}

 // пункт 2.2 тег ДОЛЖЕН быть опущен в файлах, содержащих только PHP.