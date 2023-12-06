<?php
class Math{
    public static function addTwo($first, $second){
        echo "Add two:".$first+$second."<br>";
    }

    public static function factorial($number){
        $factorial = 1;
        for($i = $number; $i >= 1; $i--){
            $factorial = $factorial * $i;
        }
        echo "Factorial:".$factorial."<br>";
    }
    public static function sum($mas){
        $count = count($mas);
        $sum = 0;
        foreach($mas as $value){
            $sum += $value;
        }
        echo "Sum av.:".$sum/$count."<br>";
    }
    public static function max($mas){
        echo "Max val:".max($mas)."<br>";
    }
}