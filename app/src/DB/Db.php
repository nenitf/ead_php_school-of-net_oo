<?php

namespace ErikFig\DB;

interface Db
{
  // Forçar tipagem de retorno
  public function connect() :string;
}
