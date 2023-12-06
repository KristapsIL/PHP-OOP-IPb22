<?php
include "Tire.php";
include "Car.php";
include "Train.php";
include "Cat.php";
include "Dog.php";
include "Math.php";
include "Rectangle.php";
include "Circle.php";

$mas = [2,3,5,6];

$Dog1 = new Dog("Reksis", 6);
Dog::payAttention();
$Cat1 = new Cat("Mincis", 2);
$Cat2 = new Cat("Brincis", 3);

$Car1 = new Car("Volvo",1000);
$Train1 = new Train("Train", 1435, 31);

$Math1 = new Math();
Math::addTwo(1,2);
Math::factorial(10);
Math::sum($mas);
Math::max($mas);

$Rectangle1 = new Rectangle("green",15,25);
echo $Rectangle1->calculateArea()."<br>";

$Circle1 = new Circle("red",5);
echo $Circle1->calculateArea()."<br>";