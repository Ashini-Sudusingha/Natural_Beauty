<?php

include "connection.php";
session_start();
$user = $_SESSION["u"];

if (empty($_FILES["i"])) {
   echo("User Image are empty");
} else {
    //Upload IMg
    $rs = Database::search("SELECT * FROM `user_image` WHERE `user_id` = '" . $user["id"] . "'");
    $d = $rs->fetch_assoc();

    if (!empty($d["imge_path"])) {
        unlink($d["imge_path"]); // delete old image path
    }

    $path = "resoses/profileImg/" . uniqid() . ".jpeg";
    move_uploaded_file($_FILES["i"]["tmp_name"], $path);

   $rsset = Database::search("SELECT * FROM `user_image` WHERE `user_id` = '" . $user["id"] . "'");
    $numset = $rsset->num_rows;
    if($numset > 0){
        Database::iud("UPDATE `user_image` SET `image_path` = '" . $path . "' WHERE `user_id` = '" . $user["id"] . "'");
        echo ($path);
 echo("giya");
    }else{
        Database::iud("INSERT INTO `user_image`(`image_path`,`user_id`) VALUE ('". $path ."','". $user["id"] ."')");
        echo("demma");
    }
 

    
}
