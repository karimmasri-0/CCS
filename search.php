<?php require_once('header.php');
$data = [
    ['name' => 'Fiberglass Claw Hammer Pittsburgh 16 Oz. Shock', 'old_price' => 40, 'new_price' => 39.99, 'in_stock' => true, 'image' => 'images/hammer.jpg'],
    ['name' => 'DEWALT 20V MAX Cordless Drill and Impact Driver', 'old_price' => 10, 'new_price' => 6.99, 'in_stock' => true, 'image' => 'images/tools.jpg'],
    ['name' => 'Spec Ops Tools 4" Magnetic Pocket Level', 'old_price' => 50, 'new_price' => 29.99, 'in_stock' => false, 'image' => 'images/spec_ops.jpg'],
    ['name' => 'Yellow Jacket 2827 12/3 15-Amp SJTW Contractor Power Block, Heavy Duty', 'old_price' => 150, 'new_price' => 119.99, 'in_stock' => true, 'image' => 'images/yellow_jacket.jpg'],
    ['name' => 'Bucket Boss The Bucketeer Bucket Tool Organizer in Brown', 'old_price' => 20, 'new_price' => 16.59, 'in_stock' => false, 'image' => 'images/bucket.jpg'],
    ['name' => 'CLC Work Gear PB1133 38 Pocket Molded Base Tool Backpack', 'old_price' => 120, 'new_price' => 79.99, 'in_stock' => true, 'image' => 'images/clc.jpg'],
    ['name' => 'Klein Tools 55448 Bucket Bag ', 'old_price' => 35, 'new_price' => 32, 'in_stock' => true, 'image' => 'images/klein_tools.jpg'],
];
$categories = [
    ['name' => 'Power Tools', 'link' => 'power-tools', 'image' => 'images/Power-Tools.png'],
    ['name' => 'Hand Tools', 'link' => 'hand-tools', 'image' => 'images/Hand-Tools.webp'],
    ['name' => 'Garden and Outdoor Tools', 'link' => 'garden-and-outdoor-tools', 'image' => 'images/Garden-and-Outdoor-Tools.jpg'],
    ['name' => 'Measuring and Precision Tools', 'link' => 'measuring-and-precision-tools', 'image' => 'images/Measuring-and-Precision-Tools.jpeg'],
    ['name' => 'Electrical Tools', 'link' => 'electrical-tools', 'image' => 'images/Electrical-Tools.jpg'],
    ['name' => 'Plumbing Tools', 'link' => 'plumbing-tools', 'image' => 'images/Plumbing-Tools.jpg'],
    ['name' => 'Painting and Decorating Tools', 'link' => 'painting-and-decorating-tools', 'image' => 'images/Painting-and-Decorating-Tools.png'],
    ['name' => 'Construction and Building Tools', 'link' => 'construction-and-building-tools', 'image' => 'images/Construction-and-Building-Tools.png'],
]
    ?>
<section class="mx-12 lg:mx-10 my-5">
    <div class="flex items-center justify-between">
        <div class="font-bold text-3xl my-5 uppercase">Shop</div>
        <select class="p-2 rounded-md shadow-md cursor-pointer">
            <option>Sort by ascending price</option>
            <option>Sort by descending price</option>
            <option>Sort by newset date</option>
            <option>Sort by oldest date</option>
        </select>
    </div>
    <div class="flex gap-10">
        <div class="hidden bg-gray-100 lg:block lg:w-1/5 p-6 rounded-md shadow-md border">
            <div class="Font font-semibold text-xl">Filter by categorie</div>
            <div class="mt-4 space-y-3">
                <?php for ($i = 0; $i < count($categories); $i++) {
                    echo '
                    <div class="flex text-gray-700 items-center gap-2">
                        <input type="checkbox" label=' . $categories[$i]['name'] . '/>
                        <label id=' . $categories[$i]['name'] . '>' . $categories[$i]['name'] . '</label>
                    </div>';
                } ?>
            </div>
        </div>
        <div class="w-full flex flex-wrap gap-6 lg:w-4/5">
            <?php for ($i = 0; $i < count($data); $i++) { ?>
                <div class="bg-white  group relative p-4 py-12 rounded border-2 border-[#00a2d9] w-64 h-96 flex-none">
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
                    <a href=""
                        class="absolute -bottom-10 left-0 opacity-0 group-hover:bottom-0 group-hover:opacity-100 h-full w-full bg-black/20 flex items-center justify-center transition-all duration-300">
                        <?php if ($data[$i]['in_stock'])
                            echo "<button href='' class='px-5 py-2 bg-[#00a2d9] text-white' onclick='AddToCart()' >
                                    Add to cart
                                </button>";
                        else
                            echo "<div class='px-5 py-2 bg-red-400 text-white'>
                                    Out of stock
                                </div>";
                        ?>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php require_once('footer.php'); ?>