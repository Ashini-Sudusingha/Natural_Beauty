<?php

//echo("ok");

include "connection.php";

$pid = $_POST["productid"];

//echo($uid);
if (empty($pid)) {
    echo ("Please Enter Your Product Id");
} else {

    $rs = Database::search("SELECT * FROM `product` WHERE `id` = '" . $pid . "'");
    $num = $rs->num_rows;

    if ($num == 1) {

        $d = $rs->fetch_assoc();

        if ($d['status_id'] == 1) {
            // Deactivate
            
            Database::iud("UPDATE `product` SET `status_id`= '2' WHERE `id`='" . $pid . "'");
            echo ("Deactive");

        }

        if ($d['status_id'] == 2) {
            // Activate
            
            Database::iud("UPDATE `product` SET `status_id`= '1' WHERE `id`='" . $pid . "'");
            echo ("Active");

        }
    } else {
        echo ("Invalid Product Id");
    }
}

?>