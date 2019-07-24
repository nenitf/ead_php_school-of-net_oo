<?php

namespace ErikFig\DB;

class MySql implements Db
{
  // Polimorfismo
  public function connect() :string
  {
    return 'connected to MySQL';
  }
}
