<?php
include_once "Vehicle.php";
class Car extends Vehicle{

    static $describe = "I have 4 wheel, sometime 3<br>";

    static function makeNoise()
    {
        echo "Broom, Broom!<br>";
    }
}