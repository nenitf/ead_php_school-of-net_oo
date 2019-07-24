<?php

require __DIR__.'/autoload.php';

// Retorna array vazio
// array(0) { } 
// var_dump((new ErikFig\DB\ORM)->select(true));

// Retorn exception
// Fatal error: Uncaught Exception: Data deveria ser positivo in /var/www/html/src/DB/ORM.php:20 Stack trace: #0 /var/www/html/bootstrap.php(6): ErikFig\DB\ORM->select(false) #1 {main} thrown in /var/www/html/src/DB/ORM.php on line 20
// var_dump((new ErikFig\DB\ORM)->select(false));

// Retorn exception tratada
// Data deveria ser positivo
try {
  var_dump((new ErikFig\DB\ORM)->select(false));
} catch (ErikFig\MyException $err) {
  echo "MyException: " . $err->getMessage();
} catch (Exception $err) {
  // É possível possuir multiplas classes de exception
  echo "PADRÃO: " . $err->getMessage();
}
