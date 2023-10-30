<?php

class Task
{
    public $description;
    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$task1 = new Task('OOP', 'Learn OOP');
$task2 = new Task('Sport', 'Play Football');

var_dump($task1->description);

$task1->complete();

var_dump($task1->completed);