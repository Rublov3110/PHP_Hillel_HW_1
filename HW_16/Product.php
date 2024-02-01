<?php

class Product
{
    use LoggerTrait;

    private string $productName;
    private string $collar;

    public function __construct(string $productName, string $collar)
    {
        $this->productName = $productName;
        $this->collar = $collar;
    }

    public function TestProduct(int $price): void
    {
        echo "{$this->productName} {$this->collar} price {$price}" . PHP_EOL;
    }
}