<?php require_once('header.php');
$title = "Fiberglass Claw Hammer Pittsburgh 16 Oz. Shock";
$price_old = 40;
$price_new = 39.99;
$img = 'images/hammer.jpg'
    ?>
<div class="mx-16 mt-8">
    <div class="text-2xl my-4 ">
        <?= $title ?>
    </div>
    <div class="grid lg:grid-cols-5 gap-8">
        <div class="lg:col-span-3 bg-white">
            <img src=<?= $img ?> alt="product" class=" w-[42rem]" />
        </div>
        <div class="lg:col-span-2 w-full bg-white px-4 py-6">
            <div class="flex justify-between items-center">
                <div class="text-green-400">In stock</div>
                <div class="text-right">
                    <del class=" text-xl line-through text-gray-400 ">
                        <?= '$' . $price_old ?>
                    </del>
                    <div class=" text-3xl text-[#00a2d9] font-semibold">
                        <?= '$' . $price_new ?>
                    </div>
                </div>
            </div>
            <div class="rounded bg-[#00a2d9]/20 p-6 mt-5 text-gray-500 flex justify-between items-center">
                <div>Save

                    <?= '$' . number_format($price_old - $price_new, 2) ?>
                </div>
                <div>Offer valid till 18 May</div>
            </div>

            <div class="my-8 border-y py-3">
                <h3 class="text-xl uppercase font-semibold">Specifications</h3>
                <table class="mx-4">
                    <tr>
                        <td> Manufacturer</td>
                        <td>Pittsburgh</td>
                    </tr>
                    <tr>
                        <td> Part Number</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td> Item Weight</td>
                        <td>1 pounds</td>
                    </tr>
                    <tr>
                        <td> Package Dimensions</td>
                        <td>13.5 x 7 x 2.4 inches</td>
                    </tr>
                    <tr>
                        <td> Item model number</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td> Color</td>
                        <td>Multicolor</td>
                    </tr>
                    <tr>
                        <td> Style</td>
                        <td>Heavy Duty</td>
                    </tr>
                    <tr>
                        <td> Item Package Quantity</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td> Head Style</td>
                        <td>Flat</td>
                    </tr>
                    <tr>
                        <td> Handle Material</td>
                        <td>Alloy Steel</td>
                    </tr>

                </table>
            </div>
            <button class="mt-3 w-full bg-[#00a2d9] text-white px-4 py-2">Add to cart</button>
        </div>
    </div>
    <div class="bg-white p-10 md:p-16 lg:px-28 mt-16">
        <div class=" text-2xl uppercase font-semibold">Description</div>
        <p class="mt-4">Introducing our high-quality hammer, designed to tackle any job with ease. Featuring a sturdy
            steel
            construction and a comfortable grip, this hammer is perfect for both professionals and DIY enthusiasts
            alike. Its versatile design allows you to drive nails, break apart objects, and shape and bend metal with
            precision and efficiency. Whether you're working on a construction site, or just completing a project at
            home, our hammer is the reliable and durable tool that you need to get the job done right.</p>
    </div>
</div>
<?php require_once('footer.php') ?>