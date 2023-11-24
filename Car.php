<?php
class Car{
    public $brand;
    private $mileage;

    function __construct($thebrand, $themileage){
        $this->brand = $thebrand;
        $this->mileage = $themileage;
    }

    function __destruct(){
        echo "{$this->brand} is dead at mileage {$this->mileage} <br>";
    }
    public function increaseMileage($amount){
        $this->mileage = $this->mileage + $amount;
    }

}