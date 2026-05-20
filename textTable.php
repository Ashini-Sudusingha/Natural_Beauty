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
    <h2 class="mb-4 text-2xl font-bold">Purchase History</h2>
    <table id="example" class="w-full table-auto">
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
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="script.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            // Add any customization options here
        });
    });
</script>    

</body>
</html>

<?php
} else {
    header("location :signIn.php");
}

?>