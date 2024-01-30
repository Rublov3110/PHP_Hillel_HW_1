<?php
define('APP_DIR', __DIR__ . '/');


//HW_12
//require_once APP_DIR . 'classes/TaskList.php';
//require_once APP_DIR . 'classes/TaskStatus.php';

//$filePath = "FerstTaskList.txt";
//
//$ferstTaskList = new TaskList($filePath);
//
//$ferstTaskList->AddTask("My 1 text", 1);
//$ferstTaskList->AddTask("My 2 text", 6);
//$ferstTaskList->AddTask("My 3 text", 2);
////$ferstTaskList->getTasks();
////$ferstTaskList->deleteTask(1);
//$ferstTaskList->changeStatus(2, TaskStatus::COMPLETED);

//HW_13
//require_once APP_DIR . 'HW_13/BankAccount.php';
//try {
//    $ferst = new BankAccount(123456, 1000);
//
//    echo $ferst->AddMoney(0) . PHP_EOL;
////    echo $ferst->MinusMoney(500) . PHP_EOL;
////    echo $ferst->MinusMoney(700) . PHP_EOL;
//} catch (Exception $exception)
//{
//    echo $exception->getMessage();
//    exit();
//}

//WH_14
require_once APP_DIR . 'HW_14/BaseClass.php';
require_once APP_DIR . 'HW_14/DerivedClass.php';

$baseObj = new BaseClass();
$derivedObj = new DerivedClass();

$baseObj->printText();
$derivedObj->printText();
