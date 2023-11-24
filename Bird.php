<?php
class Bird {
    public $name;
    private $age;
    
    function __construct($thename, $theage){
        $this->name = $thename;
        $this->age = $theage;
    }

    function __destruct(){
        echo "Fly away {$this->name} <br> ";
        echo "{$this->name} crashed <br>";
    }
}
