<?php

interface HelloWorld
{
    function sayHello(): void;
}


$helloWorld = new class('Mugiew') implements HelloWorld {
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo 'Hello ' . $this->name . PHP_EOL;
    }

    public function __destruct()
    {
        unset($this->name);
    }
};
$helloWorld->sayHello();
