<?php

require __DIR__ . "/vendor/autoload.php";

use App\Person;

$person = new Person();

$person->setCpf("11122233344");

echo $person->getCpfWithMask();
