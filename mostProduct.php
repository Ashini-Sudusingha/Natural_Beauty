<?php

session_start();
include "connection.php";
$user = $_SESSION["u"];

if (isset($_SESSION["u"])) {


    
$rs = Database::search("SELECT * FROM `user` WHERE `user_id` = '". $user["id"] ."'");
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
        <div class="flex w-screen">
            <h2 class="px-3 mb-4 text-2xl font-bold">Purchase History</h2>
            <button class="px-10 py-2 mx-10 bg-orange-300 rounded-xl hover:bg-orange-200">Print</button>
        </div>
     

        <table id="example" class="w-full mt-3 table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">Invoice Id</th>
                    <th class="px-4 py-2">order Id</th>
                    <th class="px-4 py-2">Oder Date</th>
                    <th class="px-4 py-2">amount</th>
                </tr>
            </thead>
            <tbody>

                <?php 
    
    for ($i = 0; $i < $num; $i++) {
        $d = $rs->fetch_assoc();
      
    
    ?>
                <tr>
                    <td class="px-4 py-2 border"> <?php echo $d["ohid"]?></td>
                    <td class="px-4 py-2 border"> <?php echo $d["oder_id"]?></td>
                    <td class="px-4 py-2 border"> <?php echo $d["oder_date"]?></td>
                    <td class="px-4 py-2 border"> <?php echo $d["amount"]?></td>

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