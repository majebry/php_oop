<?php

class Person
{
    private $name;
    private $age;

    public function __construct($n)
    {
        $this->name = $n;
    }

    public function setAge($a)
    {
        if ($a < 18) {
            die('age is not allowed');
        }

        $this->age = $a;
    }

    public function getAge()
    {
        return $this->age * 365;
    }

    public function getName()
    {
        return strtoupper($this->name);
    }
}


$p1 = new Person('hani');

echo $p1->getName();

// echo $p1->name;

// $p1->setAge(11);

// echo $p1->getAge();

$p2 = new Person('Khalid');

// $p2->setAge(15);

// $p1->age = 10;

// echo $p1->age;
