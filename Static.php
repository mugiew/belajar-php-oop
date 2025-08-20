<?php

require_once __DIR__ . '/helper/MathHelper.php';

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = 'Mugiew Galeano';
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10, 10, 10, 10);
echo "Result: $result" . PHP_EOL;
