<?php

namespace ErikFig\People;


class Person
{
  //Não procurar dentro do mesmo namespace da classe Person
  // Errado: use ErikFig\GetterSetter;
  // Certo: use \ErikFig\GetterSetter;
  use \ErikFig\GetterSetter; // Importa todas funções da trait GetterSetter

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
    return ucfirst($this->name);
  }

  public function __toString() :string
  {
    return $this->name . ', ' . $this->age . ', ' . $this->weight . '.';
  }
}
