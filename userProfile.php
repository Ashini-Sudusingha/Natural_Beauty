<?php
include "connection.php";
session_start();
$user = $_SESSION["u"];

if (isset($_SESSION["u"])) {

    $rs = Database::search("SELECT * FROM `user_image` WHERE `user_id` = '" . $user["id"] . "'");
    $d = $rs->fetch_assoc();
  

    $rsuser= Database::search("SELECT * FROM `user`");
    $userinfor = $rsuser->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Profile</title>
    <link rel="stylesheet" href="output.css">
</head>

<body class="bg-gray-200" style="overflow-x: hidden;">

    <?php
  include "mainmenuBar.php";
?>

    <div class="flex w-screen">

        <!--Profile into-->
        <div class="relative max-w-sm mx-auto mt-24 mb-32 ml-2" >
            <div class="overflow-hidden bg-white rounded shadow-md">
                <div class="absolute flex justify-center w-full -mt-20">
                    <div class="w-32 h-32 rounded-full ring-4 ring-offset-4 ring-red-300">
                        <img src="<?php

                          if (!empty($d["image_path"])) {
                            echo($d["image_path"]);
                             } else {
                              echo ("resoses\images\logo.png");
                               }
                        ?>" class="object-cover w-full h-full rounded-full shadow-md" id="i" />
                    </div>
                </div>
                <div class="px-6 mt-16">
                    <h1 class="mb-1 text-3xl font-bold text-center"><?php echo($userinfor["username"])?></h1>
                    <p class="mb-2 text-sm text-center text-gray-800"><?php echo($userinfor["email"])?></p>

                    <div class="w-full p-4 border border-indigo-500 rounded-md shadow-md bg-gray-50">
                        <input type="file" class="form-control" id="photoUploader" />
                        <button
                            class="w-full px-3 py-1 mx-auto mt-2 transition duration-150 ease-in bg-pink-300 rounded-lg hover:bg-rose-200 active:bg-pink-400"
                            onclick="uploadImg();">Upload</button>
                    </div>

                    <p class="pt-3 text-base font-normal text-center text-gray-600">
                        Carole Steward is a visionary CEO known for her exceptional leadership and strategic acumen.
                        With a
                        wealth of experience in the corporate world, she has a proven track record of driving innovation
                        and
                        achieving remarkable business growth.
                    </p>
                </div >
                <div class="flex justify-center w-full"><button class="px-5 py-3 mx-4 my-3 text-lg font-bold bg-red-400 w-fit rounded-xl hover:bg-red-300" onclick="signOut();" >Sign out</button> </div>
            </div>
        </div>

        <!--Profile into-->

        <div class="w-full px-5 pt-3">
            <div class="grid grid-cols-2 p-3 bg-white shadow-md gap-y-2 gap-x-4 rounded-xl">

                <div class="w-full col-span-1">
                    <label class="block text-sm">First Name</label>
                    <input type="text" value="<?php echo isset($userinfor["fname"]) ? $userinfor["fname"] : ''; ?>"
                        class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none"
                        placeholder="ex:- John" id="fname" />
                </div>

                <div class="w-full col-span-1">
                    <label class="block text-sm">Last Name</label>
                    <input type="text" value="<?php echo isset($userinfor["lname"]) ? $userinfor["lname"] : ''; ?>"
                        class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none"
                        placeholder="ex:- Doe" id="lname" />
                </div>

                <div class="w-full col-span-2">
                    <label class="block text-sm">Email</label>
                    <input type="email" value="<?php echo isset($userinfor["email"]) ? $userinfor["email"] : ''; ?>"
                        class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none"
                        placeholder="ex:- john@gmail.com" id="email" />
                </div>



                <div class="w-full col-span-1">
                    <label class="block text-sm">Password</label>
                    <input value="<?php echo isset($userinfor["password"]) ? $userinfor["password"] : ''; ?>"
                        class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none"
                        type="password" placeholder="ex: ********" id="password" />
                </div>

                <div class="w-full col-span-1">
                    <label class="block text-sm">User Name</label>
                    <input type="text" value="<?php echo isset($userinfor["username"]) ? $userinfor["username"] : ''; ?>"
                        class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none"
                        placeholder="ex:- John" id="username" />
                </div>

                <div class="w-full col-span-1">
                    <label class="block text-sm">Mobile</label>
                    <input type="text" value="<?php echo isset($userinfor["mobile"]) ? $userinfor["mobile"] : ''; ?>"
                        class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none"
                        placeholder="0708109088" id="mobile" />
                </div>

                <div class="w-full col-span-1">
                    <label class="block text-sm">No</label>
                    <input type="text"  value="<?php echo isset($userinfor["no"]) ? $userinfor["no"] : ''; ?>"
                        class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none"
                        placeholder="no" id="no" />
                </div>

                <div class="w-full col-span-2">
                    <label class="block text-sm">Address Line 1</label>
                    <input type="text" value="<?php echo isset($userinfor["line1"]) ? $d["line1"] : ''; ?>"
                        class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none"
                        placeholder="line 1" id="line1" />
                </div>

                <div class="w-full col-span-2">
                    <label class="block text-sm">Address Line 2</label>
                    <input type="text" value="<?php echo isset($userinfor["line1"]) ? $userinfor["line2"] : ''; ?>"
                        class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none"
                        placeholder="line 2" id="line2" />
                </div>


                <div class="w-full col-span-1">
                    <label class="block text-sm">Register Date</label> 
                    <input type="text" value="<?php echo isset($userinfor["reg_date"]) ? $userinfor["reg_date"] : ''; ?>"
                        class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none"
                        placeholder="ex:- John" id="date" />
                </div>

                <div class="w-full col-span-1">
                    <label class="block text-sm">Province</label>
                    <select
                        class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none"
                        id="province">
                        <option value="0"><?php 
                        if(!empty($userinfor["province_p_id"])){
                            ?>Selected<?php 
                        }else{
                        ?>Select Province<?php }?></option>

                        <?php
                   $clr_rs = Database::search("SELECT * FROM `province`"); 
                  $clr_num = $clr_rs->num_rows;

                   for ($y = 0; $y < $clr_num; $y++) {
                    $clr_data = $clr_rs->fetch_assoc();
                    ?>
                        <option value="<?php echo $clr_data["p_id"]; ?>"> <?php echo $clr_data["province_name"]; ?>
                        </option>
                        <?php
                    }
                    ?>

                    </select>
                </div>

                <div class="w-full col-span-1">
                    <label class="block text-sm">Distric</label>
                    <select
                        class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none"
                        id="distric">
                        <option value="0"><?php 
                        if(!empty($userinfor["distric_dis_id"])){
                            ?>Selected<?php 
                        }else{
                        ?>Select Distric<?php }?></option>

                        <?php
                   $clr_rs = Database::search("SELECT * FROM `distric`"); 
                  $clr_num = $clr_rs->num_rows;

                   for ($y = 0; $y < $clr_num; $y++) {
                    $clr_data = $clr_rs->fetch_assoc();
                    ?>
                        <option value="<?php echo $clr_data["dis_id"]; ?>"> <?php echo $clr_data["dis_name"]; ?>
                        </option>
                        <?php
                    }
                    ?>

                    </select>
                </div>

                <div class="w-full col-span-1">
                    <label class="block text-sm">City</label>
                    <select
                        class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none"
                        id="city">
                        <option value="0"><?php 
                        if(!empty($userinfor["city_city_id"])){
                            ?>Selected<?php 
                        }else{
                        ?>Select City<?php }?></option>

                        <?php
                   $clr_rs = Database::search("SELECT * FROM `city`"); 
                  $clr_num = $clr_rs->num_rows;

                   for ($y = 0; $y < $clr_num; $y++) {
                    $clr_data = $clr_rs->fetch_assoc();
                    ?>
                        <option value="<?php echo $clr_data["city_id"]; ?>"> <?php echo $clr_data["city_name"]; ?>
                        </option>
                        <?php
                    }
                    ?>

                    </select>
                </div>


                <div class="w-full col-span-2">
                    <label class="block text-sm">Gender</label>
                    <select
                        class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none"
                        id="gender">
                        <option value="0"><?php 
                        if(!empty($userinfor["gender_gender_id"])){
                            ?>Selected<?php 
                        }else{
                        ?>Select Gender<?php }?></option>

                        <?php
                   $clr_rs = Database::search("SELECT * FROM `gender`"); 
                  $clr_num = $clr_rs->num_rows;

                   for ($y = 0; $y < $clr_num; $y++) {
                    $clr_data = $clr_rs->fetch_assoc();
                    ?>
                        <option value="<?php echo $clr_data["gender_id"]; ?>"> <?php echo $clr_data["gender_name"]; ?>
                        </option>
                        <?php
                    }
                    ?>

                    </select>
                </div>

                <div class="col-span-2 ">
                    <button
                        class="flex justify-center w-full col-span-2 px-4 py-3 my-5 transition duration-150 ease-in-out bg-pink-300 rounded-xl hover:bg-rose-200 active:bg-pink-700"
                        onclick="updateData();">Update User Details</button>
                </div>
            </div>
        </div>



        <!--Add Area-->

        <div class="h-full pt-5">
            <div class="flex-1 w-full ">
                <img src="resoses/images/profileadd1.jpeg" width="400">
            </div>


            <div class="flex-1 w-full mt-10">
                <img src="resoses/images/add3.jpeg" width="400">
            </div>

        </div>



        <!--Add Area-->
    </div>
    <?php
      include "footer.php";
    ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
    <script src="script.js"></script>
</body>

</html>


<?php
} else {
    header("location: signUpIn.php");
}
?>