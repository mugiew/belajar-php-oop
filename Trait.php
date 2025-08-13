<?php

require_once __DIR__ . '/data/SayGoodBye.php';

use Data\Traits\{Person, SayGoodBye, SayHello};

$person = new Person();
$person->goodBye('Joko');
$person->hello('Budi');

$person->name = 'Mugiew';

var_dump($person);

$person->run();
