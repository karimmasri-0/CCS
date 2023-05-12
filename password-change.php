<?php require_once('header.php') ?>
<section class="mx-12 md:mx-20 md:mx-32 my-5">
    <h1 class="text-3xl uppercase font-semibold ">Passowrd Change</h1>
    <div class=" lg:mx-12 mt-12 ">
        <form action="POST" class="w-full md:w-2/3 lg:w-2/5">
            <div class="relative w-full mb-3">
                <label class="text-gray-900 block uppercase text-xs font-bold mb-2" for="old_password">Password</label>
                <input type="text" id="old_password" name="old_password"
                    class="text-gray-900 border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring focus:ring-[#00a2d9] w-full ease-linear transition-all duration-150"
                    placeholder="Current Password">
                <svg class="absolute right-3 top-9 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="20"
                    height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>
            </div>
            <div class="relative w-full mb-3">
                <label class="text-gray-900 block uppercase text-xs font-bold mb-2" for="new_password">New
                    Password</label>
                <input type="password" id="new_password" name="new_password"
                    class=" text-gray-900 border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring focus:ring-[#00a2d9] w-full ease-linear transition-all duration-150"
                    placeholder="New Password">
                <svg class="absolute right-3 top-9 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="20"
                    height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>
            </div>
            <div class="relative w-full mb-3">
                <label class="text-gray-900 block uppercase text-xs font-bold mb-2" for="confirm_new_password">
                    Confirm New Password</label>
                <input type="password" id="consfirm_new_password" name="confirm_new_password"
                    class=" text-gray-900 border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring focus:ring-[#00a2d9] w-full ease-linear transition-all duration-150"
                    placeholder="Confirm New Password">
                <svg class="absolute right-3 top-9 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="20"
                    height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>
            </div>
            <button type="submit"
                class="w-full py-2 uppercase text-white bg-[#00a2d9] mt-5 rounded shadow-md hover:shadow-lg">Submit</button>
        </form>

    </div>
</section>
<script>

</script>
<?php require_once('footer.php') ?>