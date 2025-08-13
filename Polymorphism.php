<?php

require_once __DIR__ . '/data/Programmer.php';

$company = new Company();

$company->programmer = new Programmer('Mugiew');
var_dump($company);

$company->programmer = new BackendProgrammer('Mugiew');
var_dump($company);

$company->programmer = new FrontendProgrammer('Mugiew');
var_dump($company);
