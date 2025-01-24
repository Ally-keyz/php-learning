<?php
//establishing a data base connection
$host ="localhost";
$database_name = "learning";
$user = "root";
$password = "...";

$conn = new mysqli($host,$user,$password,$database_name);

if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}else{
    echo "connected successfuly";
}

// Crud operations in php
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $email = $_POST["name"];
    $password_use = $_POST["PASSWORD"];

    $sql = "INSERT INTO learning (id,email,password) VALUES(1,{$email},{$password_use})";

    if(mysqli_query($conn , $sql)){
        echo "data inserted successfuly";
    }else{
        echo "Error:".mysqli_error($conn);
    }
}
?>