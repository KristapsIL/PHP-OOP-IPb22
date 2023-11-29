<?php
class Train{
    public function __construct(
        public $brand,
        public $trackGauge,
        private $mileage){}
    
    static function makeNoise(){
        echo "Choo, Choo!<br>";
    }
    public function __destruct(){
        echo "{$this->brand} is dead at mileage {$this->mileage}<br>";
        Train::makeNoise();
    }
    public function increaseMileage($amount){
        $this->mileage += $amount;
    }
}