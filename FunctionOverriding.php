<?php

require_once __DIR__ . '/data/Manager.php';

$manager = new Manager();
$manager->name = 'Mugiew';
$manager->sayHello('Joko');

$vp = new VicePresident();
$vp->name = 'Budi';
$vp->sayHello('Joko');
