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

