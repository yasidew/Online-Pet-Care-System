<?php

if (isset($_POST["Submit"])) {
    $service = $_POST["service"];
    $Fname = $_POST["FName"];
    $Lname = $_POST["LName"];
    $email = $_POST["Email"];
    $number = $_POST["Contact"];
    $date = $_POST["Date"];
    $gender = $_POST["Gender"];
    $message = $_POST["Message"];

    $con = mysqli_connect("localhost", "root", "", "onlinepetcaresystem");

    if (!$con) {
        die("Connect to a database");
    }
    $sql = "INSERT INTO `user_appointment` (`Service`,`FName`,`LName`,`Email`,`Contact`,`Date`,`Gender`,`Message`) VALUES ('" . $service . "','" . $Fname . "','" . $Lname . "','" . $email . "','" . $number . "','" . $date . "','" . $gender . "','" . $message . "');";

    mysqli_query($con, $sql);
        
    echo '<script>alert("Successful")</script>';
    
    
  
}


?>