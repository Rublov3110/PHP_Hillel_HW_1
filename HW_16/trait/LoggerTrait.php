<?php


trait LoggerTrait
{
    public function Log(string $value, string $value2): void
    {
        echo $value . " " . $value2 . PHP_EOL;
    }
}