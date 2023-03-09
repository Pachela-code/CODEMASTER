<?php
class Repair {
  public $name;
  public $mechanic;
  public $vehicle;
  public $description;
  public $date;
  public $time;

  public function __construct($name, $mechanic, $vehicle, $description, $date, $time) {
    $this->name = $name;
    $this->mechanic = $mechanic;
    $this->vehicle = $vehicle;
    $this->description = $description;
    $this->date = $date;
    $this->time = $time;
  }
}
