<?php
/*
HW_1
$firstName = "Slavik";
$lastName = "Rublov";
$age = 28;
var_dump($firstName);
var_dump($lastName);
var_dump($age);
echo $firstName," ",$lastName, " ", $age, "\n";
*/

// HW_2

/*
$stringVaribale = "Please enter your first and last name";

echo $stringVaribale . PHP_EOL;

$firstName = trim(fgets(STDIN));
$lastName = trim(fgets(STDIN));

$stringVaribale = "Hello $firstName $lastName";
echo $stringVaribale. PHP_EOL;

$stringVaribale = "$firstName $lastName, please enter 3 numbers";
echo $stringVaribale. PHP_EOL;

$firstNumber = trim(fgets(STDIN));
$secondNumber = trim(fgets(STDIN));
$thirdNumber = trim(fgets(STDIN));

$sumNumber = $firstNumber + $secondNumber + $thirdNumber;
$averageNumber = $sumNumber/3;

echo "Sum of numbers: $sumNumber".PHP_EOL;
echo "Average value: $averageNumber".PHP_EOL;

var_dump($sumNumber);
var_dump($averageNumber);
*/

// HW_3

$integer1 = 10;
$integerString2 = "10";

$string1 = "Hello";
$stringBool = "true";

$bool1 = true;
$bool2 = false;

$float1 = 5.5;
$float2String = "5.5";

$nullVaribale = null;
$nullString = "null";

var_dump($integer1 === $integerString2);//false
var_dump($integer1 == $integerString2);//true

echo  PHP_EOL;
var_dump($string1 == $stringBool);//false
var_dump($string1 == $integerString2);//false


echo  PHP_EOL;
var_dump($bool1 === $bool2);//false
var_dump($bool1 == $float1);//true
var_dump($bool1 === $stringBool);//false

echo  PHP_EOL;
var_dump($float1 === $float2String);//false
var_dump($float1 == $float2String);//true
var_dump($integerString2 == $float2String);//false

echo  PHP_EOL;
var_dump($nullVaribale == $bool2);//true
var_dump($nullVaribale === $bool2);//false
var_dump($nullVaribale == $nullString);//false

echo "v2". PHP_EOL;

$integer1 = 10;
$integerString2 =(int)"10";

$string1 = "Hello";
$stringBool = (bool)"true";

$bool1 = true;
$bool2 = false;

$float1 = 5.5;
$float2String = (float)"5.5";

$nullVaribale = null;
$nullString = "null";

var_dump($integer1 === $integerString2);//true
var_dump($integer1 == $integerString2);//true

echo  PHP_EOL;
var_dump($string1 == $stringBool);//true
var_dump($string1 == $integerString2);//false


echo  PHP_EOL;
var_dump($bool1 === $bool2);//false
var_dump($bool1 == $float1);//true
var_dump($bool1 === $stringBool);//true

echo  PHP_EOL;
var_dump($float1 === $float2String);//true
var_dump($float1 == $float2String);//true
var_dump($integerString2 == $float2String);//false

echo  PHP_EOL;
var_dump($nullVaribale == $bool2);//true
var_dump($nullVaribale === $bool2);//false
var_dump($nullVaribale == $nullString);//false


