<?php

// Recursion is a technique where by a function calls its self to solve a simple problem

//function to review the recursion by calculating the factorial

function factorial($num){

    if($num <=1){
        return 1; //base case
    }else{
        return $num * factorial($num-1);
    }

}

//function to add up numbers using recusion technique
function addition($num){
    if($num == 0){
        return 0;
    }else{
        $last_digit = $num % 10;
        return $last_digit + addition(intdiv($num,10));
    }
}

echo "The sum is :".addition(12345);

?>