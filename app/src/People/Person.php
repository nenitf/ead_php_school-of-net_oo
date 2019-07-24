<?php

namespace ErikFig\People;

class Person
{
  private $data = [];

  public function __construct()
  {
    // PHP_EOL: quebra de linha, End Of Line
    echo 'classe instanciada' . PHP_EOL;
  }

  public function setName(string $name)
  {
    $this->data[] = $name;
  }

  public function setAge(int $age)
  {
    $this->data[] = $age;
  }

  public function setWeight(float $weight)
  {
    $this->data[] = $weight;
  }

  // Quando método chamado não é encontrado
  // public function __call($method, $properties)
  // {
  //    var_dump($method, $properties);
  // }

  // Quando tentar imprimir em "string" a classe
  public function __toString() :string
  {
    return implode(', ', $this->data) . '.';
  }
}
