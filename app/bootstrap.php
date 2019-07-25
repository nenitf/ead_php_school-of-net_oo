<?php

require __DIR__.'/autoload.php';

$person = new ErikFig\People\Person;
$person->name = 'erik';
$person->age = 32;
$person->weight = 80.5;

// Retorna name com a primeira letra maiúscula
echo($person->name);
// Erik

echo '<br>';

echo $person;
// erik, 32, 80.5
