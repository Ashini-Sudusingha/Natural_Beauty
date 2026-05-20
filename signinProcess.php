<?php

session_start();
include "connection.php";

$email = $_POST["e"];
$password = $_POST["p"];
$rememberme = $_POST["r"];

//echo($rm);

if(empty($email)){
    echo("Please Enter Your Email Address");
}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo("Your Email Address is Invalid");
}else if(empty($password)){
    echo("Please Enter Your Password");
}else{
    $rs = Database::search("SELECT * FROM `viva_project`.`user` WHERE `email`='".$email."' AND `password`='".$password."'");
    $num = $rs->num_rows;
    $d = $rs->fetch_assoc();

    if($num == 1){
        if($d["status"] == 1){
            echo("Sucess");

            $_SESSION["u"] = $d;//save user detail//

            if($rememberme == "true"){//set cookie//
                  
              setcookie("email", $email, time() + (60 * 60 * 24 * 365));
              setcookie("password", $password, time() + (60 * 60 * 24 * 365));

            }else{//distoy cookie//
              
                setcookie("email","",-1);
                setcookie("password","",-1);
            }

        }else{
            echo("Inactive User");
        }
        //home page
    }else{
        echo("Inavalid Your Email Address OR Password");
    }
}




?>