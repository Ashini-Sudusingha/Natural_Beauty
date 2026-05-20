<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natural Beauty main nav</title>
    <link rel="stylesheet" href="output.css">
</head>

<body class="bg-gray-100">
    <div class="absolute ">
        <div class="sticky top-0 flex  h-[85px] bg-gradient-to-tr from-rose-200 to-pink-300 w-screen">

            <div class="flex-1">

                <ul class="flex justify-center mt-4">
                    <li class="mx-5 mt-4 font-mono text-lg">Home</li>
                  <a href="signUpIn.php">  <li class="mx-5 mt-4 font-mono text-lg">Sign In</li></a>
                  <a href="homeintro.php">  <li class="mx-5 mt-4 font-mono text-lg">Admin</li></a>


                </ul>
            </div>

            <div class="flex-1">
                <a class="nav-link active" aria-current="page" href="index.php">
                    <img src="resoses/images/resizelogo.png" class="h-20 mb-10 ms-20"></a>
            </div>

            <div class="flex-1">
                <div class="grid grid-cols-4 gap-4 py-1 h-[80px]">

                    <div class="flex justify-center col-span-1 p-1 ">
                        <button class="bg-white rounded-full shadow-md shadow-gray-400"><img width="70" height="70" src="resoses/images/headicon-removebg-preview.png" alt="trust" class="bg-center" /></button>
                    </div>

                    <div class="flex justify-center col-span-1 p-1 ">
                        <a class="nav-link active" aria-current="page" href="cart.php">
                            <button class="bg-white rounded-full shadow-md shadow-gray-400"> <img width="70" height="70" src="resoses/images/maincart.png" alt="trust" class="bg-center" /></button></a>
                    </div>

                    <div class="col-span-1">
                        <button class="mt-1 bg-white rounded-full shadow-md shadow-gray-400"><img width="70" height="70" src="resoses/images/mainSearh.png" alt="trust" class="bg-center" onclick="searchVisible();" /></button>
                    </div>

                    <div class="col-span-1"><a href="userProfile.php">
                            <button class="mt-1 bg-white rounded-full shadow-md shadow-gray-400"><img width="70" height="70" src=" resoses/images/userlog.png" /></button></a>
                    </div>
                </div>

            </div>
        </div>
        <div class="w-screen h-[80px] mx-auto  hidden p-2" id="searchV">
            <div class="flex justify-center w-screen">
                <form class="flex max-w-xl px-6 py-1 bg-white border rounded-full shadow-md focus-within:border-gray-300">
                    <input type="text" placeholder="Search anything" class="w-full px-0 py-0 pr-4 mr-4 font-semibold bg-transparent border-0 focus:outline-none focus:ring-0" name="topic" id="product">
                    <button class="flex flex-row items-center justify-center min-w-[130px] px-4 rounded-full
         border disabled:cursor-not-allowed disabled:opacity-50 transition ease-in-out duration-150 text-base bg-rose-300 hover:bg-pink-300 text-white font-medium tracking-wide border-transparent py-1.5 h-[38px] mt-1" onclick="searchProduct(0);">
                        Search
                    </button>
                </form>

                <button class="flex " onclick="adsOpen();">
                    <img src="resoses/images/advance0.png" width="50" height="50">
                    <div class="p-4 font-mono underline underline-offset-4">
                        Advance Search</div>
                </button>


            </div>


        </div>


        <script src="script.js"></script>
</body>

</html>