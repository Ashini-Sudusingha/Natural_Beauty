<?php

include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoars Main Admin</title>
    <link rel="stylesheet" href="output.css">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet" />


</head>

<body class="bg-gray-100">
    <div class="p-3 ">



        <div class="grid w-full h-40 grid-cols-4 ">

            <div class="w-full col-span-1 p-6 mr-2 border border-red-300 bg--no-repeat bg rounded-xl">
                <div class="flex justify-center">
                    <svg class="w-6 h-6 text-gray-800 dark:text-black" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z"
                            clip-rule="evenodd" />
                    </svg>
                    <?php
                $rs = Database::search("SELECT * FROM `user` WHERE `status` = '1'");
                $num = $rs->num_rows;
                ?>
                    <p class="text-lg font-bold ">Users</p>
                    <p class="px-10 text-lg font-bold"><?php echo($num)?></p>
                </div>
            </div>

            <div class="p-6 ml-2 bg-orange-200 bg-no-repeat border border-orange-300 rounded-xl">
                <div class="flex justify-center">
                    <svg class="w-6 h-6 text-gray-800 dark:text-black" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4" />
                    </svg>

                    <?php
                $rs = Database::search("SELECT * FROM `user` WHERE `status` = '1'");
                $num = $rs->num_rows;
                ?>
                    <p class="text-lg font-bold ">Users</p>
                    <p class="px-10 text-lg font-bold"><?php echo($num)?></p>
                </div>
            </div>


            <div class="p-6 ml-2 bg-orange-200 bg-no-repeat border border-orange-300 rounded-xl">
                <div class="flex justify-center">
                    <svg class="w-6 h-6 text-gray-800 dark:text-black" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M14 7h-4v3a1 1 0 0 1-2 0V7H6a1 1 0 0 0-.997.923l-.917 11.924A2 2 0 0 0 6.08 22h11.84a2 2 0 0 0 1.994-2.153l-.917-11.924A1 1 0 0 0 18 7h-2v3a1 1 0 1 1-2 0V7Zm-2-3a2 2 0 0 0-2 2v1H8V6a4 4 0 0 1 8 0v1h-2V6a2 2 0 0 0-2-2Z"
                            clip-rule="evenodd" />
                    </svg>
                    <?php
                   $rs = Database::search("SELECT * FROM `user` WHERE `status` = '1'");
                    $num = $rs->num_rows;
                ?>
                    <p class="text-lg font-bold ">Users</p>
                    <p class="px-10 text-lg font-bold"><?php echo($num)?></p>
                </div>
            </div>


            <div class="p-6 ml-2 bg-orange-200 bg-no-repeat border border-orange-300 rounded-xl">
                <div class="flex justify-center">
                    <svg class="w-6 h-6 text-gray-800 dark:text-black" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.891 15.107 15.11 8.89m-5.183-.52h.01m3.089 7.254h.01M14.08 3.902a2.849 2.849 0 0 0 2.176.902 2.845 2.845 0 0 1 2.94 2.94 2.849 2.849 0 0 0 .901 2.176 2.847 2.847 0 0 1 0 4.16 2.848 2.848 0 0 0-.901 2.175 2.843 2.843 0 0 1-2.94 2.94 2.848 2.848 0 0 0-2.176.902 2.847 2.847 0 0 1-4.16 0 2.85 2.85 0 0 0-2.176-.902 2.845 2.845 0 0 1-2.94-2.94 2.848 2.848 0 0 0-.901-2.176 2.848 2.848 0 0 1 0-4.16 2.849 2.849 0 0 0 .901-2.176 2.845 2.845 0 0 1 2.941-2.94 2.849 2.849 0 0 0 2.176-.901 2.847 2.847 0 0 1 4.159 0Z" />
                    </svg>

                    <?php
                $rs = Database::search("SELECT * FROM `user` WHERE `status` = '1'");
                $num = $rs->num_rows;
                ?>
                    <p class="text-lg font-bold ">Users</p>
                    <p class="px-10 text-lg font-bold"><?php echo($num)?></p>
                </div>

            </div>
        </div>

    </div>

<?php



?>
    <div class="grid grid-cols-3">
        <div
            class="max-w-sm px-8 py-8 space-y-2 bg-white shadow-lg rounded-xl sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
            <img class="block h-24 mx-auto rounded-full sm:mx-0 sm:shrink-0"
                src="https://tailwindcss.com/img/erin-lindford.jpg" alt="Woman's Face">
            <div class="space-y-2 text-center sm:text-left">
                <div class="space-y-0.5">
                    <p class="text-lg font-semibold text-black">
                        Erin Lindford
                    </p>
                    <p class="font-medium text-slate-500">
                        Product Engineer
                    </p>
                </div>
                <button
                    class="px-4 py-1 text-sm font-semibold text-purple-600 border border-purple-200 rounded-full hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Message</button>
            </div>
        </div>
    </div>

    </div>

    <div class="flex-1">

    </div>
    </div>





    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="script.js"></script>
</body>

</html>