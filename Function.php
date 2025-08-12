<?php

require_once __DIR__ . '/data/Person.php';

$siska = new Person('Siska', 'Kuningan');
$siska->name = 'Siska';
$siska->sayHello('Mugiew');

$khai = new Person('Khairil', null);
$khai->name = 'Khairil';
$khai->sayHello();

$siska->info();
$khai->info();
