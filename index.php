<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="output.css">
 
</head>

<body class="w-screen bg-slate-100" onload="loadProduct(0);" style="overflow-x: hidden;">
  <div class="w-screen">

    <?php
    include "mainmenuBar.php";
    ?>

    <div class="hidden w-screen" id="asearchDiv">
      <div class="grid w-screen grid-cols-4 grid-rows-2 gap-4 p-3 bg-white rounded-lg shadow-md shadow-gray-400">

        <div class="items-center col-span-1 px-10 w-80">
          <label class="block text-sm">Add Product category</label>
          <select class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" id="category">
            <option value="0">Select Category</option>

            <?php

            $clr_rs = Database::search("SELECT * FROM `category`");
            $clr_num = $clr_rs->num_rows;

            for ($y = 0; $y < $clr_num; $y++) {
              $clr_data = $clr_rs->fetch_assoc();
            ?>
              <option value="<?php echo $clr_data["cat_id"]; ?>"> <?php echo $clr_data["cat_name"]; ?>
              </option>
            <?php
            }

            ?>
          </select>
        </div>

        <div class="items-center col-span-1 px-10 w-80">
          <label class="block text-sm">Add Product brand</label>
          <select class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" id="brand">
            <option value="0">Select Brand</option>


            <?php

            $clr_rs = Database::search("SELECT * FROM `brand`");
            $clr_num = $clr_rs->num_rows;

            for ($y = 0; $y < $clr_num; $y++) {
              $clr_data = $clr_rs->fetch_assoc();
            ?>
              <option value="<?php echo $clr_data["brand_id"]; ?>"> <?php echo $clr_data["brand_name"]; ?>
              </option>
            <?php
            }

            ?>

          </select>
        </div>

        <div class="items-center col-span-1 px-10 w-80">
          <label class="block text-sm">Add Product Model</label>
          <select class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" id="model">
            <option value="0">Select Product Model</option>

            <?php

            $clr_rs = Database::search("SELECT * FROM `model`");
            $clr_num = $clr_rs->num_rows;

            for ($y = 0; $y < $clr_num; $y++) {
              $clr_data = $clr_rs->fetch_assoc();
            ?>
              <option value="<?php echo $clr_data["model_id"]; ?>"> <?php echo $clr_data["model_name"]; ?>
              </option>
            <?php
            }

            ?>
          </select>
        </div>



        <div class="items-center col-span-1 px-10 w-80">
          <label class="block text-sm">Add Product Color</label>
          <select class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" id="color">
            <option value="0">Select Color</option>


            <?php

            $clr_rs = Database::search("SELECT * FROM `color`");
            $clr_num = $clr_rs->num_rows;

            for ($y = 0; $y < $clr_num; $y++) {
              $clr_data = $clr_rs->fetch_assoc();
            ?>
              <option value="<?php echo $clr_data["color_id"]; ?>"> <?php echo $clr_data["color_name"]; ?>
              </option>
            <?php
            }

            ?>


          </select>
        </div>

        <div class="w-full col-span-2">
          <label class="block text-sm">Add Product Color</label>

          <div class="relative mb-6">
            <label for="labels-range-input" class="sr-only">Labels range</label>
            <input id="rangePrice" type="range" value="5000" min="500" max="25000" class="w-full h-2 rounded-lg appearance-none cursor-pointer bg-rose-300">
            <span class="absolute text-sm text-gray-500 dark:text-gray-400 start-0 -bottom-6">Min
              (RS.500)</span>
            <span class="absolute text-sm text-gray-500 -translate-x-1/2 dark:text-gray-400 start-1/3 rtl:translate-x-1/2 -bottom-6">Rs.1000</span>
            <span class="absolute text-sm text-gray-500 -translate-x-1/2 dark:text-gray-400 start-2/3 rtl:translate-x-1/2 -bottom-6">Rs.5000</span>
            <span class="absolute text-sm text-gray-500 dark:text-gray-400 end-0 -bottom-6">Max
              (20000)</span>
          </div>
        </div>

        <button class="flex pl-10 rounded-full w-80 col-1 bg-rose-300 hover:bg-rode-400" onclick="advSearchProduct(0);">
          <img src="resoses/images/advance0.png" width="50" height="50">
          <div class="p-4 font-mono underline underline-offset-4">
            Advance Search</div>
        </button>

      </div>

    </div>


    <div class="flex w-full h-56">

      <div class="flex-1 bg-center bg-no-repeat bg-cover" style="background-image: url('resoses/images/groupgril.jpeg');"></div>

      <div class="flex-1 p-3 bg-gradient-to-tr from-rose-200 to-pink-300">
        <h1 class="py-2 font-mono text-2xl font-bold">OUR MISSION</h1>
        <P class="text-base leading-relaxed text-pretty">NATURAL BEAUTY'S - mission is to help our coustomer's
          achieve healthy, beautiful, and GLOWING skin. Our online shop the most important part
          of maintaining beautiful glowing skin is home care. We offer our customer the best selection of
          product at unbeatable prices. All of the
          products are high quality brands.
        </P>
      </div>

      <div class="flex-1 bg-center bg-no-repeat bg-cover" style="background-image: url('resoses/images/mainPoster03.jpeg');"></div>
    </div>

    <div class="flex w-full">

      <div class="flex-1 px-10 place-content-center">
        <div class="flex justify-center">
          <img src="resoses/images/safeontone.png" width="120" height="120" />
        </div>
        <div class="flex justify-center">
          <span class="font-bold ">Fast and Safe Delevory</span>
        </div>
      </div>

      <div class="flex-1 col-span-1 ">
        <div class="flex justify-center">
          <img src="resoses/images/money.png" width="150" height="150">
        </div>
        <div class="flex justify-center">
          <span class="font-bold ">Safe Transaction</span>
        </div>
      </div>

      <div class="flex-1 col-span-1 ">
        <div class="flex justify-center ">
          <img src="resoses/images/qulityProduct.png" width="190" height="200">
        </div>
        <div class="flex justify-center">
          <span class="font-bold ">Original Product</span>
        </div>
      </div>

      <div class="flex-1 col-span-1">
        <div class="flex justify-center ">
          <img src="resoses/images/rewiew.png" width="160" height="160">
        </div>
        <div class="flex justify-center">
          <span class="font-bold ">Position Feedback</span>
        </div>
      </div>

    </div>

    <div class="w-screen p-5 mt-10 bg-white rounded-lg">
      <div class="grid grid-cols-3 ">

        <div class="col-span-1 ">
          <img src="resoses/images/skincare.jpeg" width="400" height="400" />
        </div>

        <div class="col-span-1 ">
          <p class="text-2xl font-bold font-moon">Habbit for Your Skin</p>
          <div class="p-5 font-mono text-3xl font-extrabold bg-rose-300">SKIN CARE</div>
          <img src="resoses/images/skincare7.jpeg" width="400" height="200" />
          <div class="p-4 font-mono text-3xl font-extrabold bg-rose-100">New Product
            <p class="text-lg">New Lip Bam for luna brand</p>
          </div>
        </div>

        <div class="col-span-1 ">
          <img src="resoses/images/skincare5.jpeg" width="400" height="150" />
        </div>

      </div>
    </div>


    <!--upload product-->
    <div class="w-screen" id="pid">


    </div>
    <!--upload product-->




    <?php
    include "footer.php";
    ?>

  </div>


  <script src="script.js"></script>
</body>

</html>