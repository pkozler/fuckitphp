<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use FuckItPhp\FuckIt;

$path = __DIR__ . '/../resources/fucked.php'; // File path of the fucked up PHP source

echo FuckIt::it($path);