<?php
define('APP_DIR', __DIR__ . '/');

require_once APP_DIR . 'classes/TaskList.php';
require_once APP_DIR . 'classes/TaskStatus.php';
$filePath = "FerstTaskList.txt";

$ferstTaskList = new TaskList($filePath);

$ferstTaskList->AddTask("My 1 text", 1);
$ferstTaskList->AddTask("My 2 text", 6);
$ferstTaskList->AddTask("My 3 text", 2);
//$ferstTaskList->getTasks();
//$ferstTaskList->deleteTask(1);
//$ferstTaskList->changeStatus(2, TaskStatus::COMPLETED);
