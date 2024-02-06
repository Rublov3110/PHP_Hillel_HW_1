<?php
define('APP_DIR', __DIR__ . '/');


require_once APP_DIR . 'classes/TaskList.php';
require_once APP_DIR . 'classes/TaskStatus.php';

$filePath = "FerstTaskList.txt";

$ferstTaskList = new TaskList($filePath); // пункт 4 При создании экземпляра нового класса круглые скобки ДОЛЖНЫ присутствовать всегда, даже если в конструктор не переданы аргументы.

$ferstTaskList -> AddTask("My 1 text", 1); // пункт 4.7 При вызове метода или функции НЕ ДОЛЖНО быть пробела между именем метода
$ferstTaskList->AddTask("My 2 text", 6);
$ferstTaskList->AddTask("My 3 text", 2);
//$ferstTaskList->getTasks();
//$ferstTaskList->deleteTask(1);
$ferstTaskList->changeStatus(2, TaskStatus::COMPLETED);

