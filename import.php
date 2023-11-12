<?php

require_once "data/conflict.php";
require_once "data/helper.php";

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict = new Conflict("Ini adalah pesan konflik satu.\n");
echo $conflict->getMessage();

$conflict = new Conflict("Ini adalah pesan konflik dua.\n");
echo $conflict->getMessage();

helpMe();

echo APPLICATION . PHP_EOL;
