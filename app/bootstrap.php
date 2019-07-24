<?php

require __DIR__.'/autoload.php';

$person = new ErikFig\People\Person;
$person->setName('Erik');
$person->setAge(32);
$person->setWeight(80);

echo $person;
// Erik, 32, 80
