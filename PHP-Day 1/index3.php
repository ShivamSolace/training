<?php
//String
$a = 'Hello world!';
echo $a;
echo "<br>";

echo "<br>";
echo "<br>";
echo "<br>";
$x3 = "Hello world!";
echo strlen ($x3);  // total character
echo "<br>";
echo str_word_count($x3);       //total words
echo "<br>";
echo strrev($x3);       //reverse order
echo "<br>";
echo str_replace("world", "Dolly", "Hello world!");     //change word


//Integer
$x1 = 5985;
echo $x1;
echo "<br>";
var_dump($x1);
echo "<br>";
// echo php_int_max($x1);
echo "<br>";
// echo php_int_min($x1);
echo "<br>";
echo(pi());
echo "<br>";
echo(min(0, 150, 30, 20, -8, -200));
echo "<br>";
echo(max(0, 150, 30, 20, -8, -200));
echo "<br>";
echo(abs(-6.7));
echo "<br>";
echo(abs(6.7));
echo "<br>";


//float
$x2 = 10.365;
echo $x2;
echo "<br>";
var_dump($x2);
echo "<br>";
//array
$cars = array("Volvo","BMW","Toyota");
echo "<br>";
// echo $cars;
var_dump($cars[1]);

//object

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  echo "<br>";
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();
  echo "<br>";
$myCar = new Car("Blue", "Lamborgini");
echo $myCar -> message();


/*
echo "<br>";
echo "<br>";
echo "<br>";
$name = "Shivam yadav";
$age = 26;
$town = "nashik";
echo $name;
echo "<br>";
echo $age;
echo "<br>";
echo $town;
*/


echo "<br>";
echo $x3;
echo "<br>";
//null
$x3 = null;
echo $x3;
echo "<br>";
var_dump($x3);
?>