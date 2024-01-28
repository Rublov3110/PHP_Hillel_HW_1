<?php

class TaskList
{
    private string $filePath;
    private string $taskName;
    private int $priority;
    private $tasks = [];

    public function __construct(string $filePath)
    {
        $this->setFilePath($filePath);
    }

    /**
     * @param string $filePath
     */
    private function setFilePath(string $filePath): void
    {
        if(!file_exists($filePath)){
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
    private function setPriority(int $priority): void
    {
        if ($priority <= 0) {
            throw new Exception('Invalid priority');
        }
        $this->priority = $priority;
    }

    public function AddTask(string $taskName, int $priority)
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
            if ($task['id'] == $taskId) {
                unset($this->tasks[$key]);
            }
        }
        $this->saveTasksToFile();
    }

    public function changeStatus(int $taskId, TaskStatus $newStatus)
    {
        foreach ($this->tasks as &$task) {
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