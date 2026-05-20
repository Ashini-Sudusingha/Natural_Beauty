<?php
session_start();
$user = $_SESSION["a"];
include "connection.php";

$rs = Database::search("SELECT * FROM `product` INNER JOIN `category` ON `product`.`categroy_cat_id` = `category`.`cat_id` 
INNER JOIN `brand` ON `product`.`brand_brand_id` = `brand`.`brand_id`
INNER JOIN `model` ON `product`.`model_model_id` = `model`.`model_id`");
$num = $rs->num_rows;



for ($i = 0; $i < $num; $i++) {
  $d = $rs->fetch_assoc();
  $rsi = Database::search("SELECT * FROM `product_img` WHERE `product_id`= '". $d["id"] ."'");
  $numi = $rsi->num_rows;
  $dmi = $rsi->fetch_assoc();
?>

<!--Table Row-->
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
        <img class="w-10 h-10" src="<?php if(!empty($dmi["proimage_id"])){
                echo($dmi["proimage_id"]);}
          ?>" alt="Jese image">
       
       <p class="px-2 font-normal text-gray-500"><?php echo $d["id"]?></p>
       
    </th>
    <td class="px-6 py-4">
        <?php echo $d["name"]?>
    </td>


    <td class="px-6 py-4">
        <?php echo $d["cat_name"]?>
    </td>

    <td class="px-6 py-4">
        <?php echo $d["brand_name"]?>
    </td>

    <td class="px-6 py-4">
        <?php echo $d["model_name"]?>
    </td>

    <td class="px-6 py-4">
        <div class="flex items-center">
            <?php 
          if($d["status_id"] == 1){
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