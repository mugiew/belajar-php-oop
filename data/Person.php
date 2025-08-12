<?php

class Person
{
    const AUTHOR = 'Mugiew Galeano';

    var string $name;
    var ?string $address = null;
    var string $country = 'Indonesia';

    function __construct(string $name, ?string $address = null)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function  sayHello(?string $name = null): void
    {
        if (is_null($name)) {
            echo 'Hi, my name is ' . $this->name . PHP_EOL;
        } else {
            echo 'Hello ' . $name . ', My name is ' . $this->name . PHP_EOL;
        }
    }

    function info()
    {
        echo 'Author: ' . self::AUTHOR . PHP_EOL;
    }

    function __destruct()
    {
        echo 'Object person ' . $this->name . ' is destroyed' . PHP_EOL;
    }
}
