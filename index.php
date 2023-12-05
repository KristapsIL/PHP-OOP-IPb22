<?php
include "Tire.php";
include "Car.php";
include "Train.php";
include "Cat.php";
include "Dog.php";

$Dog1 = new Dog("Reksis", 6);
Dog::payAttention();
$Cat1 = new Cat("Mincis", 2);
$Cat2 = new Cat("Brincis", 3);

$Car1 = new Car("Volvo",1000);
$Train1 = new Train("Train", 1435, 31);