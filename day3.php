<?php
//loops in php

//sum up all numbers 

$n = 5;
$sum = 0;

for($i = 1 ; $i <= $n ; $i++){
 $sum += $i;
}
echo " The sum is {$sum} <br/>";

// second loop
// multiplication table of 40

$num = 40;
$i = 0;


while($i<=12){
    $output = $i *$num;
    $i++;
    echo "{$i} * {$num} = {$output} <br/>";
}

?>