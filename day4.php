<?php
// functions in php

function calculateArea($length,$width){
    $area = $length * $width;
    echo"The area is {$area} <br/>";
}

function sayHello($name){
    if(!$name){
        echo"please provide a name";
    }
    else{
        echo"Hello".$name;
    }
}

calculateArea(5,4);
sayHello("Manzi");

?>