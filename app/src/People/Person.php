<?php

namespace ErikFig\People;

class Person
{
  private $name;
  private $age;
  private $weight;

  public function __construct()
  {
  }

  public function setName(string $name)
  {
    $this->name = $name;
  }

  public function setAge(int $age)
  {
    $this->age = $age;
  }

  public function setWeight(float $weight)
  {
    $this->weight = $weight;
  }

  public function getName()
  {
    // Regra para ver o nome com a primeira letra maiúscula
    return ucfirst($this->name);
  }

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


  public function __toString() :string
  {
    return $this->name . ', ' . $this->age . ', ' . $this->weight . '.';
  }
}
