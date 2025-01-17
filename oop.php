<?php
// introduction to oop
class students {
    public $name;
    public $age;
    public $class;

    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }

    function set_age($age){
        $this->age = $age;
    }
    function get_age(){
        return $this->age;
    }
}

$student = new students();
$student -> set_name("Manzi");
$student -> set_age(18);

echo "Name is:".$student -> get_name();
echo "<br/>";
echo "Age is:".$student -> get_age();

?>