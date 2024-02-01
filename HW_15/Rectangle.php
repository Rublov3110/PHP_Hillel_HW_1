<?php

class Rectangle extends Figure
{

    private float $sideA;
    private float $sideB;
    private  float $area;
    private  float $perimeter;
    public function __construct(float $sideA, float $sideB)
    {
        $this->setSideA($sideA);
        $this->setSideB($sideB);
    }
    private function setSideA(float $sideA)
    {
        if($sideA === null || $sideA <= 0)
        {
            throw new Exception("incorrect $sideA");
        }
        $this->sideA = $sideA;
    }
    private function setSideB(float $sideB)
    {
        if($sideB === null || $sideB <= 0)
        {
            throw new Exception("incorrect $sideB");
        }
        $this->sideB = $sideB;

    }
    private function setArea(float $area)
    {
        $this->area = $area;
    }
    private function setPerimeter(float $perimeter)
    {
        $this->perimeter = $perimeter;
    }
    private function getSideA(): float
    {
        return $this->sideA;
    }
    private function getSideB(): float
    {
        return $this->sideB;
    }
    private function getArea():float
    {
        return $this->area;
    }
    private function getPerimeter():float
    {
        return $this->perimeter;
    }
    protected function Area()
    {
       $this->setArea($this->getSideA()*$this->getSideB());
    }
    protected function Perimeter()
    {
        $this->setPerimeter(2 * ($this->getSideA() + $this->getSideB()));
    }

    public function PrintArea()
    {
        $this->Area();
        echo "Side A:" . $this->getSideA() . PHP_EOL;
        echo "Side B:" . $this->getSideB() . PHP_EOL;
        echo "Area:" . $this->getArea() . PHP_EOL;
    }
    public function PrintPerimeter()
    {
        $this->Perimeter();
        echo "Side A:" . $this->getSideA() . PHP_EOL;
        echo "Side B:" . $this->getSideB() . PHP_EOL;
        echo "Perimeter:" . $this->getPerimeter() . PHP_EOL;
    }
}