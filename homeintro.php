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

<body class="w-screen bg-slate-100" style="overflow-x: hidden;">

<?php
  include "mainmenuBar.php";
?>

<div class="w-screen">

<div class="w-screen bg-white rounded-lg">
   <div class= "grid grid-cols-3 ">
    
    <div class="col-span-1 ">
    <img src="resoses/images/makeup.jpeg" width="450" height="430"/>
    </div>

    <div class="col-span-1 ">
    <p class="text-2xl font-bold font-moon">Welcome to NATURAL GIRL, where beauty meets innovation. Our high-quality cosmetics enhance your natural beauty,
       from vibrant makeup to rejuvenating skincare</p>
    <div class="p-3 font-mono text-lg font-extrabold bg-rose-300">  <a href="adminSignin.php"><button class="px-4 py-2"> Admin Sign In</button></a></div>
    <img src="resoses/images/yellowGirl.jpeg" width="400" height="150"/>
    
  </div>

  <div class="col-span-1 ">
    <img src="resoses/images/makeup10.jpeg" width="500" height="160"/>
  </div>
  
</div>
</div>

</div>



<?php
   include "footer.php";
?>

</div>

<script src="script.js"></script>
</body>
</html>