<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://unpkg.com/simplebar@5.3.0/dist/simplebar.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @vite('resources/css/app.css')
    <title>Menu Edit</title>
</head>

<body>

    <div id="header" x-data="{ isOpen: false }" class="fixed rounded-b-2xl border-x-2 border-b-2 border-orange-300  bg-orange-700  justify-center z-40 w-[100%] md:hidden flex items-center flex-col">

        <button @click="isOpen = !isOpen" type="submit" class="w-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 my-2 text-orange-300 lg:hidden mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>


        <div class="w-full">

            <div class="w-full h-2 bg-gradient-to-t from-orange-300" x-show="isOpen" @click.away=" isOpen = false">
            </div>

            <div class="flex left-0 w-full px-3 pt-4 pb-6 bg-orange-300 rounded-b-xl" x-show="isOpen" @click.away=" isOpen = false">
                <div class="flex flex-col space-y-4 w-full items-center">
                    <a class="text-orange-700 font-averialibre cursor-pointer text-2xl" href="/">SIGN IN</a>
                    <a class="text-orange-700 font-averialibre cursor-pointer text-2xl" href="{{ route('order-status') }}">Order Status</a>
                    <a class="text-orange-700 font-averialibre cursor-pointer text-2xl" href="{{ route('franchise-status') }}">Franchise Status</a>
                    <a class="text-orange-700 font-averialibre cursor-pointer text-2xl" href="{{ route('menu-edit') }}">Menu Edit</a>
                    <a class="text-orange-700 font-averialibre cursor-pointer text-2xl" href="{{ route('franchise-edit') }}">Franchise Edit</a>
                    <a class="text-orange-700 font-averialibre cursor-pointer text-2xl" href="/">Log Out</a>
                </div>
            </div>

        </div>

    </div>

    <!-- component -->
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
        <div class="fixed flex-col top-0 left-0 w-64 bg-[#E16F25] h-full md:flex hidden">
            <div class="flex items-center justify-center h-14 mb-4 mt-4 ">
                <img class="object-cover h-16" src="/images/logo.webp" alt="Logo">
            </div>
            <div class="flex items-center justify-center h-14">
                <button href="" class="bg-orange-300 rounded-3xl border-[2.037px] border-solid border-yellow-800 flex items-center">
                    <div class="w-7 flex items-center justify-center mx-1 mt-1 mb-1">
                        <img class="object-cover invert" src="/images/avatar.webp" alt="Logo">
                    </div>
                    <p class="text-orange-800 font-averialibre text-2md mx-3 hover:text-[#F1A03C] ">Log in / Sign Up</p>
                </button>
            </div>
            <div class="overflow-y-auto overflow-x-hidden flex-grow">
                <ul class="flex flex-col py-4 space-y-1 bg-[#F1A03C]">
                    <li>
                        <a href="{{ route('dashboard') }}" class="relative flex flex-row items-center h-11 focus:outline-none border-l-4 border-transparent pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <!-- <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg> -->
                            </span>
                            <span class="ml-2 text-2md tracking-wide truncate font-averialibre {{ Request::is('dashboard') ? 'text-white font-bold' : 'text-orange-800' }}">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('order-status') }}" class="relative flex flex-row items-center h-11 focus:outline-none border-l-4 border-transparent pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <!-- <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg> -->
                            </span>
                            <span class="ml-2 text-2md tracking-wide truncate font-averialibre {{ Request::is('dashboard/order-status') ? 'text-white font-bold' : 'text-orange-800' }}">Order Status</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('franchise-status') }}" class="relative flex flex-row items-center h-11 focus:outline-none  border-l-4 border-transparent pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <!-- <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                </svg> -->
                            </span>
                            <span class="ml-2 text-2md tracking-wide truncate font-averialibre {{ Request::is('dashboard/franchise-status') ? 'text-white font-bold' : 'text-orange-800' }}">Franchise Status</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('menu-edit') }}" class="relative flex flex-row items-center h-11 focus:outline-none  border-l-4 border-transparent pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <!-- <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                </svg> -->
                            </span>
                            <span class="ml-2 text-2md tracking-wide truncate font-averialibre {{ Request::is('dashboard/menu-edit') ? 'text-white font-bold' : 'text-orange-800' }}">Menu Edit</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('franchise-edit') }}" class="relative flex flex-row items-center h-11 focus:outline-none  border-l-4 border-transparent pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <!-- <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                </svg> -->
                            </span>
                            <span class="ml-2 text-2md tracking-wide truncate font-averialibre {{ Request::is('dashboard/franchise-edit') ? 'text-white font-bold' : 'text-orange-800' }}">Franchise Edit</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none border-l-4 border-transparent pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <!-- <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                </svg> -->
                            </span>
                            <span class="ml-2 text-2md tracking-wide truncate font-averialibre text-orange-800">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="flex-auto min-h-screen bg-[#FFDBA3]">
            <!-- Dummy Content on the Right Sidebar -->
            <div class="ml-0 md:ml-64 md:p-8 p-2 md:pt-0 pt-20">
                <div class="flex-col flex">
                    <div class="col-span-1 text-5xl tracking-wide truncate font-averialibre text-orange-800">Menu Edit</div>
                    <div class="mt-2 flex flex-col md:flex-row gap-3 md:justify-normal justify-center items-center">
                        <div class="w-full md:w-auto">
                            <button class="bg-[#FDED87] rounded-2xl border-solid border-4 border-[#F1A03C] w-full md:w-35 py-2">
                                <a href="{{ route('edit-bulk') }}" class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl text-center">Edit Harga Bulk</a>
                            </button>
                        </div>
                        <div class="w-full md:w-auto">
                            <button class="bg-[#FDED87] rounded-2xl border-solid border-4 border-[#F1A03C] w-full md:w-35 py-2">
                                <a href="{{ route('tambah-series') }}" class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl">Tambah Series</a>
                            </button>
                        </div>
                        <div class="w-full md:w-auto">
                            <button class="bg-[#FDED87] rounded-2xl border-solid border-4 border-[#F1A03C] w-full md:w-35 py-2">
                                <a href="{{ route('tambah-rasa') }}" class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl">Tambah Rasa</a>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="rounded-2xl border-solid border-4 border-[#F1A03C] mt-6 mb-6 bg-[#FAC774] mr-2 simplebar">
                    <ul class="mt-4 mb-4 ml-4 mr-4 space-y-2">
                        <!-- Dummy data, replace with dynamic data in a real application -->
                        <li class="flex justify-between items-center bg-[#FAC774] border-solid border-4 border-orange-700 p-2 rounded-2xl max-w-[1100px] flex-col md:flex-row">
                            <div class="flex items-center">
                                <img class="object-cover h-14 transform scale-x-[-1] -translate-y-2 mt-2" src="/images/ikan.webp" alt="Logo">
                                <span class="ml-2 font-averialibre text-orange-800 text-3xl">Series 1</span>
                            </div>
                            <div class="flex space-x-2">
                                <button type="button" class="text-blue-500">
                                    <p class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl">Edit</p>
                                </button>
                                <button type="button" class="text-red-500">
                                    <p class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl">Delete</p>
                                </button>
                            </div>
                        </li>
                        <li class="flex justify-between items-center bg-[#FAC774] border-solid border-4 border-[#F1A03C] p-2 rounded-2xl max-w-[1000px]  md:ml-24 mx-4 flex-col md:flex-row">
                            <div class="flex items-center">
                                <img class="object-cover h-14 transform scale-x-[-1] -translate-y-2 mt-2" src="/images/ikan.webp" alt="Logo">
                                <span class="ml-2 font-averialibre text-orange-800 text-3xl">rasa 1</span>
                            </div>
                            <div class="flex space-x-2">
                                <button type="button" class="text-blue-500">
                                    <p class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl">Edit</p>
                                </button>
                                <button type="button" class="text-red-500">
                                    <p class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl">Delete</p>
                                </button>
                            </div>
                        </li>
                        <li class="flex justify-between items-center bg-[#FAC774] border-solid border-4 border-[#F1A03C] p-2 rounded-2xl max-w-[1000px]  md:ml-24 mx-4 flex-col md:flex-row">
                            <div class="flex items-center">
                                <img class="object-cover h-14 transform scale-x-[-1] -translate-y-2 mt-2" src="/images/ikan.webp" alt="Logo">
                                <span class="ml-2 font-averialibre text-orange-800 text-3xl">rasa 2</span>
                            </div>
                            <div class="flex space-x-2">
                                <button type="button" class="text-blue-500">
                                    <p class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl">Edit</p>
                                </button>
                                <button type="button" class="text-red-500">
                                    <p class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl">Delete</p>
                                </button>
                            </div>
                        </li>
                        <li class="flex justify-between items-center bg-[#FAC774] border-solid border-4 border-[#F1A03C] p-2 rounded-2xl max-w-[1000px]  md:ml-24 mx-4 flex-col md:flex-row">
                            <div class="flex items-center">
                                <img class="object-cover h-14 transform scale-x-[-1] -translate-y-2 mt-2" src="/images/ikan.webp" alt="Logo">
                                <span class="ml-2 font-averialibre text-orange-800 text-3xl">rasa 3</span>
                            </div>
                            <div class="flex space-x-2">
                                <button type="button" class="text-blue-500">
                                    <p class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl">Edit</p>
                                </button>
                                <button type="button" class="text-red-500">
                                    <p class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl">Delete</p>
                                </button>
                            </div>
                        </li>
                        <li class="flex justify-between items-center bg-[#FAC774] border-solid border-4 border-orange-700 p-2 rounded-2xl max-w-[1100px] flex-col md:flex-row">
                            <div class="flex items-center">
                                <img class="object-cover h-14 transform scale-x-[-1] -translate-y-2 mt-2" src="/images/ikan.webp" alt="Logo">
                                <span class="ml-2 font-averialibre text-orange-800 text-3xl">Series 2</span>
                            </div>
                            <div class="flex space-x-2">
                                <button type="button" class="text-blue-500">
                                    <p class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl">Edit</p>
                                </button>
                                <button type="button" class="text-red-500">
                                    <p class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl">Delete</p>
                                </button>
                            </div>
                        </li>
                        <!-- Add more items as needed -->
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- Include SimpleBar JS -->
    <script src="https://unpkg.com/simplebar@5.3.0/dist/simplebar.min.js"></script>

    <!-- Inisialisasi SimpleBar -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new SimpleBar(document.querySelector('.simplebar'));
        });
    </script>
</body>

</html>