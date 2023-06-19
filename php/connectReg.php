<?php


//Database connection

$conn= new mysqli('localhost','root','','pet_db');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}


 

?>