
<?php

session_start();
include "connection.php";
$user = $_SESSION["u"];
$orderHistoryId = $_GET["orderId"];


echo("ok");

// Log the order history ID being used
error_log("Order History ID (invoice): " . $orderHistoryId);

$rs = Database::search("SELECT * FROM `oder_history` WHERE `ohid` = '" . $orderHistoryId . "'");
$num = $rs->num_rows;

if ($num > 0) {
    $d = $rs->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
</head>
<body>

<div class="max-w-xl px-8 py-10 mx-auto bg-white rounded-lg shadow-lg">
    <div class="flex items-center justify-between mb-8">
        <div class="flex items-center">
            <img class="w-8 h-8 mr-2" src="resoses/images/resizelogo.png"
                alt="Logo" />
            <div class="text-lg font-semibold text-gray-700">Natural Beauty</div>
        </div>
        <div class="text-gray-700">
            <div class="mb-2 text-xl font-bold">INVOICE</div>
            <h3>Order Id: <?php echo $d["oder_id"] ?></h3>
            <h5>Date: <?php echo $d["oder_date"] ?></h5>
        </div>
    </div>
    <div class="pb-8 mb-8 border-b-2 border-gray-300">
    <div class="mt-4">
                <h4><?php echo $user["fname"] ?> <?php echo $user["lname"] ?></h4>
                <h4><?php echo $user["mobile"] ?></h4>
                <h5><?php echo $user["email"] ?></h5>
                <h5><?php echo $user["line_1"] ?></h5>
                <h5><?php echo $user["line_2"] ?></h5>
            </div>
    </div>
    <table class="w-full mb-8 text-left">
        <thead>
            <tr>
                <th class="py-2 font-bold text-gray-700 uppercase">Oder Id</th>
                <th class="py-2 font-bold text-gray-700 uppercase">Item</th>
                <th class="py-2 font-bold text-gray-700 uppercase">Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="py-4 text-gray-700"><?php echo($d["oder_id"]);?></td>
                <td class="py-4 text-gray-700"><?php echo($d["oder_date"]);?></td>
                <td class="py-4 text-gray-700"><?php echo($d["amount"]);?></td>
            </tr>
          
        </tbody>
    </table>
    <div class="flex justify-end mb-8">
        <div class="mr-2 text-gray-700">Subtotal:</div>
        <div class="text-gray-700"><?php echo($d["amount"]);?></div>
    </div>
   
    
    <div class="pt-8 mb-8 border-t-2 border-gray-300">
        <div class="mb-2 text-gray-700">Payment is due within 30 days. Late payments are subject to fees.</div>
        <div class="mb-2 text-gray-700">Please make checks payable to Your Company Name and mail to:</div>
     
    </div>
</div>



<script src="script.js"></script>
</body>
</html>

<!--Meke akke mata hadannathiyanava-->


<?php
} else {
    echo "No order found for the given ID.";
}
?>