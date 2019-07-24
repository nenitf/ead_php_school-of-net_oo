<?php

require __DIR__.'/autoload.php';

// $person = new ErikFig\People\Person;
// $person->setName("Felipe");
// $person->setAge(23);
// $person->setWeight(80.5);
// 
// var_dump($person);

/* Result:
 * object(Person)#1 (1) {
 *   ["data":"Person":private]=>
 *   array(3) {
 *     [0]=>
 *     string(6) "Felipe"
 *     [1]=>
 *     int(23)
 *     [2]=>
 *     float(80.5)
 *   }
 * }
 */

var_dump((new ErikFig\DB\Postgres)->connect());
var_dump((new ErikFig\DB\MySql)->connect());

/*
 * Erro bizarro quando executado na linha de comando: php app/bootstrap.php
 *
 * PHP Fatal error:  Uncaught Error: Class 'ErikFig\DB\Postgres' not found in /home/neni/dev/php/school-of-net/ead-son-php-oo/app/bootstrap.php:29
 * Stack trace:
 * #0 {main}
 * thrown in /home/neni/dev/php/school-of-net/ead-son-php-oo/app/bootstrap.php on line 29
 *
 * Quando carregado no servidor o var_dump funciona
 */
