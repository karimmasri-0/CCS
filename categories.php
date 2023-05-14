<?php require_once('header.php');
$data = [
    ['name' => 'Power Tools', 'link' => 'power-tools', 'image' => 'images/categories/Power-Tools.png'],
    ['name' => 'Hand Tools', 'link' => 'hand-tools', 'image' => 'images/categories/Hand-Tools.png'],
    ['name' => 'Garden and Outdoor Tools', 'link' => 'garden-and-outdoor-tools', 'image' => 'images/categories/Garden-and-Outdoor-Tools.png'],
    ['name' => 'Measuring and Precision Tools', 'link' => 'measuring-and-precision-tools', 'image' => 'images/categories/Measuring-and-Precision-Tools.png'],
    ['name' => 'Electrical Tools', 'link' => 'electrical-tools', 'image' => 'images/categories/Electrical-Tools.png'],
    ['name' => 'Plumbing Tools', 'link' => 'plumbing-tools', 'image' => 'images/categories/Plumbing-Tools.png'],
    ['name' => 'Painting and Decorating Tools', 'link' => 'painting-and-decorating-tools', 'image' => 'images/categories/Painting-and-Decorating-Tools.png'],
    ['name' => 'Construction and Building Tools', 'link' => 'construction-and-building-tools', 'image' => 'images/categories/Construction-and-Building-Tools.png'],
]
    ?>
<section class="mx-16 md:mx-32 my-5">
    <h1 class="text-3xl uppercase font-semibold ">Categories</h1>
    <div class="flex flex-wrap justify-center gap-8 mt-12">
        <?php for ($i = 0; $i < count($data); $i++) {
            echo '<div class="relative group w-64 h-72 rounded-sm bg-gray-200 border border-[#00a2d9]">
                    <div class="grid place-items-center w-full h-full">
                        <img class="w-44 max-h-60 object-cover" src=' . $data[$i]['image'] . ' alt="' . $data[$i]['name'] . '" />
                    </div>  
                    <a href="search.php?ctg=' . $data[$i]['link'] . '." class="absolute -bottom-10 left-0 opacity-0 group-hover:bottom-0 group-hover:opacity-100 h-full w-full bg-black/20 flex items-center justify-center transition-all duration-300">
                        <div class="text-center w-44 text-lg font-semibold px-5 py-2 bg-[#00a2d9] text-white">
                          ' . $data[$i]['name'] . '
                        </div>
                    </a>
                </div>';
        } ?>
    </div>
</section>
<?php require_once('footer.php'); ?>