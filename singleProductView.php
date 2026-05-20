<?php
session_start();
include "connection.php";
$stockId = $_GET["s"];
//echo($stockId);
// echo($stockId);

if (isset($stockId)) {

    $q="SELECT * FROM `stock` INNER JOIN `product` ON `stock`.`product_id` = `product`.`id` INNER JOIN `product_img` ON `product_img`.`product_id` = `product`.`id`
INNER JOIN  `category` ON `category`.`cat_id` = `product`.`categroy_cat_id` INNER JOIN `model` ON `product`.`model_model_id`=`model`.`model_id` INNER JOIN `color`
ON `color`.`color_id`=`product`.`color_color_id` INNER JOIN `brand` ON `product`.`brand_brand_id`=`brand`.`brand_id` WHERE `stock`.`id`='".$stockId."'";

    $rs = Database::search($q);
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

<body class="bg-gray-100" style="overflow-x: hidden;">

    <?php

include "mainmenuBar.php";
?>

    <div class="bg-gray-100 p ">
        <div class="px-2 mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row">

                <!--Image set-->
                <div class="p-5 px-4 md:flex-1">
                    <div class="col-span-1 row-span-1 p-5 ">
                        <img class="object-cover w-full h-full duration-500 shadow-md hover:scale-105 rounded-2xl"
                            src="<?php echo $d["proimage_id"]; ?>" alt="Product Image">

                    </div>

                </div>
                <!--Image set-->

                <div class="px-4 bg-white md:flex-1">

                    <!--Product Name-->
                    <h2 class="mb-2 text-2xl font-bold text-gray-800 "><?php echo $d["name"]; ?></h2>
                    <p class="mb-4 text-sm text-gray-600 ">
                        <?php echo $d["titile"]; ?>
                    </p>

                    <!--Product Name and Small dececription-->


                    <!--Price and Stock-->
                    <div class="flex mb-4">
                        <div class="flex mr-4">
                            <span class="font-bold text-gray-700 ">Price:</span>
                            <span
                                class="px-2 text-xl font-bold text-rose-300">Rs.<?php echo $d["customer_price"]; ?></span>
                        </div>
                        <div>
                            <span class="font-bold text-gray-700 ">Availability:</span>
                            <span class="text-gray-600 "><?php echo $d["qty"]; ?></span>
                        </div>
                    </div>
                    <!--Price and Stock-->

                    <!--Color-->
                    <div class="mb-4">
                        <span class="font-bold text-gray-700 ">Select Color:</span>
                        <div class="flex items-center mt-2">
                            <h6 class="mt-3">Color: <?php echo $d["color_name"]; ?></h6>
                        </div>
                    </div>
                    <!--Color-->

                    <!--Description-->
                    <div>Product Description:</span>
                        <p class="mt-2 text-sm text-gray-600 ">
                            Color: <?php echo $d["description"]; ?>
                        </p>
                    </div>
                    <!--Description-->


                    <div class="flex mt-5">
                        <div class="flex ">
                            <img alt="facebook icon" loading="lazy" width="36" height="36" decoding="async"
                                data-nimg="1" style="color:transparent" src="resoses/images/del.png" />
                            <label class="flex pl-3 mt-2">Cost within Colombo: <div class="font-bold text-md">
                                    RS.<?php echo $d["colombo_in_price"]; ?></div></label>
                        </div>

                        <div class="flex ml-10">
                            <img alt="facebook icon" loading="lazy" width="36" height="36" decoding="async"
                                data-nimg="1" style="color:transparent" src="resoses/images/del.png" />
                            <label class="flex pl-3 mt-2">Cost Colombo out of :<div class="font-bold text-md">
                                    Rs.<?php echo $d["colombo_out"]; ?></div></label>
                        </div>

                    </div>

                    <!--Quntity-->

                    <div class="flex max-w-md m-5 mx-auto ml-4">
                        <ul class="border border-gray-400 divide-y rounded-md">
                            <li>
                                <button class="flex items-center justify-between w-full p-4 focus:outline-none"
                                    type="button" onclick="toggleAccordion(event)">
                                    <span class="text-lg font-bold uppercase">Add Product Quantity</span>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M10 13.535l4.95-4.95 1.414 1.414-6.364 6.364-6.364-6.364 1.414-1.414z" />
                                    </svg>
                                </button>
                                <div class="hidden p-4 accordion-content">
                                    <label class="block text-sm">Add Product Quntity</label>
                                    <input type="number"
                                        class="block w-full p-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none"
                                        value="0" min="0" id="qty" />

                                </div>
                            </li>
                        </ul>

                        <div class="flex justify-center ml-9">
                            <button class="bg-white rounded-full shadow-md shadow-gray-400"><img width="70" height="70"
                                    src="resoses/images/headicon-removebg-preview.png" alt="trust"
                                    class="bg-center" /></button>
                        </div>

                    </div>

                    <!--Quntity-->


                    <div class="flex justify-center w-full p-5">
                        <div class="px-5">
                            <div class="flex-1">
                                <img alt="facebook icon" loading="lazy" width="50" height="50" decoding="async"
                                    data-nimg="1" style="color:transparent"
                                    src="https://kyliecosmetics.com/cdn/shop/files/Circle_KC_Icons_-_Vegan.png?v=1670875011&width=150&height=150">
                                vegan
                            </div>
                        </div>

                        <div class="px-5">
                            <div class="flex-1">
                                <img alt="facebook icon" loading="lazy" width="50" height="50" decoding="async"
                                    data-nimg="1" style="color:transparent"
                                    src="https://kyliecosmetics.com/cdn/shop/files/Circle_KC_Icons_-_Cruelty_Free.png?v=1670875011&width=150&height=150">
                                cruelty free
                            </div>
                        </div>

                        <div class="px-5">
                            <div class="flex-1">
                                <img alt="facebook icon" loading="lazy" width="50" height="50" decoding="async"
                                    data-nimg="1" style="color:transparent"
                                    src="https://kyliecosmetics.com/cdn/shop/files/Circle_KC_Icons_-_Paraben_Free.png?v=1670875011&width=150&height=150">
                                <label class="mr-2"> paraben free</lable>
                            </div>
                        </div>

                        <div class="flex px-5">
                            <div>
                                <img alt="facebook icon" loading="lazy" width="50" height="50" decoding="async"
                                    data-nimg="1" style="color:transparent"
                                    src="https://kyliecosmetics.com/cdn/shop/files/Circle_KC_Icons_-_Clean.png?v=1670875011&width=150&height=150">
                                Clean
                            </div>
                        </div>

                    </div>

                    <!--Buy Process -->

                    <div class="flex mt-4 mb-4 -mx-2">
                        <div class="w-1/2 px-2">
                            <button class="w-full px-4 py-2 font-bold text-black rounded-full bg-rose-300"
                                onclick="addCart('<?php echo $d['id']; ?>');">Add to
                                Cart</button>
                        </div>
                        <div class="w-1/2 px-2">
                            <button class="w-full px-4 py-2 font-bold text-gray-800 rounded-full bg-rose-300"
                                onclick="buyNow('<?php echo $d['id']?>');">
                                Buy Now</button>
                        </div>
                    </div>

                    <!--Buy Process -->

                    <!-- Alert Success -->
                    <div class="items-center hidden w-full col-span-2 px-6 py-4 text-lg text-green-800 bg-green-200 rounded-md"
                        id="successDiv">
                        <svg viewBox="0 0 24 24" class="w-5 h-5 mr-3 text-green-600 sm:w-5 sm:h-5">
                            <path fill="currentColor"
                                d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                            </path>
                        </svg>
                        <span class="text-sm font-medium" id="sDiv"></span>
                    </div>
                    <!-- End Alert Success -->

                    <!-- Alert Error -->
                    <div class="items-center hidden col-span-2 px-3 py-4 text-lg text-red-800 bg-red-200 rounded-md"
                        id="errorDiv">
                        <svg viewBox="0 0 24 24" class="w-5 h-5 mr-3 text-red-600 sm:w-5 sm:h-5">
                            <path fill="currentColor"
                                d="M11.983,0a12.206,12.206,0,0,0-8.51,3.653A11.8,11.8,0,0,0,0,12.207,11.779,11.779,0,0,0,11.8,24h.214A12.111,12.111,0,0,0,24,11.791h0A11.766,11.766,0,0,0,11.983,0ZM10.5,16.542a1.476,1.476,0,0,1,1.449-1.53h.027a1.527,1.527,0,0,1,1.523,1.47,1.475,1.475,0,0,1-1.449,1.53h-.027A1.529,1.529,0,0,1,10.5,16.542ZM11,12.5v-6a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Z">
                            </path>
                        </svg>
                        <span class="text-sm font-medium" id="eDiv"></span>

                    </div>
                    <!-- End Alert Error -->


                </div>
            </div>
        </div>
    </div>


    <!--Other Card view-->




    <?php
include "footer.php";

?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
    <script src="script.js"></script>
</body>

</html>


<?php
} else {
    header("location: index.php");
}

?>