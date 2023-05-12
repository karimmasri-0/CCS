<?php require_once('header.php') ?>
<section class="mx-12 md:mx-20 md:mx-32 my-5">
    <h1 class="text-3xl uppercase font-semibold ">Profile</h1>
    <div class="md:flex lg:mx-12 mt-12 md:justify-between">
        <form action="POST" class="w-full md:w-2/3 lg:w-2/5">
            <div class="relative w-full mb-3">
                <label class="text-gray-400 block uppercase text-xs font-bold mb-2" id="emailLabel"
                    for="username">Username</label>
                <input type="text" value="current username" id="username" name="username" readonly
                    class="text-gray-400 border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring focus:ring-[#00a2d9] w-full ease-linear transition-all duration-150"
                    placeholder="Username">
                <svg class="absolute right-3 top-9 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
            </div>
            <div class="relative w-full mb-3">
                <label class="text-gray-400 block uppercase text-xs font-bold mb-2" id="usernameLabel"
                    for="email">Email</label>
                <input type="email" value="current email" id="email" name="email" readonly
                    class=" text-gray-400 border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring focus:ring-[#00a2d9] w-full ease-linear transition-all duration-150"
                    placeholder="Email">
                <svg class="absolute right-3 top-9 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="20"
                    height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign">
                    <circle cx="12" cy="12" r="4"></circle>
                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                </svg>
            </div>
            <button id="submitButton" type="submit"
                class="hidden w-full py-2 uppercase text-white bg-[#00a2d9] mt-5 rounded shadow-md hover:shadow-lg">Submit</button>
        </form>
        <div class="text-center flex flex-col items-center space-y-3 mt-8 w-full md:w-fit">
            <button href="profile-edit.php" onclick="goToEditProfile()"
                class="w-full md:w-fit text-white bg-green-400 shadow-md hover:shadow-lg focus:opacity-[0.85] px-8 py-2 rounded">
                Edit
            </button>
            <a href="password-change.php" class="text-sm mt-2 cursor-pointer text-[#00a2d9] hover:underline">
                Change password?
            </a>
        </div>
    </div>
</section>
<script>
    const goToEditProfile = () => {
        const email = document.getElementById('email');
        const username = document.getElementById('username');
        const emailLabel = document.getElementById('emailLabel');
        const usernameLabel = document.getElementById('usernameLabel');
        const submitButton = document.getElementById('submitButton')
        if (email.readOnly === true && username.readOnly === true) {
            email.classList.remove('text-gray-400');
            email.classList.add('text-gray-900');
            emailLabel.classList.remove('text-gray-400');
            emailLabel.classList.add('text-gray-900');
            email.readOnly = false;
            username.classList.remove('text-gray-400');
            username.classList.add('text-gray-900');
            usernameLabel.classList.remove('text-gray-400');
            usernameLabel.classList.add('text-gray-900');
            username.readOnly = false;
            submitButton.classList.toggle('hidden');
        } else {
            email.classList.add('text-gray-400');
            email.classList.remove('text-gray-900');
            emailLabel.classList.add('text-gray-400');
            emailLabel.classList.remove('text-gray-900');
            email.readOnly = true;
            username.classList.add('text-gray-400');
            username.classList.remove('text-gray-900');
            usernameLabel.classList.add('text-gray-400');
            usernameLabel.classList.remove('text-gray-900');
            username.readOnly = true;
            submitButton.classList.toggle('hidden');
        }
    }
</script>
<?php require_once('footer.php') ?>