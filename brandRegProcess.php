<?php

include "connection.php";

$brand = $_POST["b"];
//echo($brand);

if (empty($brand)) {
    echo ("Please Enter your Brand Name");
} else if (strlen($brand) > 20) {
    echo ("Brand Name should be less than 20 Characters");
} else {
    //echo ("success");
    
    $rs = Database::search("SELECT * FROM `brand` WHERE `brand_name` = '" . $brand . "'");
    $num = $rs->num_rows;

    // echo($num);

    if ($num > 0) {
        
        echo ("Your Brand Name already Exists");

    } else {

        echo ("success");

        $rs = Database::iud("INSERT INTO `brand` (`brand_name`) VALUES ('".$brand."')");

    }
}

?>