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

<body class="w-screen bg-slate-100" onload="loadProductMakeup(0);" style="overflow-x: hidden;" >
     <div class="w-screen">
  
<?php
  include "mainmenuBar.php";
?>

<div class="w-screen p-5 mt-10 bg-white rounded-lg">
   <div class= "grid grid-cols-3 ">
    
    <div class="col-span-1 ">
    <img src="resoses/images/makeup.jpeg" width="400" height="400"/>
    </div>

    <div class="col-span-1 ">
    <p class="text-2xl font-bold font-moon">Welcome to [Your Brand Name], where beauty meets innovation. Our high-quality cosmetics enhance your natural beauty,
       from vibrant makeup to rejuvenating skincare. Discover your new beauty essentials and indulge in a 
      luxurious experience celebrating your unique style. 
      Welcome to endless possibilities, designed with you in mind.</p>
    <div class="p-3 font-mono font-extrabold text-md bg-rose-300"></div>
    <img src="resoses/images/yellowGirl.jpeg" width="400" height="150"/>
    
  </div>

  <div class="col-span-1 ">
    <img src="resoses/images/makeup10.jpeg" width="400" height="160"/>
  </div>
  
</div>
</div>


<div class="flex w-full">
  
    <div class="flex-1 px-10 place-content-center">
      <div class="flex justify-center">
        <img src="resoses/images/safeontone.png" width="120" height="120"/>
      </div>
      <div class="flex justify-center">
      <span class="font-bold ">Fast and Safe Delevory</span>
      </div> 
    </div>
    
    <div class="flex-1 col-span-1 ">
    <div class="flex justify-center">
      <img src="resoses/images/money.png"  width="150" height="150">
    </div>
    <div class="flex justify-center">
    <span class="font-bold ">Safe Transaction</span> 
     </div>
    </div>
    
    <div class="flex-1 col-span-1 ">
    <div class="flex justify-center ">
      <img src="resoses/images/qulityProduct.png"  width="190" height="200">
     </div>
     <div class="flex justify-center">
    <span class="font-bold ">Original Product</span> 
    </div>
    </div>
    
    <div class="flex-1 col-span-1">
    <div class="flex justify-center ">
      <img src="resoses/images/rewiew.png"  width="160" height="160">
    </div>
    <div class="flex justify-center">
    <span class="font-bold ">Position Feedback</span> 
    </div>
    </div>

</div>




<!--upload product-->
<div class="w-screen" id="pidMakeup">
  


</div>
<!--upload product-->




<?php
   include "footer.php";
?>

                  </div>
</div>
<script src="script.js"></script>
</body>
</html>