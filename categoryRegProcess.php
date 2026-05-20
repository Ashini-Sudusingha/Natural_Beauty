<?php

include "connection.php";

$category = $_POST["c"];
//echo($brand);

if (empty($category)) {
    echo ("Please Enter your Category");
} else if (strlen($category) > 20) {
    echo ("Category Name should be less than 20 Characters");
} else {
    //echo ("success");
    
    $rs = Database::search("SELECT * FROM `category` WHERE `cat_name` = '" . $category . "'");
    $num = $rs->num_rows;

    // echo($num);

    if ($num > 0) {
        
        echo ("Your Category Name already Exists");

    } else {

        echo ("success");

        $rs = Database::iud("INSERT INTO `category` (`cat_name`) VALUES ('".$category."')");

    }
}

?>