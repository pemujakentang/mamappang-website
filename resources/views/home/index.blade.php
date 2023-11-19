<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @vite('resources/css/app.css')
    <title>pizza?</title>
</head>

<body>
<div class="overflow-y-scroll flex flex-col items-center bg-[#FF6400] overflow-x-hidden relative ">
    <!-- section - home -->
    <div class="h-screen relative">

            <img class="absolute h-96 z-10 -right-56 bottom-10 mt-6 animate-wiggle opacity-70" src="/images/awan.webp" alt="Logo">
            <img class="absolute h-96 z-10 -left-60 -bottom-32 animate-wiggle opacity-70" src="/images/awan.webp" alt="Logo">
            <div class="absolute h-80 z-10 left-20 top-32 animate-move-x">
                <img class="animate-move-y opacity-70 h-80" src="/images/awan.webp" alt="Logo">
            </div>


        <!-- navbar -->
        <div id="navbar" class="flex justify-between w-screen h-16 pt-3 pr-5 items-center z-10 mt-2">
            <div class="w-[10%]flex items-center justify-center z-10">
                <img class="object-cover h-16" src="/images/logo.webp" alt="Logo">
            </div>
            <div class="w-[75%] flex h-full px-10 rounded-full border-2 border-yellow-800 bg-orange-300 items-center justify-between z-10">
                <a href="" class="text-orange-800 font-averialibre hover:font-averialibrebold text-2xl">Home</a>
                <a href="" class="text-orange-800 font-averialibre hover:font-averialibrebold text-2xl">Bulk Order</a>
                <a href="" class="text-orange-800 font-averialibre hover:font-averialibrebold text-2xl">Franchise</a>
                <a href="" class="text-orange-800 font-averialibre hover:font-averialibrebold text-2xl">About Us</a>
                <a href="" class="text-orange-800 font-averialibre hover:font-averialibrebold text-2xl">My Dashboard</a>
            </div>
            <button href="" class="w-[12%] hover:scale-[1.2] duration-75 flex h-full ml-3 rounded-full border-2 border-yellow-800 bg-orange-300 items-center justify-center">
                    <div class="w-8 flex items-center justify-center">
                        <img class="object-cover invert" src="/images/avatar.webp" alt="Logo">
                    </div>
                    <p class="text-orange-800 font-averialibre text-2xl ml-3">Log in</p>
            </button>
        </div>

        <!-- home -->
        <div class="flex flex-col items-center relative">


            <div class="w-[75%] flex items-center justify-center mt-20 z-10">
                <img class="object-cover" src="/images/logo2.webp" alt="Logo">
            </div>

            <div class="flex mt-16  z-10">
                <button href="" class="flex h-14 w-56 rounded-full border-2 border-yellow-800 bg-orange-300 items-center justify-center mx-4 hover:scale-[1.2] duration-75">
                    <p class="text-orange-800 font-averialibre text-2xl">See Our Menu</p>
                    <div class="w-8 flex items-center justify-center ml-1">
                        <img class="object-cover" src="/images/play.webp" alt="Logo">
                    </div>
                </button>
                <button href="" class="flex h-14 w-56 rounded-full border-2 border-yellow-800 bg-orange-300 items-center justify-center mx-4 hover:scale-[1.2] duration-75">
                    <p class="text-orange-800 font-averialibre text-2xl">Franchise Info</p>
                    <div class="w-8 flex items-center justify-center ml-1">
                        <img class="object-cover h-8" src="/images/info.webp" alt="Logo">
                    </div>
                </button>
            </div>
        </div>

        </div>

    <div class="w-full">
        <div class="absolute w-screen z-0 scale-[1.7] lg:-mt-56 md:-mt-48">
            <img class="object-cover animate-spin-slow" src="/images/cahaya.webp" alt="Logo">
        </div>
    </div>

    <!-- section - menu -->
    <div class="w-full flex flex-col items-center z-10" style="background-image: url('/images/background-menu.webp');">
        <p class="text-orange-800 font-averialibre text-5xl mx-auto my-5" style="text-shadow: 4px 4px 4px #FFFFFF, -4px -4px 4px #FFFFFF, 4px -4px 4px #FFFFFF, -4px 4px 4px #FFFFFF;">Our Menu</p>
        <div class="flex flex-row w-[90%] mt-2">
            <div class="w-[50%]">
                <div class="w-[80%] flex items-center justify-center mx-auto mb-4">
                    <img class="object-cover" src="/images/logo3.webp" alt="Logo">
                </div>
                <div class="">
                    <p class="w-[80%] text-orange-800 font-averialibre text-2xl text-justify mx-auto">bungeoppang is Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <div class="w-[50%] flex flex-col">
                <!-- SERIES #1 -->
                <p class="text-orange-800 font-averialibre text-4xl mx-auto" style="text-shadow: 4px 4px 4px #FFFFFF, -4px -4px 4px #FFFFFF, 4px -4px 4px #FFFFFF, -4px 4px 4px #FFFFFF;">COKLAT SERIES</p>
                <div class="grid grid-cols-2 w-[80%] mx-auto mt-3">
                    <!-- RASA -->
                    <div class="flex">
                        <div class="w-8 flex items-center justify-center mr-2">
                            <img class="object-cover h-14 transform scale-x-[-1] -translate-y-2" src="/images/ikan.webp" alt="Logo">
                        </div>
                        <p class="text-orange-800 font-averialibre text-3xl">Coklat</p>
                    </div>

                    <div class="flex">
                        <div class="w-8 flex items-center justify-center mr-2">
                            <img class="object-cover h-14 transform scale-x-[-1] -translate-y-2" src="/images/ikan.webp" alt="Logo">
                        </div>
                        <p class="text-orange-800 font-averialibre text-3xl">Coklat keju</p>
                    </div>

                    <div class="flex">
                        <div class="w-8 flex items-center justify-center mr-2">
                            <img class="object-cover h-14 transform scale-x-[-1] -translate-y-2" src="/images/ikan.webp" alt="Logo">
                        </div>
                        <p class="text-orange-800 font-averialibre text-3xl">Coklat vanilla</p>
                    </div>

                    <div class="flex">
                        <div class="w-8 flex items-center justify-center mr-2">
                            <img class="object-cover h-14 transform scale-x-[-1] -translate-y-2" src="/images/ikan.webp" alt="Logo">
                        </div>
                        <p class="text-orange-800 font-averialibre text-3xl">Coklat Oreo</p>
                    </div>

                    <div class="flex">
                        <div class="w-8 flex items-center justify-center mr-2">
                            <img class="object-cover h-14 transform scale-x-[-1] -translate-y-2" src="/images/ikan.webp" alt="Logo">
                        </div>
                        <p class="text-orange-800 font-averialibre text-3xl">Coklat caramel</p>
                    </div>
                    
                </div>

                <!-- SERIES #2 -->
                <p class="text-orange-800 font-averialibre text-4xl mx-auto" style="text-shadow: 4px 4px 4px #FFFFFF, -4px -4px 4px #FFFFFF, 4px -4px 4px #FFFFFF, -4px 4px 4px #FFFFFF;">VANILLA SERIES</p>
                <div class="grid grid-cols-2 w-[80%] mx-auto mt-3">
                    <!-- RASA -->
                    <div class="flex">
                        <div class="w-8 flex items-center justify-center mr-2">
                            <img class="object-cover h-14 transform scale-x-[-1] -translate-y-2" src="/images/ikan.webp" alt="Logo">
                        </div>
                        <p class="text-orange-800 font-averialibre text-3xl">Vanilla</p>
                    </div>

                    <div class="flex">
                        <div class="w-8 flex items-center justify-center mr-2">
                            <img class="object-cover h-14 transform scale-x-[-1] -translate-y-2" src="/images/ikan.webp" alt="Logo">
                        </div>
                        <p class="text-orange-800 font-averialibre text-3xl">Vanilla Keju</p>
                    </div>

                    <div class="flex">
                        <div class="w-8 flex items-center justify-center mr-2">
                            <img class="object-cover h-14 transform scale-x-[-1] -translate-y-2" src="/images/ikan.webp" alt="Logo">
                        </div>
                        <p class="text-orange-800 font-averialibre text-3xl">Vanilla Oreo</p>
                    </div>

                    <div class="flex">
                        <div class="w-8 flex items-center justify-center mr-2">
                            <img class="object-cover h-14 transform scale-x-[-1] -translate-y-2" src="/images/ikan.webp" alt="Logo">
                        </div>
                        <p class="text-orange-800 font-averialibre text-3xl">Vanilla Caramel</p>
                    </div>      
                </div>

                <!-- SERIES #3 -->
                <p class="text-orange-800 font-averialibre text-4xl mx-auto" style="text-shadow: 4px 4px 4px #FFFFFF, -4px -4px 4px #FFFFFF, 4px -4px 4px #FFFFFF, -4px 4px 4px #FFFFFF;">OTHER SERIES</p>
                <div class="grid grid-cols-2 w-[80%] mx-auto mt-3">
                    <!-- RASA -->
                    <div class="flex">
                        <div class="w-8 flex items-center justify-center mr-2">
                            <img class="object-cover h-14 transform scale-x-[-1] -translate-y-2" src="/images/ikan.webp" alt="Logo">
                        </div>
                        <p class="text-orange-800 font-averialibre text-3xl">Strawberry</p>
                    </div>

                    <div class="flex">
                        <div class="w-8 flex items-center justify-center mr-2">
                            <img class="object-cover h-14 transform scale-x-[-1] -translate-y-2" src="/images/ikan.webp" alt="Logo">
                        </div>
                        <p class="text-orange-800 font-averialibre text-3xl">Blueberry</p>
                    </div>

                    <div class="flex">
                        <div class="w-8 flex items-center justify-center mr-2">
                            <img class="object-cover h-14 transform scale-x-[-1] -translate-y-2" src="/images/ikan.webp" alt="Logo">
                        </div>
                        <p class="text-orange-800 font-averialibre text-3xl">Kacang merah</p>
                    </div>

                </div>
            </div>
        </div>
        <button href="" class="flex h-28 w-[50%] rounded-full border-2 border-yellow-800 bg-[#FF6400] items-center justify-center mx-4 mt-12 mb-16">
            <p class="text-white font-averialibre text-5xl">PRE ORDER SEKARANG!</p>
        </button>
    </div>

    <!-- section - franchise -->
    <div class="w-full flex flex-col relative items-center bg-[#F1A03C]">

            <img class="absolute h-96 z-0 -left-64 mt-5 animate-wiggle" src="/images/awan.webp" alt="Logo">
            <img class="absolute h-96 z-0 -right-64 bottom-0 mt-5 animate-wiggle" src="/images/awan.webp" alt="Logo">

        <div class="flex flex-row w-[80%] mt-10 z-10 ">
            <div class="w-[50%]">
                <div class="w-full flex items-center justify-center mx-auto mb-16">
                    <img class="object-cover" src="/images/booth.webp" alt="Logo">
                </div>
            </div>
            <div class="w-[50%] flex flex-col z-10 ">
                <!-- SERIES #1 -->
                <p class="text-orange-800 font-averialibre text-5xl mx-auto my-10" style="text-shadow: 4px 4px 4px #FFFFFF, -4px -4px 4px #FFFFFF, 4px -4px 4px #FFFFFF, -4px 4px 4px #FFFFFF;">INFO FRANCHISE</p>
                <p class="text-orange-800 font-averialibre text-4xl mx-auto text-justify">(bergabung dengan kami untuk menjadi franchisee mulai dari Rp. xxxxxxx)</p>
                <button href="" class="flex h-24 w-[90%] rounded-full border-2 border-yellow-800 bg-[#FF6400] items-center justify-center my-16 mx-auto hover:scale-[1.2] duration-75">
                    <p class="text-white font-averialibre text-4xl ">Lihat Paket Lainnya</p>
                </button>
            </div>
        </div>
        
    </div>

    <!-- footer -->
    <div class="w-full flex flex-col z-10 pl-7 py-7" style="background-image: url('/images/background-menu.webp');">
        <p class="text-orange-800 font-averialibre text-4xl mb-3">Mamappang - Best In Town</p>
        <p class="text-orange-800 font-averialibre text-xl w-[70%] text-justify mb-6">mammapang is Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
        <p class="text-orange-800 font-averialibrebold text-2xl mb-1">In collaboration with :</p>
        <div class="flex">
            <div class="w-42 flex items-center justify-center">
                <img class="object-cover" src="/images/umn.webp" alt="Logo">
            </div>
            <div class="w-42 flex items-center justify-center ml-3">
                <img class="object-cover" src="/images/logo.webp" alt="Logo">
            </div>
        </div>
    </div>



    </div>
</body>