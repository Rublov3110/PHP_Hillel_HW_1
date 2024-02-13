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
//require_once APP_DIR . 'HW_14/BaseClass.php';
//require_once APP_DIR . 'HW_14/DerivedClass.php';
//
//$baseObj = new BaseClass();
//$derivedObj = new DerivedClass();
//
//$baseObj->printText();
//$derivedObj->printText();

//HW_15
//require_once APP_DIR . 'HW_15/Figure.php';
//require_once APP_DIR . 'HW_15/Circle.php';
//require_once APP_DIR . 'HW_15/Rectangle.php';
//try {
//$circle = new Circle(5);
//$rectanglr = new Rectangle(7, 8);
//$rectanglr->PrintArea();
//$rectanglr->PrintPerimeter();
//$circle->PrintArea();
//$circle->PrintPerimeter();
//} catch (Exception $exception)
//{
//    echo $exception->getMessage();
//    exit();
//}

//HW_16
//require_once APP_DIR . 'HW_16/trait/LoggerTrait.php';
//require_once APP_DIR . 'HW_16/Product.php';
//require_once APP_DIR . 'HW_16/User.php';
//
//
//$user = new User('Slavik', 'Rublov');
//$product = new Product('Monitir', "blak");
//
//$user->Log("Slavik", "Rublov");
//$user->TestFunction(29);
//$product->Log("Monitir", "blak");
//$product->TestProduct(5000);

//$user->logToFile("User {$user->name} created with email {$user->email}");
//$product->logToFile("Product {$product->productName} created with price {$product->price}");

//HW_19

require_once APP_DIR . 'HW_19/config.php';
require_once APP_DIR . 'HW_19/Connector.php';

function generatorFetch(PDOStatement $stnt): Generator
{
    while ($list = $stnt->fetch()) {
        yield $list;
    }
}

$db = Connector::getInstance();

//$sql = "INSERT INTO `list_of_films`(`name`,`year`,`budget`,`timing_min`) VALUES ('Test2', 2000, 25, 60)";
//$sql = "INSERT INTO `genre`(`genre_name`) VALUES ('test_genre')";
//$sql = "UPDATE `list_of_films` SET `name` = 'Test2' WHERE `name` = 'Test1'";
//$sql = "DELETE FROM `list_of_films` WHERE `id` = 4";
//$db ->query($sql);

//$sql = "SELECT * FROM `list_of_films`";
//$stnt = $db->query($sql);
//

$user_value = "Test2";
$sql = "SELECT * FROM `list_of_films` WHERE `name` = ? AND `deleted_at` IS NULL";
$stnt = $db->prepare($sql);
$stnt->execute([$user_value]);

foreach (generatorFetch($stnt) as $list){
    echo "<pre>";
    print_r($list);
    echo "<pre>";
}

//var_dump($db);