<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>Document</title>
</head>
<body>
    <div class="flex justify-center w-screen h-screen pt-20" style="background-image: url('resoses/images/admin_back.jpeg'); background-position: cover; background-repeat: no-repeat; background-size: cover;" >
        <div class="w-1/3 pt-10 rounded-md shadow-2xl h-4/5 backdrop-brightness-50 border-zinc-950">
            <div class="">
                <h2 class="flex justify-center text-3xl text-white">Admin Login</h2>
            </div>
            
            <div class="grid grid-cols-2 gap-y-4">

             <div class="w-full col-span-2 px-10">
             <label class="block text-lg text-slate-50" >Email</label>
             <input type="email" class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-500/50 focus:outline-none" placeholder="ex:- john@gmail.com" id="email" /></div>
                       
             <div class="w-full col-span-2 px-10">
             <label class="block text-lg text-slate-50">Password</label>
             <input class="block w-full px-4 mt-2 text-gray-900 border-0 rounded-md shadow-sm bg-gray-50 ring-2 ring-inset ring-gray-300 h-9 focus:ring-3 focus:ring-inset focus:ring-red-500/50 focus:outline-none" type="password" placeholder="ex: ********" id="password" /></div>

             
             <div class="col-span-1 pl-10">
                <input class="" type="checkbox" value="" id="rm">
                    <label class="text-base text-slate-50" for="rememberme">
                        Remember Me.
                    </label>
            </div>

            <div class="pr-10 text-right underline transition duration-150 ease-in-out text-slate-50 underline-offset-4 hover:text-blue-600 active:text-blue-400">
                <a href="#" class="link-primary">Forgotten Password?</a>
            </div>
            <!--Alert-->

           <!-- Alert Error -->
           <div class="hidden col-span-2 " id="msgDiv">
           <div class="flex items-center px-10 py-4 text-lg text-red-800 bg-red-200 rounded-md" >
           <svg viewBox="0 0 24 24" class="w-5 h-5 mr-3 text-red-600 sm:w-5 sm:h-5">
           <path fill="currentColor"
            d="M11.983,0a12.206,12.206,0,0,0-8.51,3.653A11.8,11.8,0,0,0,0,12.207,11.779,11.779,0,0,0,11.8,24h.214A12.111,12.111,0,0,0,24,11.791h0A11.766,11.766,0,0,0,11.983,0ZM10.5,16.542a1.476,1.476,0,0,1,1.449-1.53h.027a1.527,1.527,0,0,1,1.523,1.47,1.475,1.475,0,0,1-1.449,1.53h-.027A1.529,1.529,0,0,1,10.5,16.542ZM11,12.5v-6a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Z">
           </path>
           </svg>
           <span class="text-sm font-medium" id="msg"></span>
           </div></div>
        <!-- End Alert Error -->
        <!--Alert-->

        <div class="flex justify-center col-span-2">
            <button class="flex justify-center w-3/4 px-3 py-3 mt-4 ease-in-out bg-red-300 rounded-full shadow-sm dy-uration-150 ptransition hover:bg-red-400/80 active:bg-red-500/50" onclick="adminSignIn();">Sign In</button>
         </div>
       
                        
            </div>


    </div>
    
   <script src="script.js"></script>

</body>
</html>