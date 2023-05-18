<?php require_once('../top-layout.php');
$products = [
    ['id' => 1, 'stock' => 0, 'name' => 'Fiberglass Claw Hammer Pittsburgh 16 Oz. Shock', 'mrp' => 40, 'price' => 39.99, 'in_stock' => true, 'image' => '../../images/newest-collection/hammer.png'],
    ['id' => 2, 'stock' => 32, 'name' => 'DEWALT 20V MAX Cordless Drill and Impact Driver', 'mrp' => 10, 'price' => 6.99, 'in_stock' => true, 'image' => '../../images/newest-collection/tools.png'],
    ['id' => 3, 'stock' => 19, 'name' => 'Spec Ops Tools 4" Magnetic Pocket Level', 'mrp' => 50, 'price' => 29.99, 'in_stock' => false, 'image' => '../../images/newest-collection/spec_ops.png'],
    ['id' => 4, 'stock' => 7, 'name' => 'Yellow Jacket 2827 12/3 15-Amp SJTW Contractor Power Block, Heavy Duty', 'mrp' => 150, 'price' => 119.99, 'in_stock' => true, 'image' => '../../images/newest-collection/yellow_jacket.png'],
    ['id' => 5, 'stock' => 12, 'name' => 'Bucket Boss The Bucketeer Bucket Tool Organizer in Brown', 'mrp' => 20, 'price' => 16.59, 'in_stock' => false, 'image' => '../../images/newest-collection/bucket.png'],
    ['id' => 6, 'stock' => 24, 'name' => 'CLC Work Gear PB1133 38 Pocket Molded Base Tool Backpack', 'mrp' => 120, 'price' => 79.99, 'in_stock' => true, 'image' => '../../images/newest-collection/clc.png'],
    ['id' => 7, 'stock' => 5, 'name' => 'Klein Tools 55448 Bucket Bag ', 'mrp' => 35, 'price' => 32, 'in_stock' => true, 'image' => '../../images/newest-collection/klein_tools.png'],
]; ?>
<section>
    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-gray-700 uppercase font-bold">Products</h2>
        </div>
        <div class="flex flex-wrap items-center">
            <a href="create.php" class="bg-green-500 text-white text-sm uppercase py-2 px-4 flex items-center rounded">
                <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas"
                    data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor"
                        d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                    </path>
                </svg>
                <span class="ml-2 text-xs font-semibold">Add New Product</span>
            </a>
        </div>
    </div>
    <div class="mt-8 bg-white rounded border-b-4 border-gray-300">
        <div
            class="flex flex-wrap items-center uppercase text-sm justify-around font-semibold bg-gray-400 text-white rounded-tl rounded-tr">
            <div class="w-1/12 px-4 py-3">#</div>
            <div class="w-2/12 px-4 py-3">Name</div>
            <div class="w-1/12 px-4 py-3">Stock</div>
            <div class="w-1/12 px-4 py-3">MRP</div>
            <div class="w-1/12 px-4 py-3">Price</div>
            <div class="w-2/12 px-4 py-3 text-center">Image</div>
            <div class="w-1/12 px-4 py-3 text-right">Actions</div>
        </div>
        <?php
        for ($i = 0; $i < count($products); $i++) {
            echo '
            <div class="flex flex-wrap  justify-around items-center text-gray-700 border-t-2 border-l-4 border-r-4 border-gray-300">
                <div class="w-1/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">
                    ' . $products[$i]['id'] . '
                </div>
                <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">
                    ' . $products[$i]['name'] . '
                </div>    
                <div class="w-1/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">
                    ' . $products[$i]['stock'] . '
                </div> 
                <div class="w-1/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">
                    ' . $products[$i]['mrp'] . '
                </div>
                <div class="w-1/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">
                    ' . $products[$i]['price'] . '
                </div>
                <img src="' . $products[$i]['image'] . '" class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight"/>  
                <div class="w-1/12 flex items-center justify-end px-3">
                    <a href="edit.php?id=' . $products[$i]['id'] . '" title="Edit">
                        <svg class="h-6 w-6 fill-current text-green-600" aria-hidden="true" focusable="false"
                            data-prefix="fas" data-icon="pen-square" class="svg-inline--fa fa-pen-square fa-w-14" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor"
                                d="M400 480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48v352c0 26.5-21.5 48-48 48zM238.1 177.9L102.4 313.6l-6.3 57.1c-.8 7.6 5.6 14.1 13.3 13.3l57.1-6.3L302.2 242c2.3-2.3 2.3-6.1 0-8.5L246.7 178c-2.5-2.4-6.3-2.4-8.6-.1zM345 165.1L314.9 135c-9.4-9.4-24.6-9.4-33.9 0l-23.1 23.1c-2.3 2.3-2.3 6.1 0 8.5l55.5 55.5c2.3 2.3 6.1 2.3 8.5 0L345 199c9.3-9.3 9.3-24.5 0-33.9z">
                            </path>
                        </svg>
                    </a>
                    <form action="" method="DELETE" class="inline-flex ml-1">
                        <input type="number" value="' . $products[$i]['id'] . '" class="hidden"/>
                        <button type="submit" class="bg-red-600 block p-1 border border-red-600 rounded-sm" title="Delete">
                            <svg class="h-3 w-3 fill-current text-gray-100" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="trash" class="svg-inline--fa fa-trash fa-w-14" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="currentColor"
                                    d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z">
                                </path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>';
        } ?>
    </div>

</section>
<?php require_once('../footer.php') ?>