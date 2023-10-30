<?php

abstract class Shape
{
    private $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    abstract function getArea();
}

class Square extends Shape
{
    public $length = 10;

    public function getArea()
    {
        return $this->length * $this->length;
    }
}

class Triangle extends Shape
{
    public $height = 3;
    public $base = 2;

    public function getArea()
    {
        return .5 * $this->height * $this->base;
    }
}

class Circle extends Shape
{
    public $radius = 5;

    public function getArea()
    {
        return 3.14 * ($this->radius * $this->radius);
    }
}

$s = new Square('green');

// echo $s->getArea();

$t = new Triangle('red');
// echo $t->getArea();

$c = new Circle('blue');
echo $c->getArea();