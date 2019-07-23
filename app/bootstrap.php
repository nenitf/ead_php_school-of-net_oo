<?php
// Executar o código com:
//  terminal: php /path/to/bootstrap.php
//  vim/nvim: :!php %

require __DIR__.'/src/People/Person.php';

// Não funciona pois não utiliza o namespace
// $person = new Person;

// Funciona
$person = new ErikFig\People\Person;


$person->setName("Felipe");
$person->setAge(23);
$person->setWeight(80.5);

var_dump($person);

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
