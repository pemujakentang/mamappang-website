<body class="bg-[#FF6400]">
    <x-app-layout>
        <livewire:layout.navigation />
        <div
            class="mx-auto my-auto overflow-y-hidden relative overflow-x-hidden flex flex-col items-center bg-[#FF6400]">

            <!-- button whatsapp -->
            <div id="button1"
                class="fixed bottom-12 end-4 md:bottom-8 md:end-20 flex justify-center items-center z-20 animate-move-y-fast ">
                <a href="" class="no-underline hover:scale-[1.1] duration-100">
                    <button
                        class="rounded-[100%] h-[5.5rem] md:h-28 aspect-square bg-orange-300 border-orange-700 p-6 font-bold border-4">
                        <img class="object-cover" src="/images/whatsapp.webp" alt="Logo">
                    </button>
                </a>
            </div>


            <!-- section - home -->
            <div class="h-screen relative">

                <img class="absolute h-auto md:h-96 z-10 -right-56 bottom-10 mt-6 animate-wiggle opacity-70"
                    src="/images/awan.webp" alt="Logo">
                <img class="absolute h-auto md:h-96 z-10 -left-60 -bottom-32 animate-wiggle opacity-70"
                    src="/images/awan.webp" alt="Logo">
                <div class="hidden md:flex absolute h-auto md:h-80 z-10 left-20 top-32 animate-move-x">
                    <img class="animate-move-y opacity-70 h-80" src="/images/awan.webp" alt="Logo">
                </div>


                <!-- home -->

                <div class="flex flex-col items-center relative md:justify-normal justify-center h-full ">

                    <div class="flex flex-col items-center relative justify-center h-full">

                        <div class="w-full md:w-[75%] flex items-center justify-center z-10 md:h-[65%] mt-20 md:mt-10">
                            <img class="object-cover scale-[1.4] md:scale-100 z-10 md:h-full" src="/images/logo2.webp"
                                alt="Logo">
                            <div class="absolute w-screen z-0 scale-[1.2] flex md:hidden">
                                <img class="object-cover animate-spin-slow" src="/images/cahaya.webp" alt="Logo">
                            </div>
                        </div>

                        <div class="flex mt-20 md:mt-0 md:pt-6 z-10 md:flex-row flex-col w-full md:w-auto md:h-[35%]">
                            <a href="#menu" class="no-underline w-full flex justify-center">
                                <button href="#menu"
                                    class="flex h-16 md:h-14 md:w-56 w-[85%] rounded-full border-2 border-yellow-800 bg-orange-300 items-center justify-center mx-4 hover:scale-[1.2] duration-75">
                                    <p class="text-orange-800 font-averialibre text-2xl">See Our Menu</p>
                                    <div class="w-8 flex items-center justify-center ml-1">
                                        <img class="object-cover" src="/images/play.webp" alt="Logo">
                                    </div>
                                </button>
                            </a>
                            <a href="#franchise" class="no-underline w-full flex justify-center">
                                <button href=""
                                    class="flex h-16 md:h-14 md:w-56 w-[85%]  rounded-full border-2 border-yellow-800 bg-orange-300 items-center justify-center mx-4 hover:scale-[1.2] duration-75 mt-4 md:mt-0">
                                    <p class="text-orange-800 font-averialibre text-2xl">Franchise Info ⓘ</p>
                                </button>
                            </a>
                        </div>
                    </div>

                </div>





            </div>

            <div class="w-full hidden md:flex">
                <div class="fixed w-screen z-0 scale-[1.7] lg:-mt-56 md:-mt-48">
                    <img class="object-cover animate-spin-slow" src="/images/cahaya.webp" alt="Logo">
                </div>
            </div>

            <!-- section - menu -->
            <div id="menu" class="w-full flex flex-col items-center z-10 pt-16 md:pt-0"
                style="background-image: url('/images/background-menu.webp');">
                <p class="text-orange-800 font-averialibre text-5xl mx-auto md:my-5 my-10"
                    style="text-shadow: 4px 4px 4px #FFFFFF, -4px -4px 4px #FFFFFF, 4px -4px 4px #FFFFFF, -4px 4px 4px #FFFFFF;">
                    Our Menu</p>
                <div class="flex flex-col md:flex-row md:w-[90%] w-full">
                    <div class="w-full md:w-[50%]">
                        <div class="w-[80%] flex items-center justify-center mx-auto mb-4">
                            <img class="object-cover" src="/images/logo3.webp" alt="Logo">
                        </div>
                        <div class="md:mx-0 my-10">
                            <p
                                class="w-[90%] md:w-[80%] text-orange-800 font-averialibre md:text-2xl text-xl text-justify mx-auto">
                                Bungeoppang adalah Jajanan Khas Korea yang merupakan kue dalam bentuk Ikan yang
                                berisikan bermacam- macam selai dengan rasa sesuai pilihan Anda. Tekstur Bungeoppang
                                yang khas yaitu renyah dibagian luar dan lembut dibagian dalam, menambah sensasi nikmat
                                saat dikonsumsi</p>
                        </div>
                    </div>
                    <div class="w-full md:w-[50%] flex flex-col">
                        <!-- SERIES #1 -->
                        <p class="text-orange-800 font-averialibre md:text-4xl text-3xl mx-auto mt-3 md:mt-0"
                            style="text-shadow: 4px 4px 4px #FFFFFF, -4px -4px 4px #FFFFFF, 4px -4px 4px #FFFFFF, -4px 4px 4px #FFFFFF;">
                            COKLAT SERIES</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 md:w-[80%] w-[95%] mx-auto mt-3">
                            <!-- RASA -->
                            <div class="flex mx-auto md:mx-0">
                                <div class="w-8 flex items-center justify-center mr-2">
                                    <img class="object-cover h-14 transform scale-x-[-1] md:-translate-y-2 -translate-y-3"
                                        src="/images/ikan.webp" alt="Logo">
                                </div>
                                <p class="text-orange-800 font-averialibre md:text-3xl text-2xl">Coklat</p>
                            </div>

                            <div class="flex mx-auto md:mx-0">
                                <div class="w-8 flex items-center justify-center mr-2">
                                    <img class="object-cover h-14 transform scale-x-[-1] md:-translate-y-2 -translate-y-3"
                                        src="/images/ikan.webp" alt="Logo">
                                </div>
                                <p class="text-orange-800 font-averialibre md:text-3xl text-2xl">Coklat keju</p>
                            </div>

                            <div class="flex mx-auto md:mx-0">
                                <div class="w-8 flex items-center justify-center mr-2">
                                    <img class="object-cover h-14 transform scale-x-[-1] md:-translate-y-2 -translate-y-3"
                                        src="/images/ikan.webp" alt="Logo">
                                </div>
                                <p class="text-orange-800 font-averialibre md:text-3xl text-2xl">Coklat vanilla</p>
                            </div>

                            <div class="flex mx-auto md:mx-0">
                                <div class="w-8 flex items-center justify-center mr-2">
                                    <img class="object-cover h-14 transform scale-x-[-1] md:-translate-y-2 -translate-y-3"
                                        src="/images/ikan.webp" alt="Logo">
                                </div>
                                <p class="text-orange-800 font-averialibre md:text-3xl text-2xl">Coklat oreo</p>
                            </div>

                            <div class="flex mx-auto md:mx-0">
                                <div class="w-8 flex items-center justify-center mr-2">
                                    <img class="object-cover h-14 transform scale-x-[-1] md:-translate-y-2 -translate-y-3"
                                        src="/images/ikan.webp" alt="Logo">
                                </div>
                                <p class="text-orange-800 font-averialibre md:text-3xl text-2xl">Coklat caramel</p>
                            </div>

                        </div>

                        <!-- SERIES #2 -->
                        <p class="text-orange-800 font-averialibre md:text-4xl text-3xl mx-auto mt-3 md:mt-0"
                            style="text-shadow: 4px 4px 4px #FFFFFF, -4px -4px 4px #FFFFFF, 4px -4px 4px #FFFFFF, -4px 4px 4px #FFFFFF;">
                            VANILLA SERIES</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 md:w-[80%] w-[95%] mx-auto mt-3">
                            <!-- RASA -->
                            <div class="flex mx-auto md:mx-0">
                                <div class="w-8 flex items-center justify-center mr-2">
                                    <img class="object-cover h-14 transform scale-x-[-1] md:-translate-y-2 -translate-y-3"
                                        src="/images/ikan.webp" alt="Logo">
                                </div>
                                <p class="text-orange-800 font-averialibre md:text-3xl text-2xl">Vanilla</p>
                            </div>

                            <div class="flex mx-auto md:mx-0">
                                <div class="w-8 flex items-center justify-center mr-2">
                                    <img class="object-cover h-14 transform scale-x-[-1] md:-translate-y-2 -translate-y-3"
                                        src="/images/ikan.webp" alt="Logo">
                                </div>
                                <p class="text-orange-800 font-averialibre md:text-3xl text-2xl">Vanilla keju</p>
                            </div>

                            <div class="flex mx-auto md:mx-0">
                                <div class="w-8 flex items-center justify-center mr-2">
                                    <img class="object-cover h-14 transform scale-x-[-1] md:-translate-y-2 -translate-y-3"
                                        src="/images/ikan.webp" alt="Logo">
                                </div>
                                <p class="text-orange-800 font-averialibre md:text-3xl text-2xl">Vanilla oreo</p>
                            </div>

                            <div class="flex mx-auto md:mx-0">
                                <div class="w-8 flex items-center justify-center mr-2">
                                    <img class="object-cover h-14 transform scale-x-[-1] md:-translate-y-2 -translate-y-3"
                                        src="/images/ikan.webp" alt="Logo">
                                </div>
                                <p class="text-orange-800 font-averialibre md:text-3xl text-2xl">Vanilla caramel</p>
                            </div>
                        </div>

                        <!-- SERIES #3 -->
                        <p class="text-orange-800 font-averialibre md:text-4xl text-3xl mx-auto mt-3 md:mt-0"
                            style="text-shadow: 4px 4px 4px #FFFFFF, -4px -4px 4px #FFFFFF, 4px -4px 4px #FFFFFF, -4px 4px 4px #FFFFFF;">
                            OTHER SERIES</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 md:w-[80%] w-[95%] mx-auto mt-3">
                            <!-- RASA -->
                            <div class="flex mx-auto md:mx-0">
                                <div class="w-8 flex items-center justify-center mr-2">
                                    <img class="object-cover h-14 transform scale-x-[-1] md:-translate-y-2 -translate-y-3"
                                        src="/images/ikan.webp" alt="Logo">
                                </div>
                                <p class="text-orange-800 font-averialibre md:text-3xl text-2xl">Strawberry</p>
                            </div>

                            <div class="flex mx-auto md:mx-0">
                                <div class="w-8 flex items-center justify-center mr-2">
                                    <img class="object-cover h-14 transform scale-x-[-1] md:-translate-y-2 -translate-y-3"
                                        src="/images/ikan.webp" alt="Logo">
                                </div>
                                <p class="text-orange-800 font-averialibre md:text-3xl text-2xl">Blueberry</p>
                            </div>

                            <div class="flex mx-auto md:mx-0">
                                <div class="w-8 flex items-center justify-center mr-2">
                                    <img class="object-cover h-14 transform scale-x-[-1] md:-translate-y-2 -translate-y-3"
                                        src="/images/ikan.webp" alt="Logo">
                                </div>
                                <p class="text-orange-800 font-averialibre md:text-3xl text-2xl">Kacang merah</p>
                            </div>

                        </div>
                    </div>
                </div>
                <a href="/bulk-order"
                    class="flex h-24 w-[90%] md:w-[50%] rounded-full border-2 border-yellow-800 bg-[#FF6400] items-center justify-center mx-4 mt-12 md:mt-3 mb-16 hover:scale-[1.1] duration-75">
                    <p class="text-white font-averialibre text-4xl">PRE ORDER SEKARANG!</p>
                </a>
            </div>

            <!-- section - franchise -->
            <div id="franchise" class="w-full flex flex-col relative items-center bg-[#F1A03C]">

                <img class="absolute h-auto md:h-96 z-0 -left-64 mt-5 animate-wiggle" src="/images/awan.webp"
                    alt="Logo">
                <img class="absolute h-auto md:h-96 z-0 -right-64 md:bottom-0 top-20 md:top-auto mt-5 animate-wiggle"
                    src="/images/awan.webp" alt="Logo">


                <div class="flex flex-col md:flex-row w-[90%] md:w-[80%] mt-10 z-10 pt-12 md:pt-0">
                    <div class="w-full md:w-[50%]">
                        <div class="w-full flex items-center justify-center mx-auto mb-0 md:mb-16">
                            <img class="object-cover" src="/images/booth.webp" alt="Logo">
                        </div>
                    </div>
                    <div class="w-full md:w-[50%] flex flex-col z-10 ">
                        <!-- SERIES #1 -->
                        <p class="text-orange-800 font-averialibre text-4xl md:text-5xl mx-auto md:my-10 my-3"
                            style="text-shadow: 4px 4px 4px #FFFFFF, -4px -4px 4px #FFFFFF, 4px -4px 4px #FFFFFF, -4px 4px 4px #FFFFFF;">
                            INFO FRANCHISE</p>
                        <p class="text-orange-800 font-averialibre text-2xl md:text-4xl mx-auto text-justify">Mamappang
                            membuka kesempatan untuk Anda yang ingin mempunyai bisnis kekinian dan menjadi mitra usaha
                            kami</p>
                        <a href="" class="no-underline">
                            <a href="/franchise"
                                class="flex md:h-24 h-20 w-full md:w-[90%] rounded-full border-2 border-yellow-800 bg-[#FF6400] items-center justify-center my-10 md:my-16 mx-auto hover:scale-[1.2] duration-75">
                                <p class="text-white font-averialibre text-3xl md:text-4xl ">Gabung bersama kami</p>
                            </a>
                        </a>
                    </div>
                </div>

            </div>

            <!-- footer -->
            <div class="w-full flex flex-col z-10 px-5 md:px-3 md:pl-7 py-7 bg-[#FF6400]">
                <p class="text-orange-800 font-averialibre text-3xl md:text-4xl mb-3">Mamappang - Best In Town</p>
                <p class="text-orange-800 font-averialibre text-lg md:text-xl w-full md:w-[70%] text-justify mb-6">
                    mammapang is Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                <p class="text-orange-800 font-averialibrebold text-xl md:text-2xl mb-1">In collaboration with :</p>
                <div class="flex">
                    <div class="w-28 md:w-42 flex items-center justify-center">
                        <img class="object-cover" src="/images/umn.webp" alt="Logo">
                    </div>
                    <div class="w-28 md:w-42 flex items-center justify-center ml-3">
                        <img class="object-cover" src="/images/logo.webp" alt="Logo">
                    </div>
                </div>
            </div>



        </div>
    </x-app-layout>
</body>
