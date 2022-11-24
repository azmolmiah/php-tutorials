<?php

abstract class Shape
{
    public $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    abstract public function getArea(): float;

    public function getColor()
    {
        return $this->color;
    }
}

class Triangle extends Shape
{
    public $width;
    public $height;

    public function __construct($color, $width, $height)
    {
        parent::__construct($color);
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): float
    {
        return $this->height * $this->width / 2;
    }
}

class Circle extends Shape
{
    public $radius;

    public function __construct($color, $radius)
    {
        parent::__construct($color);
        $this->radius = $radius;
    }

    public function getArea(): float
    {
        return $this->radius * $this->radius * 3.14;
    }
}

class Rectangle extends Shape
{
    public $width;
    public $height;

    public function __construct($color, $width, $height)
    {
        parent::__construct($color);
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): float
    {
        return $this->height * $this->width;
    }
}

$rectanlge = new Rectangle("red", 10, 5);
$circle = new Circle('blue', 5);
$triangle = new Triangle('green', 20, 50);
echo $rectanlge->getArea();
// echo $circle->getArea();
// echo $triangle->getArea();
