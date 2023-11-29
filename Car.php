<?php
class Car{
    public $brand;
    private $mileage;
    static $describe = "I have 4 wheel, sometime 3<br>";
    public static function makeNoise(){
        echo "Beep, Beep!<br>";
    }

    public function __construct($thebrand, $themileage){
        $this->brand = $thebrand;
        $this->mileage = $themileage;
    }


    public function __destruct(){
        echo "{$this->brand} is dead at mileage {$this->mileage} <br>";
        echo Car::$describe;
        Car::makeNoise();
    }
    public function increaseMileage($amount){
        $this->mileage = $this->mileage + $amount;
    }

}