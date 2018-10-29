<?php

class Person
{
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;

        echo "$this->name says \"Hello\"!";
    }

    function sayHello(): void
    {
        echo "$this->name says \"Hello\"!";

    }
}

$name = readline();

$person = new Person($name);