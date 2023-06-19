<?php
    

    $conn = new mysqli('localhost','root', '','accountdb' );
    if($conn -> connect_error){
        die('connection failed : ' .$conn->connect_error);
    }
?>