<?php


class User
{
    use LoggerTrait;

    private string $name;
    private string $lastName;

    public function __construct(string $name, string $lastName)
    {
        $this->name = $name;
        $this->lastName = $lastName;
    }

    public function TestFunction(int $age): void
    {
        echo "I am {$this->name} {$this->lastName} my age {$age}" . PHP_EOL;
    }

}