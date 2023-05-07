<?php
require_once('header.php'); ?>

<div class="pt-8 mx-4 md:mx-8 lg:mx-12">
    <div class="my-16">
        <h2 class="uppercase text-xl font-semibold text-center my-10">Newest Collection</h2>
        <div
            class="snap-x px-3 sm:px-12 md:px-16 flex items-center gap-2 lg:gap-8 overflow-x-scroll overflow-y-hidden py-10">
            <?php for ($i = 0; $i < 7; $i++) { ?>
                <div class="snap-center group relative p-4 py-12 rounded border-2 border-[#00a2d9] w-64 flex-none">
                    <div class="grid place-items-center">
                        <img src="images/hammer.jpg" class="w-32 text-center" />
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
            <?php } ?>
        </div>
    </div>
    <div>
        <h2 class="uppercase text-xl font-semibold text-center sm:text-left">Services Highlights</h2>
        <div class="grid  md:grid-cols-4 lg:grid-cols-6 mx-16 gap-4 my-10">
            <div class="flex flex-col items-center p-8 rounded shadow hover:shadow-lg transition-all">
                <img class="w-24" src="images/cash.png" />
                <span class="mt-4 text-gray-600 text-sm  text-center">Cash on Delivery</span>

            </div>
            <div class="flex flex-col items-center p-8 rounded shadow hover:shadow-lg transition-all">
                <img class="w-24" src="images/repair.png" />
                <span class="mt-4 text-gray-600 text-sm text-center">1 year Warrantly</span>
            </div>
            <div class="flex flex-col items-center p-8 rounded shadow hover:shadow-lg transition-all">
                <img class="w-24" src="images/chat.png" />
                <span class="mt-4 text-gray-600 text-sm text-center">Active chat</span>
            </div>
            <div class="flex flex-col items-center p-8 rounded shadow hover:shadow-lg transition-all">
                <img class="w-24" src="images/exchange.png" />
                <span class="mt-4 text-gray-600 text-sm text-center">Exchange & Return</span>
            </div>
            <div
                class="flex flex-col items-center p-8 rounded shadow hover:shadow-lg md:col-start-2 lg:col-start-5 transition-all">
                <img class="w-24" src="images/delivery.png" />
                <span class="mt-4 text-gray-600 text-sm text-center">Free Delivery</span>
            </div>
            <div class="flex flex-col items-center p-8 rounded shadow hover:shadow-lg  transition-all">
                <img class="w-24" src="images/trusted.png" />
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