<?php
include "connection.php";
session_start();

if (isset($_SESSION["a"])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>Document</title>
</head>
<body class="bg-gray-100">
    
   <?php
   
   include "adminNavBar.php";
   
   ?>
        <div class="flex-1 px-5 w-svw">

        <div class="flex-1 p-3 mt-4 bg-white rounded-lg shadow-md">
          <div class="w-full p-4 text-3xl font-bold rounded-t-lg bg-rose-200">Update Stock</div>
          <div class="grid w-full grid-cols-1 gap-4 ">
            
            <div class="w-full col-span-1">
              <label class="block text-sm">Select Categroy</label>
              <select class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" onchange="loadBrands();" id="categroy">
             <option value="0">Select Category</option>

             <?php
                        
                        $rs = Database::search("SELECT * FROM `category`");
                        $num = $rs->num_rows;

                        for($i = 0; $i < $num; $i++){
                            $d = $rs->fetch_assoc();
                            ?>
                                <option value=" <?php echo $d['cat_id']; ?> "> <?php echo $d['cat_name']; ?> </option>

                            <?php
                        }
                        
                        ?>
             
             </select>
            </div>
            
            <div class="w-full col-span-1">
             <label class="block text-sm">Select Brand</label>
             <select class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" onchange="loadBrands();" id="brand">
            <option value="0">Select Category</option>
            <?php
                        
                        $rs = Database::search("SELECT * FROM `brand`");
                        $num = $rs->num_rows;

                        for($i = 0; $i < $num; $i++){
                            $d = $rs->fetch_assoc();
                            ?>
                                <option value=" <?php echo $d['brand_id']; ?> "> <?php echo $d['brand_name']; ?> </option>

                            <?php
                        }
                        
                        ?>
            </select>
           </div>

           <div class="w-full col-span-1">
             <label class="block text-sm">Select Model</label>
             <select class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" onchange="loadBrands();" id="model">
            <option value="0">Select Model</option>
            <?php
                        
                        $rs = Database::search("SELECT * FROM `model`");
                        $num = $rs->num_rows;

                        for($i = 0; $i < $num; $i++){
                            $d = $rs->fetch_assoc();
                            ?>
                                <option value=" <?php echo $d['model_id']; ?> "> <?php echo $d['model_name']; ?> </option>

                            <?php
                        }
                        
                        ?>
            
            </select>
           </div>
            
           <div class="w-full col-span-1">
            <label class="block text-sm">product Name</label>
            <select class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" onchange="loadBrands();" id="name">
           <option value="0">Select Category</option>

           <?php
                        
                        $rs = Database::search("SELECT * FROM `product`");
                        $num = $rs->num_rows;

                        for($i = 0; $i < $num; $i++){
                            $d = $rs->fetch_assoc();
                            ?>
                                <option value=" <?php echo $d['id']; ?> "> <?php echo $d['name']; ?> </option>

                            <?php
                        }
                        
                        ?>
           </select>
          </div>
           
           <div class="w-full col-span-1">
            <label class="block text-sm">Add Product Quntity</label>
            <input type="number" class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none"  value="0" min="0" id="qty"/></div>
            
            
            <div class="w-full col-span-1">
              <label class="block text-sm">Unit Cost for Custermer</label>
              <input type="text" class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" placeholder="ex:- John" id="customer" /></div>
              
              <div class="w-full col-span-1">
                  <label class="block text-sm">Unit Cost for You</label>
                  <input type="text" class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" placeholder="ex:- John" id="your" /></div>
            
                  <div class="flex justify-center col-span-1">
                    <button class="flex justify-center w-3/4 px-3 py-3 mt-4 transition duration-150 ease-in-out bg-red-300 rounded-full shadow-sm hover:bg-red-400/80 active:bg-red-500/50" onclick="updateStock();">Update Product Stock</button>
                 </div>

                 <div class="flex justify-center col-span-1">
                  <button class="flex justify-center w-3/4 px-3 py-3 mt-4 transition duration-150 ease-in-out bg-red-300 rounded-full shadow-sm hover:bg-red-400/80 active:bg-red-500/50" onclick="signIn();">Cancel Update</button>
               </div>
          
          </div>
        </div>


          
          <!--Start Dashboard-->
          <div class="flex-1 mt-4">
          <div class="w-full col-span-2 p-10 bg-white shadow-md rounded-xl shadow-gray-400">
            <div class="flex justify-start mr-3">
              <svg class="w-10 h-10 mt-1 text-gray-800 rounded-full dark:text-black bg-fuchsia-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M8 7V2.221a2 2 0 0 0-.5.365L3.586 6.5a2 2 0 0 0-.365.5H8Zm2 0V2h7a2 2 0 0 1 2 2v.126a5.087 5.087 0 0 0-4.74 1.368v.001l-6.642 6.642a3 3 0 0 0-.82 1.532l-.74 3.692a3 3 0 0 0 3.53 3.53l3.694-.738a3 3 0 0 0 1.532-.82L19 15.149V20a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M17.447 8.08a1.087 1.087 0 0 1 1.187.238l.002.001a1.088 1.088 0 0 1 0 1.539l-.377.377-1.54-1.542.373-.374.002-.001c.1-.102.22-.182.353-.237Zm-2.143 2.027-4.644 4.644-.385 1.924 1.925-.385 4.644-4.642-1.54-1.54Zm2.56-4.11a3.087 3.087 0 0 0-2.187.909l-6.645 6.645a1 1 0 0 0-.274.51l-.739 3.693a1 1 0 0 0 1.177 1.176l3.693-.738a1 1 0 0 0 .51-.274l6.65-6.646a3.088 3.088 0 0 0-2.185-5.275Z" clip-rule="evenodd"/>
              </svg>
               <span class="ml-4 text-2xl font-bold ">Product Management</span>
            </div> 
          
           
           <div class="pt-3 ml-2">
             <!-- Alert Error -->
             <div class="items-center hidden w-full px-6 py-4 text-lg text-red-800 bg-red-200 rounded-md" id="errorDiv" onclick="reload();">
                  <svg viewBox="0 0 24 24" class="w-5 h-5 mr-3 text-red-600 sm:w-5 sm:h-5">
                  <path fill="currentColor"
                   d="M11.983,0a12.206,12.206,0,0,0-8.51,3.653A11.8,11.8,0,0,0,0,12.207,11.779,11.779,0,0,0,11.8,24h.214A12.111,12.111,0,0,0,24,11.791h0A11.766,11.766,0,0,0,11.983,0ZM10.5,16.542a1.476,1.476,0,0,1,1.449-1.53h.027a1.527,1.527,0,0,1,1.523,1.47,1.475,1.475,0,0,1-1.449,1.53h-.027A1.529,1.529,0,0,1,10.5,16.542ZM11,12.5v-6a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Z">
                  </path>
                    </svg>
                 <span class="text-sm font-medium " id="eDiv"></span>
                </div>
              <!-- End Alert Error -->
               <!-- Alert Success -->
           <div class="items-center hidden w-full px-6 py-4 text-lg text-green-800 bg-green-200 rounded-md" id="successDiv" onclick="reload();">
             <svg viewBox="0 0 24 24" class="w-5 h-5 mr-3 text-green-600 sm:w-5 sm:h-5">
             <path fill="currentColor"
             d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
            </path>
            </svg>
            <span class="text-sm font-medium" id="sDiv"></span>
           </div>
    <!-- End Alert Success -->
           </div>
           </div>
          <div class="grid grid-cols-2 gap-4 px-3 mt-5 ">
            
              <div class="w-full col-span-1 p-5 bg-white shadow-md ">
                <label class="block text-sm text-slate-500">New Brand Name:</label>
                <input type="text" class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-yellow-500 focus:outline-none"  id="brand" />
                <button class="w-full px-3 py-2 mt-4 font-bold transition duration-150 ease-in-out rounded-full bg-rose-100 hover:ring-4 hover:ring-offset-2 hover:ring-yellow-400 active:ring-white" onclick="brandReg();">Brand Register</button>
              </div>
                
                <div class="w-full col-span-1 p-5 bg-white shadow-md">
                  <label class="block text-sm text-slate-500">New category :</label>
                  <input type="text" class="block w-full px-4 border-0 rounded-md shadow-sm mt-2text-gray-900 bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-blue-500 focus:outline-none" id="category" />
                  <button class="w-full px-3 py-2 mt-4 font-bold transition duration-150 ease-in-out bg-blue-400 rounded-full hover:ring-4 hover:ring-offset-2 hover:ring-blue-500 active:ring-white" onclick="categoryReg();">Category Register</button>
                </div>
                
                  <div class="w-full col-span-1 p-5 bg-white shadow-md">
                    <label class="block text-sm text-slate-500">New Model :</label>
                    <input type="text" class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-green-500 focus:outline-none" id="color" />
                    <button class="w-full px-3 py-2 mt-4 font-bold transition duration-150 ease-in-out bg-green-400 rounded-full hover:ring-4 hover:ring-offset-2 hover:ring-green-500 active:ring-white" onclick="colorReg();">Model Register</button>
                  </div>
                
                    <div class="w-full col-span-1 p-5 bg-white shadow-md">
                      <label class="block text-sm text-slate-500">New Color</label>
                      <input type="text" class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-fuchsia-500 focus:outline-none" id="size" />
                      <button class="w-full px-3 py-2 mt-4 font-bold transition duration-150 ease-in-out rounded-full bg-fuchsia-400 hover:ring-4 hover:ring-offset-2 hover:ring-fuchsia-500 active:ring-white" onclick="sizeReg();">Color Register</button>
                    </div>

                    <!--div class="w-full col-span-1 p-5 bg-white ">
                  <label class="block text-sm text-slate-500">New category :</label>
                  <input type="text" class="block w-full px-4 border-0 rounded-md shadow-sm mt-2text-gray-900 bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-blue-500 focus:outline-none" id="category" />
                  <button class="w-full px-3 py-2 mt-4 font-bold transition duration-150 ease-in-out bg-blue-400 rounded-full hover:ring-4 hover:ring-offset-2 hover:ring-blue-500 active:ring-white" onclick="categoryReg();">Category Register</button>
                </div>
                
                  <div class="w-full col-span-1 p-5 bg-white">
                    <label class="block text-sm text-slate-500">New Model :</label>
                    <input type="text" class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-green-500 focus:outline-none" id="color" />
                    <button class="w-full px-3 py-2 mt-4 font-bold transition duration-150 ease-in-out bg-green-400 rounded-full hover:ring-4 hover:ring-offset-2 hover:ring-green-500 active:ring-white" onclick="colorReg();">Model Register</button>
                  </div>
              </div>
           <End Dashboaed-->
</div>

</div>
</div>
<?php
     include "footer.php";
    ?>


  <script src="script.js"></script>
</body>
</html>


<?php  
}else{
    echo("Your not a Valid User");
}
?>