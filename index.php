<?php
include "Tire.php";
include "Car.php";
include "Train.php";

$Train1 = new Train("union",1.435,200);
$Train1->increaseMileage(100);