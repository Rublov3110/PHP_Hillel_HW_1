<?php

class Circle extends Figure
{

    private float $radius;
    private  float $area;
    private  float $perimeter;
    public function __construct(float $radius)
    {
        $this->setRadius($radius);
    }
    private function setRadius(float $radius)
    {
        if ($radius === null || $radius <= 0) {
            throw new Exception("incorrect $radius");
        }
        $this->radius = $radius;
    }
    private function setArea(float $area)
    {
        $this->area = $area;
    }
    private function setPerimeter(float $perimeter)
    {
        $this->perimeter = $perimeter;
    }
    private function getRadius(): float
    {
        return $this->radius;
    }
    private function getArea():float
    {
        return $this->area;
    }
    private function getPerimeter():float
    {
        return $this->perimeter;
    }
    public function Area()
    {
        $this->setArea(pi() * pow($this->getRadius(),2));
    }
    public function Perimeter()
    {
       $this->setPerimeter(2 * pi() * $this->getRadius());
    }

    public function PrintArea()
    {
        $this->Area();
        echo "Radius:" . $this->getRadius() . PHP_EOL;
        echo "Area:" . $this->getArea() . PHP_EOL;
    }
    public function PrintPerimeter()
    {
        $this->Perimeter();
        echo "Radius:" . $this->getRadius() . PHP_EOL;
        echo "Perimeter:" . $this->getPerimeter() . PHP_EOL;
    }
}