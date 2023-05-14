<?php
require_once('header.php');
$data = [
    ['name' => 'Fiberglass Claw Hammer Pittsburgh 16 Oz. Shock', 'old_price' => 40, 'new_price' => 39.99, 'in_stock' => true, 'image' => 'images/newest-collection/hammer.png'],
    ['name' => 'DEWALT 20V MAX Cordless Drill and Impact Driver', 'old_price' => 10, 'new_price' => 6.99, 'in_stock' => true, 'image' => 'images/newest-collection/tools.png'],
    ['name' => 'Spec Ops Tools 4" Magnetic Pocket Level', 'old_price' => 50, 'new_price' => 29.99, 'in_stock' => false, 'image' => 'images/newest-collection/spec_ops.png'],
    ['name' => 'Yellow Jacket 2827 12/3 15-Amp SJTW Contractor Power Block, Heavy Duty', 'old_price' => 150, 'new_price' => 119.99, 'in_stock' => true, 'image' => 'images/newest-collection/yellow_jacket.png'],
    ['name' => 'Bucket Boss The Bucketeer Bucket Tool Organizer in Brown', 'old_price' => 20, 'new_price' => 16.59, 'in_stock' => false, 'image' => 'images/newest-collection/bucket.png'],
    ['name' => 'CLC Work Gear PB1133 38 Pocket Molded Base Tool Backpack', 'old_price' => 120, 'new_price' => 79.99, 'in_stock' => true, 'image' => 'images/newest-collection/clc.png'],
    ['name' => 'Klein Tools 55448 Bucket Bag ', 'old_price' => 35, 'new_price' => 32, 'in_stock' => true, 'image' => 'images/newest-collection/klein_tools.png'],
];
function debug_to_console($data)
{
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
?>

<div class="pt-8 mx-4 md:mx-8 lg:mx-12">
    <div class="my-16">
        <h2 class="uppercase text-xl font-semibold text-center my-10">Newest Collection</h2>
        <div
            class="snap-x px-3 sm:px-12 md:px-16 flex items-center gap-2 lg:gap-8 overflow-x-scroll overflow-y-hidden py-10">
            <?php for ($i = 0; $i < count($data); $i++) { ?>
                <div class="snap-center group relative p-4 py-12 rounded border-2 border-[#00a2d9] w-64 h-96 flex-none">
                    <?php if ($data[$i]['in_stock'])
                        echo '<span class="p-1 absolute rounded text-xs bg-green-400/80 text-white top-1 left-1">Available</span>';
                    else
                        echo '<span class="p-1 absolute rounded text-xs bg-red-400/80 text-white top-1 left-1">Out of stock</span>'; ?>
                    <div class="grid place-items-center">
                        <img src=<?= $data[$i]['image'] ?> class="w-32 h-44 object-contain text-center" />
                    </div>
                    <div class="text-gray-800 mt-4 h-[3rem] line-clamp-2">
                        <?= $data[$i]['name'] ?>
                    </div>
                    <div class="absolute bottom-5 left-5">
                        <del class="line-through text-gray-400 mt-20">
                            <?= '$' . $data[$i]['old_price'] ?>
                        </del>
                        <div class="text-xl text-[#00a2d9] font-semibold mt-0">
                            <?= '$' . $data[$i]['new_price'] ?>
                        </div>
                    </div>
                    <div
                        class="absolute -bottom-10 left-0 opacity-0 group-hover:bottom-0 group-hover:opacity-100 h-full w-full bg-black/20 flex items-center justify-center transition-all duration-300">
                        <?php if ($data[$i]['in_stock'])
                            echo "<button class='px-5 py-2 bg-[#00a2d9] text-white' onclick='AddToCart()'>
                                    Add to cart
                                </button>";
                        else
                            echo "<div class='px-5 py-2 bg-red-400 text-white'>
                                    Out of stock
                                </div>";
                        ?>
                    </div>
                </div>
            <?php } ?>
            <!-- <?php for ($i = 0; $i < 7; $i++) { ?>
                <div class="snap-center group relative p-4 py-12 rounded border-2 border-[#00a2d9] w-64 flex-none">
                    <div class="grid place-items-center">
                        <img src="images/hammer.jpg" class="w-32 object-cover text-center" />
                    </div>
                    <div class="text-gray-800 mt-4">Fiberglass Claw Hammer Pittsburgh 16 Oz. Shock</div>
                    <del class="line-through text-gray-400 mt-5">$40</del>
                    <div class="text-xl text-[#00a2d9] font-semibold mt-0">$39.99</div>
                    <div
                        class="absolute -bottom-10 left-0 opacity-0 group-hover:bottom-0 group-hover:opacity-100 h-full w-full bg-black/20 flex items-center justify-center transition-all duration-300">
                        <button class="px-5 py-2 bg-[#00a2d9] text-white" onclick='AddToCart()'>
                            Add to cart
                    </div>
                </div>
            <?php } ?> -->
        </div>
    </div>
    <div>
        <h2 class="uppercase text-xl font-semibold text-center sm:text-left">Services Highlights</h2>
        <div class="grid  md:grid-cols-4 lg:grid-cols-6 mx-16 gap-4 my-10">
            <div class="flex flex-col items-center p-8 rounded shadow hover:shadow-lg transition-all">
                <img class="w-24" src="images/services/cash.png" />
                <span class="mt-4 text-gray-600 text-sm  text-center">Cash on Delivery</span>

            </div>
            <div class="flex flex-col items-center p-8 rounded shadow hover:shadow-lg transition-all">
                <img class="w-24" src="images/services/repair.png" />
                <span class="mt-4 text-gray-600 text-sm text-center">1 year Warrantly</span>
            </div>
            <div class="flex flex-col items-center p-8 rounded shadow hover:shadow-lg transition-all">
                <img class="w-24" src="images/services/chat.png" />
                <span class="mt-4 text-gray-600 text-sm text-center">Active chat</span>
            </div>
            <div class="flex flex-col items-center p-8 rounded shadow hover:shadow-lg transition-all">
                <img class="w-24" src="images/services/exchange.png" />
                <span class="mt-4 text-gray-600 text-sm text-center">Exchange & Return</span>
            </div>
            <div
                class="flex flex-col items-center p-8 rounded shadow hover:shadow-lg md:col-start-2 lg:col-start-5 transition-all">
                <img class="w-24" src="images/services/delivery.png" />
                <span class="mt-4 text-gray-600 text-sm text-center">Free Delivery</span>
            </div>
            <div class="flex flex-col items-center p-8 rounded shadow hover:shadow-lg  transition-all">
                <img class="w-24" src="images/services/trusted.png" />
                <span class="mt-4 text-gray-600 text-sm text-center">Trusted</span>
            </div>
        </div>
    </div>
</div>

<script>
    function AddToCart() {
        console.log('add to cart');
    }
</script>
<?php
require_once('footer.php');
?>