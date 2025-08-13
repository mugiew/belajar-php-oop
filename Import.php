<?php

require_once __DIR__ . '/data/Conflict.php';
require_once __DIR__ . '/data/Helper.php';

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict();
$conflict2 = new Data\Two\Conflict();

helpMe();

echo APPLICATION . PHP_EOL;
