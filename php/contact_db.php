<?php
    

    $conn = new mysqli('localhost','root', '','contactusdb' );
    if($conn -> connect_error){
        die('connection failed : ' .$conn->connect_error);
    }
?>