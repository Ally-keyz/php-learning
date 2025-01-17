<?php

//Ooop learnings

class fruits{
    public $name;
    public $color;

    function set_fruit($name,$color){
        $this->name = $name;
        $this->color = $color;
    }
    function get_name(){
        return $this->name; 
    }
    function get_color(){
        return $this->color; 
    }
}
$banana = new fruits();
$banana -> set_fruit("Banana","Yellow");
echo "This fruit is:".$banana -> get_name();
echo "<br/>";
echo "Its color is:".$banana -> get_color();

?>