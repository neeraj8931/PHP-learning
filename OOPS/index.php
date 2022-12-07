<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOPS practice</title>
</head>
<body>
<?php

echo "<h3> Simple boject Fruit </h3>";

class Fruit {
  // Properties
  protected $name;
  public $color;
  private $weight;

  // Methods
  function setName($name) {
    $this->name = $name;
  }
  function getName() {
    return $this->name;
  }
  function setWeight($weight){
    $this->weight = $weight;
  }
  function getWeight(){
    return $this->weight;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->setName('Apple');
$banana->setName('Banana');
$apple->setWeight(24);
$banana->setWeight(30);

echo $apple->getName()." - ".$apple->getWeight();
echo "<br>";
echo $banana->getName()." - ".$banana->getWeight();

echo "<br>";
echo "<h3> Using Inheritance </h3>";

class Shake extends Fruit{
    function makeShake(){

        echo "<h4>Making Shake of ". $this->name ."</h4>";
    }
}
$juice = new Shake();
$juice->setName("orange");
$juice->setWeight(22);
$juice->makeShake();
?>


</body>
</html>