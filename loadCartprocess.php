<?php

include "connection.php";
session_start();

$user = $_SESSION["u"] ["id"];

$netTotal = 0;

$rs = Database::search("SELECT * FROM cart INNER JOIN stock ON cart.stock_id = stock.id
INNER JOIN product ON stock.product_id = product.id
INNER JOIN color ON product.color_color_id = color.color_id  WHERE `user_id`='" . $user . "'");

$num = $rs->num_rows;


$imgrs = Database::search("SELECT * FROM product INNER JOIN product_img ON product.id = product_img.product_id");
$numimg = $rs->num_rows;


if ($num > 0) {
    //Load Cart

?>
<!--Start table-->
<div class="md:w-3/4">
    <div class="p-6 mb-4 bg-white rounded-lg shadow-md">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="p-2 font-semibold text-left rounded-ss-lg bg-gradient-to-tr from-rose-200 to-pink-300">
                        Product</th>

                    <th class="p-2 font-semibold text-left bg-pink-300">Price</th>
                    <th class="p-2 font-semibold text-left bg-pink-300">Color</th>
                    <th class="p-2 font-semibold text-left bg-pink-300">Quantity</th>
                    <th class="p-2 font-semibold text-left bg-pink-300">Total</th>
                    <th class="p-2 font-semibold text-left bg-pink-300 rounded-tr-lg">Remove</th>
                </tr>
            </thead>
            <tbody>

                <?php

    for ($i = 0; $i < $num; $i++) {
        $d = $rs->fetch_assoc();
        $total = $d["customer_price"] * $d["cart_qty"];
        $netTotal += $total;
        $dimg = $imgrs->fetch_assoc();
    ?>
                <!-- Card Items -->

                <!--Table body-->

                <tr>
                    <td class="py-4">
                        <div class="flex items-center">
                            <img class="w-16 h-16 mr-4" src="<?php echo $dimg["proimage_id"]; ?>">
                            <span class="font-semibold"><?php echo $d["name"]; ?></span>
                        </div>
                    </td>
                    <td class="py-4">RS.<?php echo $d["customer_price"]; ?></td>
                    <td class="py-4"><?php echo $d["color_name"]; ?></td>
                    <td class="py-4">
                        <div class="flex items-center">
                            <button class="px-4 py-2 mr-2 border rounded-md"
                                onclick="decrementQty(<?php echo $d['cart_id']; ?>);">-</button>
                            <input type="number" id="qty<?php echo $d['cart_id']; ?>"
                                class="text-center form-control form-control-sm" style="max-width: 100px;" disabled
                                value="<?php echo $d["cart_qty"]; ?>">
                            <button class="px-4 py-2 ml-2 border rounded-md"
                                onclick="incrementQty(<?php echo $d['cart_id']; ?>);">+</button>
                    </td>
                    <td class="py-4"><?php echo $total; ?></td>
                    <td class="py-4 ">
                        <div class="flex justify-center w-full ">
                            <button
                                class="px-3 py-1 mx-4 text-white transition duration-150 ease-in-out bg-red-500 rounded-full shadow-md outline-none hover:bg-red-300 active:bg-red-500"
                                onclick="removeCart(<?php echo $d['cart_id']; ?>);">X</button>
                        </div>
                    </td>
                </tr>
                <!--Table body-->

                <!-- Card Items -->
                <?php
    }
?>
            </tbody>
        </table>
    </div>
</div>

<!--end Table-->


<div class="mt-4 col-12">
    <hr>
</div>

<!-- Checkouts -->
<div class="md:w-1/4">
    <div class="p-6 bg-white rounded-lg shadow-md">
        <h2 class="mb-4 text-lg font-semibold">Summary</h2>
        <div class="flex justify-between mb-2">
            <span>Subtotal</span>
            <span>Rs.<?php echo $netTotal; ?></span>
        </div>
        <div class="flex justify-between mb-2">
            <span>Delevory Cost</span>
            <span>Rs.500</span>
        </div>
        <hr class="my-2">
        <div class="flex justify-between mb-2">
            <span class="font-semibold">Total</span>
            <span class="font-semibold">Rs.<?php echo ($netTotal + 500); ?></span>
        </div>
        <button
            class="w-full px-4 py-2 mt-4 text-white transition duration-150 ease-in-out rounded-md bg-rose-400 hover:bg-rose-300 active:bg-pink-500"
            onclick="checkOut();">Checkout</button>
    </div>
</div>
<!-- Checkouts -->
<?php

} else {

?>
<div class="content-center w-screen mt-5 text-center col-12">
    <h2 class="text-2xl font-bold">Your Cart is Empty!</h2>
    <a href="index.php" class="btn btn-primary">Start Shopping</a>
    <img src="resoses/images/loadpage1.png" width="500" height="500" class="mx-auto">
</div>
</div>
<?php

}