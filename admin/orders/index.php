<?php require_once('../top-layout.php');
$orders = [
    ['id' => 1, 'date' => date('Y-m-j H:i:s'), 'address' => 'Random Address', 'payment_type' => 'COD', 'payment_status' => 'Pending', 'order_status' => 'Pending'],
    ['id' => 2, 'date' => date('Y-m-j H:i:s'), 'address' => 'Random Address', 'payment_type' => 'COD', 'payment_status' => 'Pending', 'order_status' => 'Pending'],
    ['id' => 3, 'date' => date('Y-m-j H:i:s'), 'address' => 'Random Address', 'payment_type' => 'COD', 'payment_status' => 'Pending', 'order_status' => 'Pending'],
    ['id' => 4, 'date' => date('Y-m-j H:i:s'), 'address' => 'Random Address', 'payment_type' => 'Payu', 'payment_status' => 'Pending', 'order_status' => 'Pending'],
    ['id' => 7, 'date' => date('Y-m-j H:i:s'), 'address' => 'Random Address', 'payment_type' => 'COD', 'payment_status' => 'Pending', 'order_status' => 'Pending'],
]; ?>
<section>
    <h2 class="text-gray-700 uppercase font-bold">Orders</h2>
    <div class="mt-8 bg-white rounded border-b-4 border-gray-300">
        <div
            class="flex flex-wrap items-center uppercase text-sm justify-around font-semibold bg-gray-400 text-white rounded-tl rounded-tr">
            <div class="w-1/12 px-4 py-3">#</div>
            <div class="w-2/12 px-4 py-3">Date</div>
            <div class="w-3/12 px-4 py-3">Address</div>
            <div class="w-2/12 px-4 py-3">Payment Type</div>
            <div class="w-2/12 px-4 py-3">Payment Status</div>
            <div class="w-2/12 px-4 py-3">Order Status</div>
        </div>
        <?php
        for ($i = 0; $i < count($orders); $i++) {
            echo '
            <div class="flex flex-wrap  justify-around items-center text-gray-700 border-t-2 border-l-4 border-r-4 border-gray-300">
                <div class="w-1/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">
                    ' . $orders[$i]['id'] . '
                </div>
                <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">
                    ' . $orders[$i]['date'] . '
                </div>    
                <div class="w-3/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">
                    ' . $orders[$i]['address'] . '
                </div> 
                <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">
                    ' . $orders[$i]['payment_type'] . '
                </div>
                <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">
                    ' . $orders[$i]['payment_status'] . '
                </div>
                <div class="w-2/12 px-4 py-3 text-sm font-semibold flex items-center gap-2 text-gray-600 tracking-tight">
                    <div>' . $orders[$i]['order_status'] . '</div>
                    <form action="" method="POST">
                        <button type="submit" class="bg-cyan-500 text-white rounded-lg p-2">Activate</button>
                    </form>
                </div>  
            </div>';
        } ?>
    </div>

</section>
<?php require_once('../footer.php') ?>