<?php

// Tipo de classe que cria "herança horizontal"
// Não precisa implementar ou herdar
// Como se fosse uma "gaveta" de funções uteis

namespace ErikFig;

trait GetterSetter
{
  public function __set($propertie, $value)
  {
    // Tenta adivinhar o nome do método
    // e.g. setName
    $method = 'set' . ucfirst($propertie);

    // Caso o nome do método exista na classe
    // chama com o parâmetro
    // do contrário seta a propriedade
    if (method_exists($this, $method)) {
      $this->$method($value);
    } else {
      $this->$propertie = $value;
    }
  }

  public function __get($propertie)
  {
    // Tenta adivinhar o nome do método
    // e.g. getName
    $method = 'get' . ucfirst($propertie);

    // Caso o nome do método exista na classe
    // chama
    // do contrário retorna a propriedade
    if (method_exists($this, $method)) {
      return $this->$method();
    }
    return $this->$propertie;
  }
}
