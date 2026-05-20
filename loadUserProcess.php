<?php
session_start();
$user = $_SESSION["u"];
include "connection.php";

$rs = Database::search("SELECT * FROM `user` WHERE `user`.user_type_id = '2'");
$num = $rs->num_rows;



for ($i = 0; $i < $num; $i++) {
  $d = $rs->fetch_assoc();
  $rsi = Database::search("SELECT * FROM `user_image` WHERE `user_id`= '". $d["id"] ."'");
  $numi = $rsi->num_rows;
  $dmi = $rsi->fetch_assoc();
?> 

<!--Table Row-->
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
        <img class="w-10 h-10 rounded-full" src="<?php if(!empty($dmi["image_path"])){
                echo($dmi["image_path"]);}
          ?>" alt="Jese image">
            <div class="ps-3">
            <div class="text-base font-semibold"><?php echo $d["username"]?></div>
            <div class="font-normal text-gray-500"><?php echo $d["email"]?></div>
            </div>  
    </th>
    <td class="px-6 py-4">
        <?php echo $d["id"]?>
    </td>

    <td class="px-6 py-4">
    <?php echo $d["fname"]?>
    </td>

    <td class="px-6 py-4">
    <?php echo $d["lname"]?>
    </td>

    <td class="px-6 py-4">
    <?php echo $d["mobile"]?>
    </td>
    
     <td class="px-6 py-4">
        <div class="flex items-center">
         <?php 
          if($d["status"] == 1){
            ?><div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> <?php
            echo("Active");
            }else{
            ?> <div class="h-2.5 w-2.5 rounded-full bg-red-600 me-2"></div> <?php
            echo("Diactive");
          }
        ?></div>
    </td>

</tr>

<?php
}

?>