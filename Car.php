<?php
include_once "Vehicle.php";
class Car extends Vehicle{

    static $describe = "I have 4 wheel, sometime 3<br>";

    public function __construct($brand, $mileage){
        $this->brand = $brand;
        $this->mileage = $mileage;
    }
    static function makeNoise()
    {
        echo "Broom, Broom!<br>";
    }
}