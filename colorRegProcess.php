<?php

include "connection.php";

$color = $_POST["c"];
//echo($brand);

if (empty($color)) {
    echo ("Please Enter your Color");
} else if (strlen($color) > 20) {
    echo ("Color Name should be less than 20 Characters");
} else {
    //echo ("success");
    
    $rs = Database::search("SELECT * FROM `color` WHERE `color_name` = '" . $color . "'");
    $num = $rs->num_rows;

    // echo($num);

    if ($num > 0) {
        
        echo ("Your Color Name already Exists");   

    } else {

        echo ("success");

        $rs = Database::iud("INSERT INTO `color` (`color_name`) VALUES ('".$color."')");

    }
}

?>