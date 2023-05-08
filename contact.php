<?php
require_once('header.php'); ?>
<div class="mx-10 lg:mx-40 pt-5">
    <div class="mt-12 flex items-center flex-wrap md:flex-nowrap justify-center gap-6">
        <div class="h-[24rem] w-[24rem] lg:h-[28rem] lg:w-[28rem] z-10 " id="map"></div>
        <div class="space-y-8">
            <span class=" uppercase text-xl ">Contact us</span>
            <div class=" grid grid-rows-3 gap-6">
                <div class="row-span-1 flex flex-row items-center w-full bg-gray-200 ">
                    <div class="p-8 bg-[#00a2d9]">
                        <svg width="24" height="24" viewBox="0 0 1024 1024" fill="white" class="icon" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M512 1012.8c-253.6 0-511.2-54.4-511.2-158.4 0-92.8 198.4-131.2 283.2-143.2h3.2c12 0 22.4 8.8 24 20.8 0.8 6.4-0.8 12.8-4.8 17.6-4 4.8-9.6 8.8-16 9.6-176.8 25.6-242.4 72-242.4 96 0 44.8 180.8 110.4 463.2 110.4s463.2-65.6 463.2-110.4c0-24-66.4-70.4-244.8-96-6.4-0.8-12-4-16-9.6-4-4.8-5.6-11.2-4.8-17.6 1.6-12 12-20.8 24-20.8h3.2c85.6 12 285.6 50.4 285.6 143.2 0.8 103.2-256 158.4-509.6 158.4z m-16.8-169.6c-12-11.2-288.8-272.8-288.8-529.6 0-168 136.8-304.8 304.8-304.8S816 145.6 816 313.6c0 249.6-276.8 517.6-288.8 528.8l-16 16-16-15.2zM512 56.8c-141.6 0-256.8 115.2-256.8 256.8 0 200.8 196 416 256.8 477.6 61.6-63.2 257.6-282.4 257.6-477.6C768.8 172.8 653.6 56.8 512 56.8z m0 392.8c-80 0-144.8-64.8-144.8-144.8S432 160 512 160c80 0 144.8 64.8 144.8 144.8 0 80-64.8 144.8-144.8 144.8zM512 208c-53.6 0-96.8 43.2-96.8 96.8S458.4 401.6 512 401.6c53.6 0 96.8-43.2 96.8-96.8S564.8 208 512 208z" />
                        </svg>
                    </div>
                    <div class="px-6">
                        <div class="uppercase text-gray-900">Our Address</div>
                        <div class="text-gray-400">666 5th ave New York</div>
                    </div>
                </div>

                <div class="row-span-1 flex flex-row items-center w-full bg-gray-200 ">
                    <div class="p-8 bg-[#00a2d9]">
                        <svg height="24px" fill="white" width="24px" version="1.1" id="_x32_"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve">
                            <g>
                                <path class="st0" d="M255.998,119.997c19.149,0,34.664-15.515,34.664-34.664c0-19.148-15.515-34.664-34.664-34.664
        c-19.148,0-34.664,15.516-34.664,34.664C221.334,104.482,236.85,119.997,255.998,119.997z" />
                                <path class="st0" d="M136.249,326.34c-8.422,0-13.437,4.266-15.828,11.172c-1,3.141-1.5,7.413-1.5,19.593
        c0,12.062,0.5,16.453,1.5,19.594c2.39,6.914,7.406,11.188,15.828,11.188c8.546,0,13.562-4.274,15.953-11.188
        c1-3.141,1.5-7.531,1.5-19.594c0-12.18-0.5-16.452-1.5-19.593C149.812,330.605,144.796,326.34,136.249,326.34z" />
                                <path class="st0" d="M468.907,237.332h-84.015l-81.917-133.116c-3.297,8.172-8.656,15.281-15.446,20.703l69.176,112.413H155.288
        l69.179-112.413c-6.789-5.422-12.148-12.531-15.445-20.703l-81.914,133.116H43.086C19.29,237.332,0,256.622,0,280.418v137.827
        c0,23.797,19.29,43.085,43.086,43.085h425.821c23.797,0,43.093-19.288,43.093-43.085V280.418
        C512,256.622,492.704,237.332,468.907,237.332z M166.515,380.597c-4.39,13.57-15.438,20.601-30.266,20.601
        c-14.703,0-25.75-7.031-30.14-20.601c-1.766-5.273-2.266-10.046-2.266-23.492c0-13.438,0.5-18.211,2.266-23.484
        c4.39-13.563,15.438-20.602,30.14-20.602c14.828,0,25.875,7.038,30.266,20.602c1.766,5.273,2.266,10.046,2.266,23.484
        C168.78,370.55,168.28,375.324,166.515,380.597z M220.936,367.534h-17.703c-0.515,0-0.766,0.25-0.766,0.758v30.265
        c0,0.75-0.5,1.258-1.25,1.258h-12.313c-0.75,0-1.25-0.508-1.25-1.258v-82.905c0-0.75,0.5-1.25,1.25-1.25h32.031
        c16.578,0,28.14,10.672,28.14,26.5C249.076,356.855,237.514,367.534,220.936,367.534z M321.31,326.464c0,0.75-0.5,1.25-1.25,1.25
        h-39.187c-0.516,0-0.766,0.25-0.766,0.75v20.86c0,0.5,0.25,0.75,0.766,0.75h33.031c0.75,0,1.25,0.5,1.25,1.258v10.805
        c0,0.75-0.5,1.25-1.25,1.25h-33.031c-0.516,0-0.766,0.25-0.766,0.758v21.602c0,0.5,0.25,0.75,0.766,0.75h39.187
        c0.75,0,1.25,0.508,1.25,1.266v10.796c0,0.75-0.5,1.258-1.25,1.258h-53.515c-0.75,0-1.25-0.508-1.25-1.258v-82.905
        c0-0.75,0.5-1.25,1.25-1.25h53.515c0.75,0,1.25,0.5,1.25,1.25V326.464z M403.11,398.557c0,0.75-0.5,1.258-1.25,1.258h-11.436
        c-1,0-1.626-0.375-2.141-1.258l-34.906-58.78h-0.516v58.78c0,0.75-0.5,1.258-1.25,1.258h-10.922c-0.766,0-1.266-0.508-1.266-1.258
        v-82.905c0-0.75,0.5-1.25,1.266-1.25h11.546c1,0,1.641,0.375,2.141,1.25l34.797,58.921h0.5v-58.921c0-0.75,0.5-1.25,1.25-1.25
        h10.937c0.75,0,1.25,0.5,1.25,1.25V398.557z" />
                                <path class="st0" d="M220.061,327.715h-16.828c-0.515,0-0.766,0.25-0.766,0.75v24.875c0,0.5,0.25,0.75,0.766,0.75h16.828
        c8.782,0,14.188-5.266,14.188-13.188C234.249,333.121,228.842,327.715,220.061,327.715z" />
                            </g>
                        </svg>
                    </div>
                    <div class="px-6">
                        <div class="uppercase text-gray-900">Opening Hours</div>
                        <div class="text-gray-400">10am - 8pm Weekdays</div>
                    </div>
                </div>
                <div class="row-span-1 flex flex-row items-center w-full bg-gray-200 ">
                    <div class="p-8 bg-[#00a2d9]">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="white"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15 3C16.5315 3.17014 17.9097 3.91107 19 5C20.0903 6.08893 20.8279 7.46869 21 9M14.5 6.5C15.2372 6.64382 15.9689 6.96892 16.5 7.5C17.0311 8.03108 17.3562 8.76284 17.5 9.5M8.20049 15.799C1.3025 8.90022 2.28338 5.74115 3.01055 4.72316C3.10396 4.55862 5.40647 1.11188 7.87459 3.13407C14.0008 8.17945 6.5 8 11.3894 12.6113C16.2788 17.2226 15.8214 9.99995 20.8659 16.1249C22.8882 18.594 19.4413 20.8964 19.2778 20.9888C18.2598 21.717 15.0995 22.6978 8.20049 15.799Z" />
                        </svg>
                    </div>
                    <div class="px-6">
                        <div class="uppercase text-gray-900">Phone Number</div>
                        <div class="text-gray-400">06 060 060</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form class="mt-28" action="" method="post">
        <h2 class="text-xl uppercase my-8 font-bold">Send us an Email</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <input class="px-6 py-4 bg-gray-200 placeholder:text-gray-500" type="text" placeholder="Your Name*" />
            <input class="px-6 py-4 bg-gray-200 placeholder:text-gray-500" type="email" placeholder="Your Email*" />
            <input class="px-6 py-4 bg-gray-200 placeholder:text-gray-500" type="tel" placeholder="Your Phone number" />
        </div>
        <textarea class="bg-gray-200 w-full my-4 px-6 py-4 h-44 placeholder:text-gray-500" placeholder="Your Message*"
            aria-multiline="true"></textarea>
        <button type="submit" class="px-4 py-2 bg-[#00a2d9] text-sm font-bold text-white mt-4 uppercase">Send
            Message</button>
    </form>
</div>
<script>
    var map = L.map('map').setView([34.4367, 35.8344], 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
    var marker = L.marker([34.4367, 35.8344]).addTo(map);
    marker.bindPopup("<b>We'd be more than happy if you give us a visit.</b>").openPopup();
</script>
<?php require_once('footer.php');
?>