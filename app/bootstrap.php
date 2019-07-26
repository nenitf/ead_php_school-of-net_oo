<?php

require __DIR__.'/autoload.php';

$person = new ErikFig\People\Person;
$person->name = 'erik';
$person->age = 32;
$person->weight = 80.5;

echo $person;
// erik, 32, 80.5
