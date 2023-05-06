<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        CCS I 🏗️
    </title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <style>
        @keyframes fade-in {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .animate-fade-in {
            animation-name: fade-in;
            animation-duration: 0.8s;
            animation-fill-mode: forwards;
        }

        #side-menu {
            position: fixed;
            top: 0;
            right: -200px;
            width: 200px;
            height: 100%;
            background-color: #fff;
            transition: all 0.3s ease-in-out;
        }

        #side-menu.show {
            right: 0;
        }
    </style>
</head>

<body class="caret-[#00a2d9]">
    <header class="fixed w-full z-10 bg-white py-4 border-b px-12 lg:px-20 flex items-center justify-between">
        <div class="flex items-center gap-14">
            <img class=" w-16" src="logo.png" alt=" logo" />

            <div class="hidden md:block transition-all relative bg-[#00a2d9]">
                <button id="dropdown-button" class=" gap-1 font-bold py-2 px-4 rounded inline-flex items-center">
                    <span class="text-lg text-white">Categories</span>
                    <svg class="w-5 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-list">
                        <line x1="8" y1="6" x2="21" y2="6"></line>
                        <line x1="8" y1="12" x2="21" y2="12"></line>
                        <line x1="8" y1="18" x2="21" y2="18"></line>
                        <line x1="3" y1="6" x2="3.01" y2="6"></line>
                        <line x1="3" y1="12" x2="3.01" y2="12"></line>
                        <line x1="3" y1="18" x2="3.01" y2="18"></line>
                    </svg>
                </button>
                <div id="dropdown-menu" class="dropdown-menu absolute z-10 hidden bg-black text-white py-2 w-full">
                    <a href="#" class="block px-4 py-2 hover:bg-[#00a2d9]/40">Option 1</a>
                    <a href="#" class="block px-4 py-2 hover:bg-[#00a2d9]/40">Option 2</a>
                    <a href="#" class="block px-4 py-2 hover:bg-[#00a2d9]/40">Option 3</a>
                </div>
            </div>

        </div>





        <div id='searchField' class=' hidden '>
            <form class=" absolute top-1/2 right-1/2 translate-y-[50%] translate-x-[50%]">
                <svg class=" absolute top-3 w-5 ml-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-search">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <input type="search" id="search" placeholder="Search..."
                    class=" pl-8 placeholder:italic bg-gray-300 outline-none rounded p-3 w-72" />
                <button type="submit"
                    class=" absolute right-1 bottom-1 bg-[#00a2d9] text-white px-4 py-2 rounded gap-1 flex items-center">
                    Search
                </button>
            </form>
        </div>
        <nav class=" flex items-center gap-4">
            <form class="hidden sm:block relative">
                <svg class=" absolute top-3 w-5 ml-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-search">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <input type="search" id="search" placeholder="Search..."
                    class=" pl-8 placeholder:italic bg-gray-200 outline-none rounded p-3 w-72" />
                <button type="submit"
                    class=" absolute right-1 bottom-1 bg-[#00a2d9] text-white px-4 py-2 rounded gap-1 flex items-center">
                    Search
                </button>
            </form>
            <button class=" flex items-center sm:hidden p-2 text-white rounded bg-[#00a2d9]" id='searchButton'>
                <svg class="mx-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-search">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </button>
            <a class="hidden lg:block transition-all cursor-pointer px-4 py-2 hover:bg-[#00a2d9] hover:text-white hover:shadow-md"
                href="home.php">Home</a>
            <a class="hidden lg:block transition-all cursor-pointer px-4 py-2 hover:bg-[#00a2d9] hover:text-white hover:shadow-md"
                href="about-us.php">About
                us</a>
            <a class="hidden lg:block transition-all cursor-pointer px-4 py-2 hover:bg-[#00a2d9] hover:text-white hover:shadow-md"
                href="contact.php">Contact</a>

            <a href="" class='hidden lg:block'>
                <span class="hover:shadow rounded-full p-2 transition-all relative inline-flex ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-shopping-bag">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>

                    </svg>
                    <span class="relative flex absolute h-3 w-3 top-0 right-0 -mt-1 -mr-1">
                        <sup class="absolute -top-1 right-0.5 text-sm text-white z-10">0</sup> <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-sky-500"></span>
                    </span>
                </span>
            </a>
            <button id='menu'>

            </button>

            <button
                class="flex items-center px-3 py-2 border rounded text-[#00a2d9] border-[#00a2d9] hover:text-black hover:border-black transition-all"
                id="menu-button"> <svg class="fill-current h-3 w-3" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg></button>
            <div id="side-menu" class="relative">
                <button id="closeMenu" class="absolute z-10 top-2 right-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
                <a class="mt-8 block transition-all cursor-pointer px-4 py-2 hover:bg-[#00a2d9] hover:text-white hover:shadow-md"
                    href="home.php">Home</a>
                <a class="block transition-all cursor-pointer px-4 py-2 hover:bg-[#00a2d9] hover:text-white hover:shadow-md"
                    href="about-us.php">About
                    us</a>
                <a class="block transition-all cursor-pointer px-4 py-2 hover:bg-[#00a2d9] hover:text-white hover:shadow-md"
                    href="contact.php">Contact</a>
            </div>

        </nav>
        <!-- <div class="flex items-center gap-4">
            <a class=" hover:underline cursor-pointer">Login</a>
            <button
                class="px-4 py-2 rounded-md bg-pink-500 text-white shadow-md shadow-blue/20 hover:shadow-blue/80 hover:shadow-lg">Sign
                up</button>
        </div> -->


        <script>
            const dropdownButton = document.querySelector('#dropdown-button');
            const dropdownMenu = document.querySelector('#dropdown-menu');
            const searchButton = document.querySelector('#searchButton');
            const searchField = document.querySelector('#searchField');

            dropdownButton.addEventListener('click', function () {
                dropdownMenu.classList.toggle('hidden');
            });
            searchButton.addEventListener('click', function () {
                searchField.classList.toggle('hidden');
                searchField.classList.toggle('animate-fade-in');
            });

            const menuButton = document.getElementById('menu-button');
            const sideMenu = document.getElementById('side-menu');
            const closeMenu = document.getElementById('closeMenu');

            menuButton.addEventListener('click', function () {
                sideMenu.classList.add('show');
            });
            closeMenu.addEventListener('click', function () {
                sideMenu.classList.remove('show');
            });

        </script>


    </header>
    <main class=" py-24 py-16 min-h-[100vh] bg-gray-100/50">
        <div class="bg-gray-200 flex items-center">
            <img src="images/test1.png" class="w-24 sm:w-44" />
            <img src="images/test1.png" class="hidden sm:block w-44" />
            <h2 class="text-xl font-semibold ml-6 sm:ml-20">Home > Contact Us</h2>
        </div>