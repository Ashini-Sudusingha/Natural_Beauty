<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
</head>
<body>

<div class="w-screen h-full pt-5">
          <!--Table Start-->
          <table class="w-full text-sm text-left text-gray-500 shadow-md rtl:text-right dark:text-gray-400 shadow-gray-400">
            <thead class="text-xs text-black uppercase bg-gradient-to-tr from-rose-200 to-pink-300 ">
                <tr>
                  <th scope="col" class="px-6 py-3 rounded-tl-xl">
                    Product Id
                  </th>
                    <th scope="col" class="px-6 py-3">
                      Product
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Brand Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                       Unit price
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                     Coloer
                   </th>
                   <th scope="col" class="px-6 py-3 rounded-tr-xl">
                     Status
                   </th>
                </tr>
            </thead>
            
            <tbody id="tb">
              <!--Table Row-->
                
                
              <!--Table Row-->
            </tbody>
        </table>
         
          
         <div class="flex justify-end w-sreen">
            <button class="w-40 p-5 font-bold rounded-lg bg-rose-300" onclick="window.print();">Print</button>
         </div>
         
    
</div>



<script src="script.js"></script>
</body>
</html>