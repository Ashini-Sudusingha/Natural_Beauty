<?php

include "connection.php";

$categroy = $_POST['categroy'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$name = $_POST['name'];
$qty = $_POST['qty'];
$customer = $_POST['customer'];
$your = $_POST['your'];

// echo($productId);

if(empty($categroy)){
    echo("Please Select Qty");
}else if(empty($brand)){
    echo("Please Select Brand");
}else if(empty($model)){
    echo("Please Select Model");
}else if(empty($name)){
    echo("Please Select Product NAme");
}else if(empty($qty)){
    echo("Please Select Quntity");
} else if (strlen($qty) > 10) {
    echo("Your Qty should be less than 10 characters");
} else if (!is_numeric($qty)){
    echo("Only numbers can be entered for qty");   
} else if(empty($customer)){
    echo("Please Enter Customer Price");
} else if(!is_numeric($customer)){
    echo("Only numbers can be entered for price");
} else if (strlen($customer) > 10) {
    echo("Your Price should be less than 10 characters");
} else if(empty($your)){
    echo("Please Enter Price");
} else if(!is_numeric($your)){
    echo("Only numbers can be entered for price");
} else if (strlen($your) > 10) {
    echo("Your Price should be less than 10 characters");
} else {
    // echo("success");

    $rs = Database::search("SELECT * FROM `stock` WHERE `product_id` = '".$name."' AND `price` = '".$customer."'");
    $count = $rs->num_rows;
    $data = $rs->fetch_assoc();
    
    $d = new DateTime();
    $tz = new DateTimeZone("Asia/Colombo");
    $d->setTimezone($tz);
    $date = $d->format("Y-m-d H:i:s");
    


    if($count == 1) {

        $newQty = $d['qty'] + $qty;
        Database::iud("UPDATE `stock` SET `qty` = '".$qty."' WHERE `stock_id` = '".$data['id']."'");
        echo("Updated Successfully");

    } else {

        Database::iud("INSERT INTO `stock`(`qty`, `customer_price`, `user_price`,`date`,`product_id`) VALUES ('". $qty ."', '". $customer ."', '". $your ."','". $date ."', '". $name ."')");
        echo("Inserted Successfully");

    }

}

?>