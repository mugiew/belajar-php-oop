<?php

require_once __DIR__ . '/data/Conflict.php';
require_once __DIR__ . '/data/Helper.php';

use Data\One\{Conflict as Conflict1, Dummy, Sample};
use function Helper\{helpMe};

$conflict1 = new Conflict1();
$dummy = new Dummy();
$sample = new Sample();

helpMe();
