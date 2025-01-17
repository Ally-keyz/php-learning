<?php
//define your recursion fuction
function factorial($n){
    if($n<=1){
        return 1;//base case
    }else{
        return $n * factorial($n - 1);
    }
}
?>