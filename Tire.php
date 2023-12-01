<?php
class Tire{
    public $size;
    public $type;
    protected $quality;
    public function __construct(

        ){}
    public function __destruct(){
        echo "Tire size: {$this->size}, tire type: {$this->type}.<br> BOOM!<br>";
    }
}