<?php

namespace ErikFig;

// Se for usado "use" a classe pode ser extendida sem \
//  class MyException extends Exception
// do contrário:
//  class MyException extends \Exception
use Exception;

class MyException extends Exception
{
  // ...
}
