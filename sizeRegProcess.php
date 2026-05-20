<?php
include "connection.php";

$size = $_POST["s"];
//echo($brand);

if (empty($size)) {
    echo ("Please Enter your Size");
} else if (strlen($size) > 20) {
    echo ("Size should be less than 20 Characters");
} else {
    //echo ("success");
    
    $rs = Database::search("SELECT * FROM `size` WHERE `size_name` = '" . $size . "'");
    $num = $rs->num_rows;

    // echo($num);

    if ($num > 0) {
        
        echo ("Your Size already Exists");

    } else {

        echo ("success");

        $rs = Database::iud("INSERT INTO `size` (`size_name`) VALUES ('".$size."')");

    }
}

?>