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
/*
 function areaCircle(int|float $rCircle): int|float
{
    if ($rCircle <= 0) {
        echo 'incorrect value'. PHP_EOL;
        return 0;
    } else
    {
        $area = pi() * pow($rCircle, 2);
        return ($area);
    }
}

$rCircleUser = 4;
$area = areaCircle($rCircleUser);
echo $area. PHP_EOL;

function  powUser1(int|float $base, int $exponent): int|float
{
    $value = pow($base, $exponent);
    return $value;
}

//$userBase = 2;
//$userExponent = 2;
//$powUser = sqrUser1($userBase, $userExponent);
//echo $sqrUser . PHP_EOL;

function  powUser2(int|float &$base, int $exponent)
{
    $base = pow($base, $exponent);
}

$userBase = 5;
$userExponent = 2;

powUser2($userBase,$userExponent);
echo $userBase . PHP_EOL;
 */

//HW_6
/*
function myFunction(int $value1, int $value2, ?Closure $callback = null) {
    $result = $value1 * $value2;

    if (isset($callback)) {
        $callback($result);
    }

    return $result;
}

$printResult = function ($arg) {
    echo $arg . PHP_EOL;
};

$result1 = myFunction(5, 10);
$result2 = myFunction(5, 10, $printResult);

echo $result1 . PHP_EOL;
*/

//HW_7_8
/*
function ranArray(int $length, int $min, int $max): array
{
    $array = [];
    for ($i = 0; count($array) < $length; $i++) {
        $array[] = rand($min, $max);
    }

    return $array;
}

function writeArray(array $array): void
{
    sort($array);

    foreach ($array as $value) {
        echo $value . PHP_EOL;
    }
}

function arrayMaxMin(array $array): void
{
    $arrayMin = min($array);
    $arrayMax = max($array);

    echo "Min: $arrayMin" . PHP_EOL;
    echo "Max: $arrayMax" . PHP_EOL;
}

$arrayUser = ranArray(20, 1, 40);

//writeArray($arrayUser);
//arrayMaxMin($arrayUser);

//1
$i = 1;
$line = 20;

while ($i <= $line) {
    //echo $i . PHP_EOL;
    $i++;
}

//2
$j = 1;
$number = 5;
$fact = 1;

while ($j <= $number) {
    $fact *= $j;
    $j++;
}

echo "$number! = $fact" . PHP_EOL;

//3
$y = 1;
$value = 20;

while ($y <= $value) {
    if ($y % 2 == 0) {
        echo $y . PHP_EOL;
    }
    $y++;
}
*/

//HW_9
/*
function ranArray(int $length, int $min, int $max): array
{
    $array = [];
    for ($i = 0; count($array) < $length; $i++) {
        $array[] = rand($min, $max);
    }

    return $array;
}

$array = ranArray (10, 1, 10);

$summArray = 0;
$multiArray = 1;
$number5 = 0;

foreach ($array as $value) {
    $summArray += $value;
    $multiArray *= $value;
    if ($value % 3 === 0) {
        echo $value . PHP_EOL;
    }
    if ($value === 5) {
        $number5++;
    }
}

var_dump($summArray);
var_dump($multiArray);
var_dump($number5);
*/

//HW_10
/*
function fibonacci($userNumber) {
    $a = 0;
    $b = 1;

    while ($a < $userNumber) {
        yield $a;
        $c = $a + $b;
        $a = $b;
        $b = $c;
    }
}

$userNumber = 100;

$generator = fibonacci($userNumber);

foreach ($generator as $number) {
    echo $number . " ";
}
*/

//HW_11
/*
function writFile(string $userText, string $filePath)
{
    $file = fopen($filePath, 'a+');
    if (!$file) {
        echo "$filePath dont open!!" . PHP_EOL;
    } else {
        fwrite($file, $userText . PHP_EOL);
        fclose($file);
//        echo "$filePath open!!" . PHP_EOL;
    }

}

function readLastText(string $filePath): string|bool
{
    if (file_exists($filePath)) {
        $file = fopen($filePath, 'r');
        if (!$file) {
            echo "$filePath dont open!!" . PHP_EOL;
            return "Error";
        } else {
            $content = file($filePath);
            $lastArg = end($content);
            fclose($file);
            return $lastArg;
        }
    } else {
        echo "$filePath not find ";
        return "Error";
    }
}

$filePath = 'user_text.txt';
$userText = trim(fgets(STDIN));
writFile($userText, $filePath);
$value = readLastText($filePath);
echo "Last argument = $value" . PHP_EOL;
*/


