<?php

require_once __DIR__ . '/data/Person.php';

$person = new Person('Mugiew', 'Jakarta');
$person->name = 'Mugiew';
$person->address = 'Jakarta';
// $person->country = 'Indonesia';

echo "Name: {$person->name}" . PHP_EOL;
echo "Address: {$person->address}" . PHP_EOL;
echo "Country: {$person->country}" . PHP_EOL;

var_dump($person);
