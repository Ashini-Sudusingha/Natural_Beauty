<?php

include "connection.php";

$pname = $_POST['pn'];
$title = $_POST['title'];
$cat = $_POST['c'];
$brand = $_POST['b'];
$model = $_POST['m'];
$color = $_POST['co'];
$deCi = $_POST['do'];
$deCo = $_POST['di'];
$desc = $_POST['d'];

echo($pname);
echo($title);
echo($cat);
echo($model);
echo($color);
echo($deCi);
echo($deCo);
echo($desc);

if (empty($pname)) {
    echo ("Please enter the product name");
} else if (strlen($pname) > 30) {
    echo ("Maximum product name characters should be 30");
//} else if (strlen($desc) . 100) {
    //echo ("Produc Description should contain less than 100 characters");
} else if ($brand == 0) {
    echo ("Please select a brand");
} else if ($cat == 0) {
    echo ("Please select a category");
} else if ($model == 0) {
    echo ("Please select a Model");
} else if ($color == 0) {
    echo ("Please enter the description");
} else {

$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d H:i:s");

$status = 1;
echo ($date);
Database::iud("INSERT INTO `product` (`name`,`titile`,`categroy_cat_id`,`brand_brand_id`,`model_model_id`,`color_color_id`,
`colombo_in_price`,`colombo_out`,`description`,`status_id`,`date`,) VALUES ('" . $pname . "','" . $title . "','" . $cat . "','" . $brand . "','" . $model . "','" . $color . "',
'" . $deCi . "','" . $deCo . "','" . $desc . "','". $status ."','". $date ."')");

$product_id = Database::$connection->insert_id;

    if (isset($_FILES['image'])) {
        $image = $_FILES['image'];

        $imageExtension;

        // if($image['type'] == 'image/png'){
        //     $imageExtension = ".png";
        // } else if($image['type'] == 'image/jpg'){
        //     $imageExtension = ".jpg";
        // }

        $path = "resoses/productImg/" . uniqid() . ".jpeg";
        move_uploaded_file($image["tmp_name"], $path);

        Database::iud("INSERT INTO `product_img`(`proimage_id`,`product_id`) VALUES 
        ('" . $path . "','" . $product_id . "')");

    } else {
        echo ("Please select a product image");
    }

echo("ok");
}



