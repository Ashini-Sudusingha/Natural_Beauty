<?php
session_start();
include "connection.php";

$email = $_POST["em"];
$password = $_POST["pw"];


if(empty($email)) {
    echo ("Please Enter Your Email Address");
}else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo ("Your Email Address is Invalid");
}else if (empty($password)) {
    echo ("Please Enter Your Password");
} else {
    
    $rs = Database::search("SELECT * FROM `user` WHERE `email` = '".$email."' AND `password` = '".$password."'");
    $num = $rs->num_rows;
    $d = $rs->fetch_assoc();

    if($num == 1) {

        if($d["user_type_id"] == 1) {

            echo ("Success"); 

            $_SESSION["a"] = $d;

        } else {

            echo ("You Don't have an Admin Account");

        }
        
    } else {
        echo ("Invalid Username or Password");
    }
    
}

?>