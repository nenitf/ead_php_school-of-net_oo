<?php

class Person
{
  // Type hinting no php 5.6
  /*
   * public function setName($name)
   * {
   *   if(!is_string($name))
   *   {
   *     die("Não é uma string");
   *   }

   *   return $name;
   * }
   */

  private $data = [];

  // string, bool, float, int, iterable (array object) e callable (Função anônima)
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
}
