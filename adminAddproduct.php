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
<body class="bg-gray-200 ">
    <?php
      include "adminNavBar.php";
    ?>
     <div class="p-5">

        <div class="p-3 text-4xl font-bold rounded-t-lg justify- text-nowrap bg-rose-200"> 
           ADD NEW PRODUCT
        </div>
        <div class="grid grid-cols-2 gap-4 p-1 bg-white">
            
            <div class="w-full col-span-1">
            <label class="block text-sm">Product Name</label>
            <input type="text" class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" placeholder="ex:- John" id="pname" /></div>
            
            <div class="w-full col-span-1">
                        <label class="block text-sm">Tntro Description</label>
                        <input type="text" class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" placeholder="ex:- John" id="introDis" /></div>
        
            
                
                  <div class="w-full col-span-1">
                     <label class="block text-sm">Add Product category</label>
                     <select class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none"  id="cat">
                    <option value="0">Select Category</option>

                    <?php

                    $clr_rs = Database::search("SELECT * FROM `category`"); 
                     $clr_num = $clr_rs->num_rows;

                      for ($y = 0; $y < $clr_num; $y++) {
                       $clr_data = $clr_rs->fetch_assoc();
                         ?>
                       <option value="<?php echo $clr_data["cat_id"]; ?>"> <?php echo $clr_data["cat_name"]; ?> </option>
                        <?php
                        }

                           ?>
                    </select>
                   </div>
                   
                   <div class="w-full col-span-1">
                    <label class="block text-sm">Add Product brand</label>
                    <select class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" onchange="loadBrands();" id="brand">
                   <option value="0">Select Brand</option>

                   <?php

                     $clr_rs = Database::search("SELECT * FROM `brand`"); 
                    $clr_num = $clr_rs->num_rows;

                      for ($y = 0; $y < $clr_num; $y++) { 
                         $clr_data = $clr_rs->fetch_assoc();
                        ?>
                       <option value="<?php echo $clr_data["brand_id"]; ?>"> <?php echo $clr_data["brand_name"]; ?> </option>
                            <?php
                             }

                        ?>
                   </select>
                  </div>

                  <div class="w-full col-span-1">
                    <label class="block text-sm">Add Product Model</label>
                    <select class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" onchange="loadBrands();" id="model">
                   <option value="0">Select Model</option>
                   <?php

                   $clr_rs = Database::search("SELECT * FROM `model`"); 
                     $clr_num = $clr_rs->num_rows;

                  for ($y = 0; $y < $clr_num; $y++) {
                    $clr_data = $clr_rs->fetch_assoc();
                      ?>
                    <option value="<?php echo $clr_data["model_id"]; ?>"> <?php echo $clr_data["model_name"]; ?> </option>
                    <?php
                    }

                     ?>
                   
                   </select>
                  </div>
                


              <div class="w-full col-span-1">
                <label class="block text-sm">Select Product Color</label>
                <select class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" onchange="loadBrands();" id="color">
                <option value="0">Select Colour</option>
                
            <?php

                    $clr_rs = Database::search("SELECT * FROM `color`"); 
                    $clr_num = $clr_rs->num_rows;

                    for ($y = 0; $y < $clr_num; $y++) {
                    $clr_data = $clr_rs->fetch_assoc();
                    ?>
                         <option value="<?php echo $clr_data["color_id"]; ?>"> <?php echo $clr_data["color_name"]; ?> </option>
                         <?php
                 }

                ?>
               </select>
              </div>
        

                        <div class="w-full col-span-1">
                            <label class="block text-sm">Delivory Cost Within Colombo</label>
                            <input type="text" class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" placeholder="ex:- John" id="deCi" /></div>

                    <div class="w-full col-span-1">
                        <label class="block text-sm">Delivory Cost out of Colombo</label>
                        <input type="text" class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" placeholder="ex:- John" id="deCo" /></div>
                            
                        
                    <div class="w-full col-span-2">
                        <label for="" class="block text-sm">Description</label>
                        <textarea class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" rows="4" name="" id="dis"></textarea></div>
                    
                   <div class="w-full col-span-2">
                    <div class="grid grid-cols-3 gap-4">
                        <div class="justify-center w-full col-span-3">
                          <label for="" class="block py-2 text-sm">Upload New product Image</label>
                          <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-4 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 hover:bg-gray-100">
                              <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                               </div>
                            <input id="image" type="file" class="" />
                            </label>
                        </div>


                        
                    </div>
                    </div> 

                    <!--Alert Area-->


                         
                    <div class="items-center justify-between hidden w-full col-span-2 p-5 mt-5 leading-normal text-red-600 bg-red-100 rounded-lg " role="alert">
	               <p>Error alert</p>

	                <svg onclick="return this.parentNode.remove();" class="inline w-4 h-4 ml-2 cursor-pointer fill-current hover:opacity-80" xmlns="http://www.w3.org/2000/svg hidden" viewBox="0 0 512 512">
	                <path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464zM359.5 133.7c-10.11-8.578-25.28-7.297-33.83 2.828L256 218.8L186.3 136.5C177.8 126.4 162.6 125.1 152.5 133.7C142.4 142.2 141.1 157.4 149.7 167.5L224.6 256l-74.88 88.5c-8.562 10.11-7.297 25.27 2.828 33.83C157 382.1 162.5 384 167.1 384c6.812 0 13.59-2.891 18.34-8.5L256 293.2l69.67 82.34C330.4 381.1 337.2 384 344 384c5.469 0 10.98-1.859 15.48-5.672c10.12-8.562 11.39-23.72 2.828-33.83L287.4 256l74.88-88.5C370.9 157.4 369.6 142.2 359.5 133.7z"/>
	                </svg>
                    </div>

                  <div class="items-center justify-between hidden w-full col-span-2 p-5 mt-5 leading-normal text-green-600 bg-green-100 rounded-lg" role="alert">
	               <p>Success alert</p>

	               <svg onclick="return this.parentNode.remove();" class="inline w-4 h-4 ml-2 cursor-pointer fill-current hover:opacity-80" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
	             <path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464zM359.5 133.7c-10.11-8.578-25.28-7.297-33.83 2.828L256 218.8L186.3 136.5C177.8 126.4 162.6 125.1 152.5 133.7C142.4 142.2 141.1 157.4 149.7 167.5L224.6 256l-74.88 88.5c-8.562 10.11-7.297 25.27 2.828 33.83C157 382.1 162.5 384 167.1 384c6.812 0 13.59-2.891 18.34-8.5L256 293.2l69.67 82.34C330.4 381.1 337.2 384 344 384c5.469 0 10.98-1.859 15.48-5.672c10.12-8.562 11.39-23.72 2.828-33.83L287.4 256l74.88-88.5C370.9 157.4 369.6 142.2 359.5 133.7z"/>
	               </svg>
                     </div>

                    
                    

                    <!--Alert Area-->

                    <div class="flex justify-center col-span-2">
                        <button class="flex justify-center w-3/4 px-3 py-3 mt-4 transition duration-150 ease-in-out bg-red-300 rounded-full shadow-sm hover:bg-red-400/80 active:bg-red-500/50" onclick="regProduct();">Register Product Here</button>
                     </div>
                           
    </div>
</div>
    <?php
     include "footer.php";
    ?>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="script.js"></script>
</body>
</html>