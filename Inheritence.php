<?php

require_once __DIR__ . '/data/Manager.php';

$manager = new Manager();
$manager->name = 'Mugiew';
$manager->sayHello('Budi');

$vp = new VicePresident();
$vp->name = 'Siska';
$vp->sayHello('Khai');
