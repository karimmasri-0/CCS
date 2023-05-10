<?php require_once('header.php');
$products = [
    ['name' => 'Fiberglass Claw Hammer Pittsburgh 16 Oz. Shock', 'old_price' => 40, 'new_price' => 39.99, 'in_stock' => true, 'image' => 'images/hammer.jpg', 'qty' => 5],
    ['name' => 'DEWALT 20V MAX Cordless Drill and Impact Driver', 'old_price' => 10, 'new_price' => 6.99, 'in_stock' => true, 'image' => 'images/tools.jpg', 'qty' => 2],
];
?>
<section class=" mx-32 my-5">
    <h1 class=" text-3xl font-bold">Shopping cart</h1>
    <div class="mt-0 text-gray-600 text-sm">1 Product</div>
    <div class="flex items-start gap-8 mt-12">
        <div class="flex flex-col gap-12 w-3/5 ">
            <?php for ($i = 0; $i < count($products); $i++) {
                echo '
        <div class="p-8 bg-gray-200 flex items-center h-64 gap-6 border border-gray-300">
            <img alt="product" class="w-44" src="' . $products[$i]['image'] . '"/>
            <div class="">
                <div class="text-2xl mb-6 font-semibold">' . $products[$i]['name'] . '</div>
                <div class="flex items-center justify-between">
                    <div>
                        <del class="text-sm text-gray-400">$' . $products[$i]['old_price'] . '</del>
                        <div class="text-2xl text-[#00a2d9]">$' . $products[$i]['new_price'] . '</div>
                    </div>
                    <div class="flex items-center gap-3">
                        <input type="number" class="p-2 text-center w-16 rounded" value="' . $products[$i]['qty'] . '"/>
                        <button class="p-2 hover:bg-white rounded-full transition-all"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></button>
                    </div>
                </div>
            </div>
        </div>';
            }
            ?>
        </div>
        <div class="p-4 bg-gray-200 w-2/5">
            <div class="text-xl font-semibold">Summary</div>
            <hr class="w-full my-4 h-px border-0 bg-gray-400/50">
            <div class="flex items-center justify-between mx-2 mt-4 mb-2">
                <div class="text-lg">Subtotal</div>
                <div>
                    <?php $total = 0;
                    for ($i = 0; $i < count($products); $i++) {
                        $total = $total + $products[$i]['new_price'];
                    }
                    echo '$' . $total; ?>
                </div>
            </div>
            <div class="flex items-center justify-between mx-2 mt-3 mb-2">
                <div class="">Delivery cost</div>
                <div class="text-[#00a2d9] text-lg font-semibold">
                    Free
                </div>
            </div>
            <hr class="w-full my-4 h-px border-0 bg-gray-300/50">
            <div class="flex items-center justify-between mx-2">
                <div class="text-xl font-bold ">Total<span class="text-xs font-normal ml-1 block -mt-1">VAT
                        included</span>
                </div>
                <div>
                    <?php $total = 0;
                    for ($i = 0; $i < count($products); $i++) {
                        $total = $total + $products[$i]['new_price'];
                    }
                    echo '$' . $total; ?>
                </div>
            </div>
            <button
                class="text-white mt-5 uppercase w-full py-2 bg-[#00a2d9] shadow-md hover:shadow-lg shadow-[#00a2d9]/20 hover:shadow-[#00a2d9]/40 transition-all focus:opacity-[0.85]">
                Checkout
            </button>
        </div>
    </div>
</section>
<?php require_once('footer.php'); ?>