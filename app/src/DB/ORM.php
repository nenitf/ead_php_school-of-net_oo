<?php

namespace ErikFig\DB;

class ORM
{
  private $db;

  public function setDb(Db $db)
  {
    $this->db = $db;
  }
}
