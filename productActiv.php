<?php
  session_start();

  if (isset($_SESSION["a"])) {
?>
<!--Load Page-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>Product Active Deactivet</title>
</head>

<body onload="loadproduct();" class="bg-gray-200">

    <div class="flex flex-row ">
        <!--End nave bar-->
        <?php
     include "adminNavBar.php";
    ?>

        <!--End nave bar-->

        <!--DashBoard Start-->
        <div class="p-10 w-svw">
            <div class="flex">
                <div class="p-5 bg-white shadow-md w-96 rounded-xl shadow-gray-400">
                    <div class="flex justify-start mr-3">
                        <svg class="w-6 h-6 pr-1 mt-1 text-gray-800 bg-teal-400 rounded-full dark:text-black" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4" />
                        </svg>

                        <span class="text-2xl font-bold">Change Product Status</span>
                    </div>

                    <!--update status-->
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div class="">
                            <input type="text"
                                class="block w-full col-span-1 px-2 py-2 border-2 rounded-lg border-rose-400 focus:outline-none focus:border-fuchsia-400"
                                placeholder="User Id" id="pid" />
                        </div>
                        <button
                            class="px-3 py-3 transition duration-150 ease-in-out rounded-full shadow-md bg-gradient-to-tr from-rose-200 to-pink-300 shadow-gray-400 hover:ring-4 hover:ring-pink-400 hover:ring-offset-4 active:ring-white focus:outline-none"
                            onclick="updateStatusproduct();">Change Status</button>
                        <!-- Alert Error -->
                        <div class="items-center hidden col-span-2 px-3 py-4 text-lg text-red-800 bg-red-200 rounded-md"
                            id="errorDiv" onclick="reload();">
                            <svg viewBox="0 0 24 24" class="w-5 h-5 mr-3 text-red-600 sm:w-5 sm:h-5">
                                <path fill="currentColor"
                                    d="M11.983,0a12.206,12.206,0,0,0-8.51,3.653A11.8,11.8,0,0,0,0,12.207,11.779,11.779,0,0,0,11.8,24h.214A12.111,12.111,0,0,0,24,11.791h0A11.766,11.766,0,0,0,11.983,0ZM10.5,16.542a1.476,1.476,0,0,1,1.449-1.53h.027a1.527,1.527,0,0,1,1.523,1.47,1.475,1.475,0,0,1-1.449,1.53h-.027A1.529,1.529,0,0,1,10.5,16.542ZM11,12.5v-6a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Z">
                                </path>
                            </svg>
                            <span class="text-sm font-medium" id="eDiv"></span>
                        </div>
                        <!-- End Alert Error -->
                        <!-- Alert Success -->
                        <div class="items-center hidden w-full col-span-2 px-6 py-4 text-lg text-green-800 bg-green-200 rounded-md"
                            id="successDiv" onclick="reload();">
                            <svg viewBox="0 0 24 24" class="w-5 h-5 mr-3 text-green-600 sm:w-5 sm:h-5">
                                <path fill="currentColor"
                                    d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                                </path>
                            </svg>
                            <span class="text-sm font-medium" id="sDiv"></span>
                        </div>
                        <!-- End Alert Success -->
                    </div>
                    <!--End status update proccesss-->
                </div>

            </div>

            <div class="pt-5 ">
                <!--Table Start-->
                <table
                    class="w-full mb-5 text-sm text-left text-gray-500 shadow-md rtl:text-right dark:text-gray-400 shadow-gray-400">
                    <thead class="text-xs text-black uppercase bg-gradient-to-tr from-rose-200 to-pink-300 ">
                        <tr class="bg-gradient-to-tr from-rose-200 to-pink-300 ">
                            <th scope="col" class="px-6 py-3 rounded-tl-xl">
                                Product
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Categroy
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Brand
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Model
                            </th>
                            <th scope="col" class="px-6 py-3 rounded-tr-xl">
                                Status
                            </th>
                        </tr>
                    </thead>

                    <tbody id="tbp">
                        <!--Table Row-->


                        <!--Table Row-->
                    </tbody>
                </table>
            </div>

        </div>
        <!--Dashboard End-->
    </div>





    <!--Footer Start-->
    <?php 
     include "footer.php";
    ?>
    <!--Footer Start-->
    <script src="script.js"></script>
</body>

</html>
<!--Load Page End-->
<?php
  }else{
    echo("Your not a Valid Admin");
  }
?>