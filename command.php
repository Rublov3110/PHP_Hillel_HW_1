<?php
//HW_1

/*
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

/*
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
*/

//HW_4

/*
echo "Please enter namber" . PHP_EOL;

$value = trim(fgets(STDIN));

echo match ($value)
{
    1 => "$value - green" . PHP_EOL,
    2 => "$value - red" . PHP_EOL,
    3 => "$value - blue" . PHP_EOL,
    4 => "$value - brown" . PHP_EOL,
    5 => "$value - violet" . PHP_EOL,
    6 => "$value - black" . PHP_EOL,
    default => "$value - white" . PHP_EOL,
};
*/

// WH_5

function areaCircle(int|float $rCircle): int|float
{
    if($rCircle <= 0 )
    {
        echo 'incorrect value'. PHP_EOL;
        return 0;
    }
    else
    {
        $area =($rCircle*2)*pi();
        return ($area);
    }
}

$rCircleUser=4;
$area = areaCircle($rCircleUser);
echo $area. PHP_EOL;

function  powUser1(int|float $base, int $exponent): int|float
{
    $value= pow($base, $exponent);
    return $value;
}

//$userBase=2;
//$userExponent=2;
//$powUser=sqrUser1($userBase,$userExponent);
//echo $sqrUser. PHP_EOL;

function  powUser2(int|float &$base, int $exponent)
{
    $base = pow($base, $exponent);
}

$userBase = 5;
$userExponent = 2;

powUser2($userBase,$userExponent);
echo $userBase. PHP_EOL;