<?php

class User
{
  public $name;
  public $age;
  public $weight;
  public $height;

  public function __construct($name, $age, $weight, $height)
  {
    $this->name = $name;
    $this->age = $age;
    $this->weight = $weight;
    $this->height = $height;
  }
}
