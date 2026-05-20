<?php

include "connection.php";

$pageno = 0;
$page = $_POST["pg"];
$product = $_POST["p"];
// echo($page);

if (0 != $page) {
    $pageno = $page;
} else {
    $pageno = 1;
}


$q = ("SELECT * 
FROM `stock` 
INNER JOIN `product` ON `stock`.`product_id` = `product`.`id` 
INNER JOIN `product_img` ON `product_img`.`product_id` = `product`.`id`
INNER JOIN `category` ON `product`.categroy_cat_id =category.cat_id
INNER JOIN `model` ON `model`.`model_id` = `product`.`model_model_id` 
INNER JOIN `color` ON `color`.`color_id` = `product`.`color_color_id`
WHERE `product`.`name` LIKE '%$product%'");

$rs = Database::search($q);
$num = $rs->num_rows;

// echo($num);

$results_per_page = 5;
$num_of_pages = ceil($num / $results_per_page);
// echo($num_of_pages);

$page_results = ($pageno - 1) * $results_per_page;
// echo($page_results);

$q2 = $q . " LIMIT $results_per_page OFFSET $page_results";
$rs2 = Database::search($q2);
$num2 = $rs2->num_rows;
// echo($num2);

if ($num2 == 0) {
?>
    <div class="mt-5 text-center">
        <h2>Search No results</h2>
        <p>We are Sorry,we cann't find any results for your search term.</p>

    </div>
    <?php
} else {
    for ($i = 0; $i < $num2; $i++) {
        $d = $rs2->fetch_assoc();

    ?>


        <div class="grid w-screen grid-cols-4 gap-3 p-4 mt-5">
            <div class="col-span-1 duration-500 bg-white shadow-md t rounded-xl hover:scale-105 hover:shadow-xl w-72 justify-items-center">

                <a href="singleProductView.php?s=<?php echo $d["id"]; ?>"><img src="<?php echo $d["proimage_id"]; ?>" alt="Product" class="object-cover h-80 w-72 rounded-t-xl"></a>


                <div class="px-4 py-3 w-72">
                    <span class="mr-3 text-xs text-gray-400 uppercase"><?php echo $d["titile"]; ?></span>
                    <p class="block text-lg font-bold text-black capitalize truncate"><?php echo $d["name"]; ?></p>
                    <div class="flex items-center">
                        <p class="my-3 text-lg font-semibold text-black cursor-auto">Rs.<?php echo $d["customer_price"]; ?>
                            &nbsp;
                            <lable class="text-sm"> Available:<?php echo $d["qty"]; ?></lable>
                        </p>

                    </div>

                    <div class="grid grid-cols-2 gap-2">
                        <div class="col-span-1"><button class="w-full px-4 py-2 rounded-md bg-rose-200">Bye Now</button></div>

                        <div class="col-sapn-2"><button class="w-full px-4 py-2 rounded-md bg-rose-200" onclick="addCart('<?php echo $d['id']; ?>');">Add to cart</button>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    <?php
    }
    ?>




<?php
}

?>


<!-- pagination -->
<div class="mt-5 d-flex justify-content-center">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" <?php
                                                        if ($pageno <= 1) {
                                                            echo ("#");
                                                        } else {
                                                        ?>onclick="searchProduct(<?php echo ($pageno - 1); ?>);" <?php
                                                                                                                    }
                                                                                                                        ?>>Previous</a></li>
            <?php

            for ($y = 1; $y <= $num_of_pages; $y++) {

                if ($y == $pageno) {
            ?>
                    <li class="page-item active">
                        <a class="page-link" onclick="searchProduct(<?php echo $y; ?>);"><?php echo $y; ?></a>
                    </li>
                <?php
                } else {
                ?>
                    <li class="page-item">
                        <a class="page-link" onclick="searchProduct(<?php echo $y; ?>);"><?php echo $y; ?></a>
                    </li>
            <?php
                }
            }
            ?>

            <li class="page-item"><a class="page-link" <?php
                                                        if ($pageno >= $num_of_pages) {
                                                            echo ("#");
                                                        } else {
                                                        ?>onclick="searchProduct(<?php echo ($pageno + 1); ?>);" <?php
                                                                                                                    }
                                                                                                                        ?>>Next</a></li>
        </ul>
    </nav>
</div>
<!-- pagination -->


<?php


?>