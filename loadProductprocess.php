<?php

include "connection.php";


$pageno = 0;
$page = $_POST["p"];
// echo($page);


if (0 != $page) {
    $pageno = ($pageno = $page);
} else {
    $pageno = 1;
}

$q = "SELECT * FROM ((`stock` INNER JOIN `product` ON `stock`.`product_id` = `product`.`id`) 
INNER JOIN `product_img` ON `product_img`.`product_id` = `product`.`id` )
ORDER BY `stock`. `id`  ASC";


$rs = Database::search($q);
$num = $rs->num_rows;
// echo($num);

$results_per_page = 4 ;
$num_of_pages = ceil($num / $results_per_page);
// echo($num_of_pages);

$page_results = ($pageno - 1) * $results_per_page;
// echo($page_results);

$q2 = $q . " LIMIT $results_per_page OFFSET $page_results";
$rs2 = Database::search($q2);
$num2 = $rs2->num_rows;
// echo($num2);

if ($num2 == 0) {
    echo ("No Products Here..");
} else {
?>

<div class="grid w-screen grid-cols-4 gap-3 p-4 mt-5" id="pid">

<?php
    
    for ($i = 0; $i < $num2; $i++) {
        $d = $rs2->fetch_assoc();
        
?>

<div
    class="col-span-1 duration-500 bg-white shadow-md rounded-xl hover:scale-105 hover:shadow-xl w-72 justify-items-center">

    <a href="singleProductView.php?s=<?php echo $d["id"] ?>"><img src="<?php echo $d["proimage_id"]; ?>" alt="Product"
            class="object-cover h-80 w-72 rounded-t-xl"></a>


    <div class="px-4 py-3 w-72">
        <span class="mr-3 text-xs text-gray-400 uppercase"><?php echo $d["titile"]; ?></span>
        <p class="block text-lg font-bold text-black capitalize truncate"><?php echo $d["name"]; ?></p>
        <div class="flex items-center">
            <p class="my-3 text-lg font-semibold text-black cursor-auto">Rs.<?php echo $d["customer_price"]; ?> &nbsp;
                <lable class="text-sm"> Available:<?php echo $d["qty"]; ?></lable>
            </p>

            <button class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-bag-plus" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                    <path
                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                </svg></button>
        </div>

        <div class="grid grid-cols-2 gap-2">
            <div class="col-span-1"><button class="w-full px-4 py-2 rounded-md bg-rose-200">Bye Now</button></div>

            <div class="col-sapn-2"><button class="w-full px-4 py-2 rounded-md bg-rose-200" onclick="addCart('<?php echo $d['id']; ?>');">Add to cart</button></div>

        </div>
    </div>

</div>


<?php
    }
    ?>
</div>
<!-- pagination  -->
<div class="flex w-screen mt-5 justify-content-center">
    <nav aria-label="Page navigation example">
        <ul class="pagination">


            <div class="flex justify-center w-screen">
                <nav class="px-4 py-2 bg-gray-200 rounded-full">
                    <ul class="flex gap-4 py-2 font-medium text-gray-600">


                        <li class="page-item"><a class="px-4 py-2 text-gray-600 bg-white rounded-full" <?php

                        if ($pageno <= 1) {
                            echo ("#");
                        } else {
                        ?>onclick="loadProduct(<?php echo ($pageno - 1) ?>);" <?php
                                                                            }
                                                                                ?>>Previous</a></li>

                        <?php
                for ($y = 1; $y <= $num_of_pages; $y++) {
                    if ($y == $pageno) {
                ?>
                        <li class="page-item active">
                            <a class="page-link" onclick="loadProduct(<?php echo ($y) ?>);"><?php echo ($y) ?></a>
                        </li>
                        <?php

                    } else {
                    ?>
                        <li class="page-item">
                            <a class="page-link" onclick="loadProduct(<?php echo ($y) ?>);"><?php echo ($y) ?></a>
                        </li>
                        <?php
                    }
                }

                ?>


                        <li class=""><a
                                class="px-4 py-2 transition duration-300 ease-in-out rounded-full hover:bg-white hover:text-gray-600" <?php

                    if ($pageno >= $num_of_pages) {
                        echo ("#");
                    } else {
                    ?>onclick="loadProduct(<?php echo ($pageno + 1) ?>);" <?php
                                                                        }
                                                                            ?>>Next</a></li>

                    </ul>
                </nav>
            </div>



        </ul>
    </nav>

    <?php

}

?>