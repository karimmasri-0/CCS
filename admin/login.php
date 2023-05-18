<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCS Dashboard</title>
</head>

<body>

    <section class="mt-20">
        <div class="w-full lg:w-4/12 px-4 mx-auto pt-6">

            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
                <div class="-z-10 absolute flex overflow-hidden">
                    <img src="../images/tools.png" class="object-cover w-20" />
                    <img src="../images/tools.png" class="object-cover w-20" />
                    <img src="../images/tools.png" class="object-cover w-20" />
                    <img src="../images/tools.png" class="object-cover w-20" />
                    <img src="../images/tools.png" class="object-cover w-20" />
                    <img src="../images/tools.png" class="object-cover w-20" />
                    <img src="../images/tools.png" class="object-cover w-20" />
                    <img src="../images/tools.png" class="object-cover w-20" />
                    <img src="../images/tools.png" class="object-cover w-20" />
                    <img src="../images/tools.png" class="object-cover w-20" />
                    <img src="../images/tools.png" class="object-cover w-20" />
                    <img src="../images/tools.png" class="object-cover w-20" />
                    <img src="../images/tools.png" class="object-cover w-20" />
                    <img src="../images/tools.png" class="object-cover w-20" />
                </div>
                <div class="rounded-t mb-0 px-6 py-6">
                </div>
                <div class="relative flex-auto px-4 lg:px-10 py-10 pt-0">
                    <h1 class="bg-white rounded-lg px-3 py-1 w-fit mb-5 text-2xl text-[#00a2d9] font-bold">
                        Admin Dashboard
                    </h1>
                    <form>
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                for="grid-password">Email</label>
                            <input type="email"
                                class="border-0 px-3 py-3 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring focus:ring-[#00a2d9] w-full ease-linear transition-all duration-150"
                                placeholder="Email">
                            <svg class="absolute right-3 top-9 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-at-sign">
                                <circle cx="12" cy="12" r="4"></circle>
                                <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                            </svg>
                        </div>
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-xs font-bold mb-2" for="grid-password">Password</label>
                            <input type="password"
                                class="border-0 px-3 py-3 placeholder-blueGray-300  bg-white rounded text-sm shadow focus:outline-none focus:ring focus:ring-[#00a2d9] w-full ease-linear transition-all duration-150"
                                placeholder="Password">
                            <svg class="absolute right-3 top-9 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-lock">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                        </div>
                        <div>
                            <label class="inline-flex items-center cursor-pointer"><input id="customCheckLogin"
                                    type="checkbox"
                                    class="form-checkbox border-0 rounded text-[#00a2d9] ml-1 w-5 h-5 ease-linear transition-all duration-150"><span
                                    class="ml-2 text-sm font-semibold text-blueGray-600">Remember me</span></label>
                        </div>
                        <div class="text-center mt-6">
                            <button
                                class="bg-[#00a2d9] text-white active:bg-[#00a2d9] text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                                type="button"> Submit </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>