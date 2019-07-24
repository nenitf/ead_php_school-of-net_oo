<?php

namespace ErikFig\DB;

class Postgres implements Db
{
  // Polimorfismo
  public function connect() :string
  {
    return 'connected to Postgres';
  }
}
