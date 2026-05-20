<?php


include "connection.php";

$rs = Database::search("SELECT * FROM `oder_history`");
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
        <div class="flex justify-center w-screen">
            <h2 class="px-3 mb-4 text-2xl font-bold">Deactive User Report</h2>
         </div>
        <button class="px-10 py-2 mx-10 bg-orange-300 rounded-xl hover:bg-orange-200">Print</button>
     

        <table id="example" class="w-full mt-3 table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-pink-300 rounded-tl-xl">Oder Id</th>
                    <th class="px-4 py-2 bg-pink-300">Invoice ID</th>
                    <th class="px-4 py-2 bg-pink-300">Date</th>
                    <th class="px-4 py-2 bg-pink-300">Amount</th>
                    
                   
                </tr>
            </thead>
            <tbody>

                <?php 
    
    for ($i = 0; $i < $num; $i++) {
        $d = $rs->fetch_assoc();
      
    
    ?>
                <tr class="bg-gray-200 hover:bg-gray-100">
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
