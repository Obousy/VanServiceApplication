<?php
class Wasteremoval {
  private $firstname;
  private $surname;
  private $address;
  private $city; 
  private $wastetype;

  function __get($name) {
    return $this->$name;
  }

  function __set($name,$value) {
    $this->$name = $value;
  }
}
?>
