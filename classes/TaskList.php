<?php

class TaskList
{
    private string $filePath;
    private string $taskName;
    private int $priority;

//    private $tasks = [];

    public function __construct(string $filePath)
    {
        $this->setFilePath($filePath);
    }

    /**
     * @param string $filePath
     */
    public function setFilePath(string $filePath): void
    {
//        if (!file_exists($filePath)) {
//            throw new Exception('File not found');
//        }
        $this->filePath = $filePath;
    }

    /**
     * @param string $taskName
     */
    public function setTaskName(string $taskName): void
    {
        $this->taskName = $taskName;
    }

    /**
     * @param int $priority
     */
    private function setPriority(int $priority)
    {
        $this->priority = $priority;
    }

    public function AddTask(string $taskName, int $priority)
    {
        $this->setTaskName($taskName);
        $this->setPriority($priority);
        $taskArray=[];

        $taskID = uniqid();
        $taskArray[] = [
            'id' => $taskID,
            'name' => $taskName,
            'priority' => $priority,
            'status' => TaskStatus::NOT_COMPLETED,
        ];
//        foreach ($taskArray as $taskId => $task) {
//                echo "$taskId, id: {$task['id']} Завдання: {$task['name']}, Пріоритет: {$task['priority']}, Стан: {$task['status']}\n";
//            }
        $this->saveTasksToFile($taskArray);
    }

    public function getTasks()
    {
        $taskArray = $this->getTaskArray();

        usort($taskArray, function ($a, $b) {
            return $a['priority'] - $b['priority'];
        });

        $this->saveTasksToFile($taskArray);
    }

    private function getTaskArray(): array|bool
    {
        $filePath = $this->filePath;
        $fileContent = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $taskArray = [];
        if ($fileContent !== false) {
            foreach ($fileContent as $line) {

                $taskData = explode(',', $line);

                $taskArray[] = [
                    'id' => $taskData[0],
                    'name' => $taskData[1],
                    'priority' => $taskData[2],
                    'status' => $taskData[3],
                ];
            }
        }

        return $taskArray;
    }

    private function saveTasksToFile(array $taskArray)
    {
        $filePath = $this->filePath;
        $file = fopen($filePath, 'a+');
            foreach ($taskArray as $task) {
                fwrite($file, implode(', ', $task) . PHP_EOL);
            }
        fclose($file);
//                foreach ($taskArray as $taskId => $task) {
//                echo "$taskId, id: {$task['id']} Завдання: {$task['name']}, Пріоритет: {$task['priority']}, Стан: {$task['status']}\n";
//            }
    }

}