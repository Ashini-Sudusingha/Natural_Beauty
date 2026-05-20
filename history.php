<?php

session_start();
include "connection.php";
$user = $_SESSION["u"];

if (isset($_SESSION["u"])) {


    
$rs = Database::search("SELECT * FROM `oder_history` WHERE `user_id` = '". $user["id"] ."'");
$num = $rs->num_rows;

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
    <div class="container px-4 py-8 mx-auto sm:px-6 lg:px-8">
        
            <h2 class="flex justify-center w-screen px-3 mb-4 text-2xl font-bold">Purchase History</h2>
            <button class="px-10 py-3 bg-orange-300 rounded-xl hover:bg-orange-200">Print</button>
        
        <h5 class="px-3 text-lg font-bold"><?php echo($user["username"])?></h5>
        <h5 class="px-3 mb-4 text-lg font-bold"><?php echo($user["email"])?></h5>

        <table id="example" class="w-full mt-3 shadow-md table-auto">
            <thead>
                <tr >
                    <th class="py-2 bg-pink-300 rounded-tl-xl">Invoice Id</th>
                    <th class="py-2 bg-pink-300 ">order Id</th>
                    <th class="py-2 bg-pink-300 ">Oder Date</th>
                    <th class="py-2 bg-pink-300 rounded-tr-xl">amount</th>
                </tr>
            </thead>
            <tbody>

                <?php 
    
    for ($i = 0; $i < $num; $i++) {
        $d = $rs->fetch_assoc();
      
    
    ?>
                <tr class="bg-gray-200 hover:bg-gray-100">
                    <td class="py-2 "> <?php echo $d["ohid"]?></td>
                    <td class="py-2 "> <?php echo $d["oder_id"]?></td>
                    <td class="py-2 "> <?php echo $d["oder_date"]?></td>
                    <td class="py-2 "> <?php echo $d["amount"]?></td>

                </tr>

                <?php
    }
          ?>


                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <script src="script.js"></script>



</body>

</html>

<?php
} else {
    header("location :signIn.php");
}

?>