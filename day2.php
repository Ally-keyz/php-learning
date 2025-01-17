<?php
//variables in php;

//non constant variable
$name = "Mark";

//constant variables 
define("cities","London");
$title = "Doctor";

echo "Title: {$title} <br/>"."cities: ".cities;

// using a global key word

function variablePrint(){
    global $name;
    echo "<br/> This is a global variable {$name}";
}
variablePrint();
 ?>