<?php
  include "connection.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="output.css">

    <title>Document</title>
</head>

<body>

    <div class="h-screen pt-20 "
        style="background-image: url('resoses/images/backgrounduser.jpeg'); background-size: cover; background-position: cover; background-repeat: no-repeat; ">

        <div class="flex w-2/3 mx-auto bg-white shadow-md h-5/6 rounded-3xl shadow-slate-100">

            <!--header area for sign up-->
            <div class="w-4/12 h-full p-6 bg-white rounded-3xl"
                style="background-image: url('Pantone Color of the Year 2023_ Viva Magenta - Fashion Blogger From Houston Texas _ My Red Glasses by Roz Pactor.jpeg'); background-size: cover; background-position: cover; background-repeat: no-repeat;">
                <div class="mx-auto shadow-md w-72 h-96 backdrop-brightness-125 bg-white/30 rounded-2xl">
                    <div class="w-full h-full">
                        <img src="resoses\images\logo.png" class="h-32 mx-8 w-72">
                        <p class="font-normal text-center">Discover beauty's magic with our curated collection.
                            Elevate your look, boost your confidence. Explore now for radiant, flawless beauty that's
                            uniquely yours.</p>
                        <p class="mt-4 ml-12 font-medium text-center underline underline-offset-2 decoration-pink-100">
                            Redefine Beauty with Us</p>
                    </div>
                </div>
            </div>


            <!--header area ended-->

            <div class="w-8/12 h-full px-2 rounded-3xl ">
                <!--Sign In Area-->

                <div class="hidden w-full" id="SigninBox">

                    <div class="">
                        <p class="m-5 text-2xl font-bold text-center t font-signUp text-rose-400">Sign In</p>
                    </div>

                    <?php
            
            $email = "";  //setcookie
            $password = "";

            if (isset($_COOKIE["email"])) {
              $email = $_COOKIE["email"];
            }

            if (isset($_COOKIE["password"])) {
                $password = $_COOKIE["password"];
            }
            
            ?>

                    <div class="grid justify-center grid-cols-2 gap-y-2 gap-x-4">


                        <div class="block col-span-2 text-sm">
                            <label class="block text-sm">Email</label>
                            <input type="email"
                                class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none"
                                id="em" placeholder="ex: john@gmail.com" value="<?php echo $email ?>" />
                        </div>

                        <div class="block col-span-2 text-sm">
                            <label class="block text-sm">Password</label>
                            <input type="password"
                                class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none"
                                id="pw" placeholder="ex: ********" value="<?php echo $password ?>" />
                        </div>

                        <div class="">
                            <input class="" type="checkbox" value="" id="rm">
                            <label class="" for="rememberme">
                                Remember Me.
                            </label>
                        </div>

                        <div
                            class="text-right text-red-400 underline transition duration-150 ease-in-out underline-offset-4 hover:text-blue-600 active:text-blue-400">
                            <a href="Fogotpassword.php" class="link-primary">Forgotten Password?</a>
                        </div>
                        <!--Alert-->

                        <!-- Alert Error -->
                        <div class="items-center hidden col-span-2 px-6 py-4 text-lg text-red-800 bg-red-200 rounded-md "
                            id="signinErro">
                            <svg viewBox="0 0 24 24" class="w-5 h-5 mr-3 text-red-600 sm:w-5 sm:h-5">
                                <path fill="currentColor"
                                    d="M11.983,0a12.206,12.206,0,0,0-8.51,3.653A11.8,11.8,0,0,0,0,12.207,11.779,11.779,0,0,0,11.8,24h.214A12.111,12.111,0,0,0,24,11.791h0A11.766,11.766,0,0,0,11.983,0ZM10.5,16.542a1.476,1.476,0,0,1,1.449-1.53h.027a1.527,1.527,0,0,1,1.523,1.47,1.475,1.475,0,0,1-1.449,1.53h-.027A1.529,1.529,0,0,1,10.5,16.542ZM11,12.5v-6a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Z">
                                </path>
                            </svg>
                            <span class="text-sm font-medium" id="erroSpan"></span>

                        </div>
                        <!-- End Alert Error -->
                        <!--Alert-->

                        <div class="flex justify-center col-span-2">
                            <button
                                class="flex justify-center w-3/4 px-3 py-3 mt-4 transition duration-150 ease-in-out bg-red-300 rounded-full shadow-sm hover:bg-red-400/80 active:bg-red-500/50"
                                onclick="signIn();">Sign In</button>
                        </div>

                        <div class="flex justify-center col-span-2">
                            <button
                                class="flex justify-center w-3/4 py-3 mt-4 transition duration-150 ease-in-out border-4 border-red-400 border-double rounded-full shadow-sm borer-double mt-border-4 border-spacing-6 focus:outline-none hover:bg-red-300 hover:border-rose-200 active:bg-red-500/70"
                                onclick="changeView();">New to Natural Beauty? Join Now</button>
                        </div>

                    </div>
                </div>

                 <!--Sign In Area-->
           
        <!--signUp Area-->
        <div class="" id="SignUpBox"> 
            <div class="">
                <p class="m-5 text-2xl font-bold t font-signUp text-rose-400">Create New Account</p>
            </div>
            
            <div class="invisible border-2 border-solid rounded-l border-rose-400 bg-rose-200"></div>
            
            <div class="grid grid-cols-2 gap-y-2 gap-x-4">
                
                <div class="w-full col-span-1">
                <label class="block text-sm">First Name</label>
                <input type="text" class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" placeholder="ex:- John" id="fname" /></div>
                
                <div class="w-full col-span-1">
                <label class="block text-sm">Last Name</label>
                <input type="text" class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" placeholder="ex:- Doe" id="lname" /> </div>
                
                <div class="w-full col-span-2">
               <label class="block text-sm">Email</label>
                <input type="email" class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" placeholder="ex:- john@gmail.com" id="email" /></div>
              
                <div class="w-full col-span-1">
                <label class="block text-sm">Password</label>
                <input class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" type="password" placeholder="ex: ********" id="password" /></div>
               
                <div class="w-full col-span-1">
                    <label class="block text-sm">User Name</label>
                    <input type="text" class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" placeholder="ex:- John" id="username" /></div>
                
                <div class="w-full col-span-2">
                <label class="inline-block text-sm">Mobile</label>
                <input type="text" class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-300 focus:outline-none" placeholder="ex:- 0771234568" id="mobile" /></div>
        <!--Alert Area-->         
        <!-- Alert Success -->
           <div class="items-center hidden w-full col-span-2 px-6 py-4 text-lg text-green-800 bg-green-200 rounded-md" id="successDiv">
             <svg viewBox="0 0 24 24" class="w-5 h-5 mr-3 text-green-600 sm:w-5 sm:h-5">
             <path fill="currentColor"
             d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
            </path>
            </svg>
            <span class="text-sm font-medium" id="sDiv"></span>
           </div>
    <!-- End Alert Success -->

    <!-- Alert Error -->
    <div class="items-center hidden col-span-2 px-3 py-4 text-lg text-red-800 bg-red-200 rounded-md" id="errorDiv">
        <svg viewBox="0 0 24 24" class="w-5 h-5 mr-3 text-red-600 sm:w-5 sm:h-5">
            <path fill="currentColor"
                d="M11.983,0a12.206,12.206,0,0,0-8.51,3.653A11.8,11.8,0,0,0,0,12.207,11.779,11.779,0,0,0,11.8,24h.214A12.111,12.111,0,0,0,24,11.791h0A11.766,11.766,0,0,0,11.983,0ZM10.5,16.542a1.476,1.476,0,0,1,1.449-1.53h.027a1.527,1.527,0,0,1,1.523,1.47,1.475,1.475,0,0,1-1.449,1.53h-.027A1.529,1.529,0,0,1,10.5,16.542ZM11,12.5v-6a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Z">
            </path>
        </svg>
        <span class="text-sm font-medium" id="eDiv"></span>
        
    </div>
    <!-- End Alert Error -->
    <!--Alert-->
            
            <div class="col-span-1 ">
              <button class="flex justify-center w-full px-3 py-3 mt-2 transition duration-150 ease-in-out bg-red-300 rounded-full shadow-sm hover:bg-red-400/80 active:bg-red-500/50" onclick="signUp();">Sign Up</button>
            </div>
            

            <div class="col-span-1 ">
                <button class="flex justify-center w-full py-3 mt-2 transition duration-150 ease-in-out border-4 border-red-400 border-double rounded-full shadow-sm borer-double mt-border-4 border-spacing-6 focus:outline-none hover:bg-red-300 hover:border-rose-200 active:bg-red-500/70" onclick="changeView();">Already have an Account? Sign In</button>
            </div>
                
            </div>
    
      
        <!--signUp Area-->
 

            </div>
        </div>




    </div>
    </div>

    <script src="script.js"></script>

</body>

</html>