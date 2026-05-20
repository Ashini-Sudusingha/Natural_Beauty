<?php

session_start();
include "connection.php";
$user = $_SESSION["u"];

if (isset($_SESSION["u"])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natural Beauty Cart</title>
    <link rel="stylesheet" href="output.css">
</head>
<body onload="loadCart();" style="overflow-x: hidden;">

<?php include "mainmenuBar.php"; ?>


    <div class="h-screen py-8 bg-gray-100">
        <div class="container px-4 mx-auto">
            <h1 class="mb-4 text-2xl font-bold">Your Cart</h1>
            <div class="flex flex-col gap-4 md:flex-row" id="cartBody">
                <!--cart  body-->

                
            </div>
        </div>
    </div>



    <?php include "footer.php"; ?>

<script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
</body>
</html>

<?php
} else {
    header("location :signIn.php");
}

?>