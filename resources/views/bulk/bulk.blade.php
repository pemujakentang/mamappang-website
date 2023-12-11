<body>
    <x-app-layout>
        <div class="mx-auto my-auto overflow-hidden relative flex flex-col items-center bg-[#FF6400]">
            <!-- button whatsapp -->
            <div id="button1"
                class="fixed bottom-12 end-4 md:bottom-8 md:end-20 flex justify-center items-center z-20 animate-move-y-fast ">
                <a href="https://wa.me/6285161610765" target="_" class="no-underline hover:scale-[1.1] duration-100">
                    <button
                        class="rounded-[100%] h-[4rem] md:h-28 aspect-square bg-orange-300 border-orange-700 p-2 md:p-6 font-bold border-4">
                        <img class="object-cover" src="/images/whatsapp.webp" alt="Logo">
                    </button>
                </a>
            </div>
            <!-- section - home -->
            <div class="md:h-screen flex relative justify-center flex-col">

                <img class="absolute h-auto md:h-96 z-10 -right-56 bottom-10 mt-6 animate-wiggle opacity-70"
                    src="/images/awan.webp" alt="Logo">
                <img class="absolute h-auto md:h-96 z-10 -left-60 -bottom-32 animate-wiggle opacity-70"
                    src="/images/awan.webp" alt="Logo">
                <div class="hidden md:flex absolute h-auto md:h-80 z-10 left-20 top-32 animate-move-x">
                    <img class="animate-move-y opacity-70 h-80" src="/images/awan.webp" alt="Logo">
                </div>

                <livewire:layout.navigation />

                <!-- home -->
                <div
                    class="flex flex-col items-center relative md:justify-normal justify-center md:h-full pt-24 md:pt-0">

                    <div class="flex flex-col md:flex-row w-[90%] mt-2 justify-center md:items-center md:h-[80%]">

                        <div class="w-full md:w-[50%]">
                            <div class="w-[80%] md:w-[85%] flex items-center justify-center mx-auto mb-10 md:mb-4">
                                <img class="object-cover z-10" src="/images/logo3.webp" alt="Logo">
                                <div class="absolute w-screen z-0 translate-y-4 flex md:hidden scale-[1.1]">
                                    <img class="object-cover animate-spin-slow" src="/images/cahaya.webp"
                                        alt="Logo">
                                </div>
                            </div>
                        </div>

                        <div class="w-full md:w-[50%] flex flex-col justify-center md:pr-7 z-10">
                            <!-- SERIES #1 -->
                            <p class="  text-yellow-900 text-[3rem] md:text-[6rem] font-black font-blackhansans tracking-tighter text-center w-full mb-4"
                                style="-webkit-text-stroke: 2px white; line-height:1;">
                                Bulk Order</p>
                            <p class="text-orange-800 font-averialibrebold text-xl md:text-2xl text-justify mx-auto leading-tight"
                                style="filter: drop-shadow(0 0 13px white);">
                                Kami menerima pesanan dalam partai besar dengan harga grosir.</p>
                        </div>

                    </div>

                    <div class="hidden md:flex md:h-[20%]"></div>

                </div>

                <div class="flex z-10 w-full items-center justify-center pb-5">
                    <a href="#menu-bulk" class="no-underline">
                        <button href=""
                            class="flex h-16 rounded-full border-2 border-yellow-800 bg-orange-300 items-center justify-center px-6 hover:scale-[1.2] duration-75">
                            <p class="text-orange-800 font-averialibre text-2xl mr-2 ml-3">Lihat Penawaran</p>
                            <div class="w-8 flex items-center justify-center">
                                <img class="object-cover h-3" src="/images/arrow.webp" alt="Logo">
                            </div>
                        </button>
                    </a>
                </div>

            </div>

            <div class="w-full hidden md:flex">
                <div class="fixed w-screen z-0 scale-[1.7] lg:-mt-56 md:-mt-48">
                    <img class="object-cover animate-spin-slow" src="/images/cahaya.webp" alt="Logo">
                </div>

            </div>



            <!-- section - menu -->
            <div id="menu-bulk" class="pt-16 md:pt-12 w-full flex flex-col items-center z-10 py-12 bg-orange-500">
                <p class="hidden md:flex text-orange-800 font-averialibrebold text-2xl md:text-5xl mx-auto -mt-5 mb-5"
                    style="-webkit-text-stroke: 1.5px white;">
                    HARGA SPECIAL BULK ORDER</p>
                <p class="flex md:hidden text-orange-800 font-averialibrebold text-2xl md:text-5xl mx-auto -mt-3 mb-5"
                    style="filter: drop-shadow(0 0 5px white);">
                    HARGA SPECIAL BULK ORDER</p>
                <div class="flex flex-col md:flex-row w-[90%] gap-2 md:gap-5">
                    <div class="w-full md:w-[50%]">
                        <div
                            class="flex rounded-3xl border-2 border-orange-300 bg-orange-700 items-center justify-center p-6 flex-col md:flex-row">
                            <div class="w-[45%] flex flex-col items-center justify-center mx-auto pl-3 mb-4">
                                <img class="object-cover" src="/images/logo3.webp" alt="Logo">
                                <p class="text-orange-300 font-averialibre text-2xl md:text-3xl md:mt-3">≤ 20 Pcs</p>
                            </div>

                            <div class="w-full md:w-[50%] text-center md:text-end">
                                <p class="text-orange-200 md:text-orange-300 font-averialibre text-4xl md:mr-3">Rp.
                                    12.000/Pcs</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-[50%]">
                        <div
                            class="flex rounded-3xl border-2 border-orange-300 bg-orange-700 items-center justify-center p-6 flex-col md:flex-row">
                            <div class="w-[45%] flex flex-col items-center justify-center mx-auto pl-3 mb-4">
                                <img class="object-cover" src="/images/logo3.webp" alt="Logo">
                                <p class="text-orange-300 font-averialibre text-2xl md:text-3xl md:mt-3">21-50 Pcs</p>
                            </div>

                            <div class="w-full md:w-[50%] text-center md:text-end">
                                <p class="text-orange-200 md:text-orange-300 font-averialibre text-4xl md:mr-3">Rp.
                                    11.000/Pcs</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row w-[90%] items-center justify-center m-2 md:m-5">
                    <div class="w-full md:w-[50%]">
                        <div
                            class="flex rounded-3xl border-2 border-orange-300 bg-orange-700 items-center justify-center p-6 flex-col md:flex-row">
                            <div class="w-[45%] flex flex-col items-center justify-center mx-auto pl-3 mb-4">
                                <img class="object-cover" src="/images/logo3.webp" alt="Logo">
                                <p class="text-orange-300 font-averialibre text-2xl md:text-3xl md:mt-3">>50 Pcs</p>
                            </div>

                            <div class="w-full md:w-[50%] text-center md:text-end">
                                <p class="text-orange-200 md:text-orange-300 font-averialibre text-4xl md:mr-3">Rp.
                                    10.000/Pcs</p>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="/bulks"
                    class="flex h-14 md:h-20 w-[80%] md:w-[35%] rounded-full border-2 border-yellow-800 bg-orange-400 items-center justify-center mt-3 hover:scale-[1.2] duration-75">
                    <p class="text-white font-averialibre text-2xl md:text-3xl mx-4">ORDER SEKARANG!</p>
                </a>
            </div>



            <!-- footer -->
            <div class="w-full flex flex-col z-10 px-5 md:px-3 md:pl-7 py-7"
                style="background-image: url('/images/background-menu.webp');">
                <p class="text-orange-800 font-averialibre text-3xl md:text-4xl mb-3">Mamappang - Best In Town</p>
                <p class="text-orange-800 font-averialibre text-lg md:text-xl w-full md:w-[70%] text-justify mb-6">
                    Contact us
                    <br>
                    mamappang.bungeoppang@gmail.com
                    <br>
                    0851-6161-0765
                    <br>
                    Tangerang Selatan
                </p>
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
