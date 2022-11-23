<?php

class Person {
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother=null, $father=null )
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->hp = 100;
  
  }

  function sayHi($name) {
    return "Hi $name, I'm " . $this->name;
  }
  function setHp($hp) {
    if ($this->hp + $hp >= 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp() {
    return $this->hp;
  }
  function getName() {
    return $this->name;
  }
  function getMother() {
    return $this->mother;
  }
  function getFather() {
    return $this->father;
  }
  function getInfo() {
    return "
    <h2>A few words about my family</h2><br>" . "Hello, my name is " . $this->getName() . 
    "<br>my father is " . $this->getFather()->getName() . 
    "<br>my mother is " . $this->getMother()->getName() . 
    "<br>I have two gramothers and two grandfathers. " . 
    "<br>one of my grandmas is " . $this->getMother()->getMother()->getName() . 
    "<br>another grandma is " . $this->getFather()->getMother()->getName() . 
    "<br>one of my grandpas is " . $this->getMother()->getFather()->getName() . 
    "<br>another one is " . $this->getFather()->getFather()->getName();
  }


}
// здоровье не может быть больеш 100 уе
$sophia = new Person("Sophia", "Vasilevna", 72, null, null);
$roman = new Person("Roman", "Aleksandrovich", 76, null, null);

$igor = new Person("Igor", "Petrov", 68, null, null);
$tamara = new Person("Tamara", "Ivanovna", 66, null, null);


$alex = new Person("Alex", "Ivanov", 42, $sophia, $roman);
$olga = new Person("Olga", "Ivanova", 42, $tamara, $igor);

$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);

echo $valera->getInfo();

// echo $valera->getMother()->getFather()->getName();

// echo $alex->sayHi($igor->name);
// $medKit = 50;
// $alex->hp = $alex->hp - 30; //снижено здоровье
// $alex->setHp(-30);
// echo $alex->getHp(). "<br>";
// $alex->hp = $alex->hp + $medKit; //увеличено здоровье за счет медкит
// $alex->setHp($medKit);
// echo $alex->getHp();

//инкапсуляция -сокрытие реализации,модификаторы доступа, вместо пабли -сделали прайват
// инвтерфейс взаимодействия
// setter -устанавливает getter - отдает




