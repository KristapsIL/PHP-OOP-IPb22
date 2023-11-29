<?php
class Tire{

    public function __construct(
        public $size,
        public $type,
        private $quality
        ){}
    public function __destruct(){
        echo "Tire size: {$this->size}, tire type: {$this->type}.<br> BOOM!<br>";
    }
}