<?php
abstract class Vehicle{
    public $brand;
    protected $mileage;
    static $description = "I am large and stronk";

    public function __construct($brand, $mileage){
        $this->brand = $brand;
        $this->mileage = $mileage;
    }

    public function __destruct(){
        echo "{$this->brand} is dead at mileage {$this->mileage}<br>";
    }

    public function increaseMileage($amount){
        $this->mileage += $amount;
    }
        
    abstract static function makeNoise();
}
