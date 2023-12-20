<body>
    <x-app-layout>
        <div
            class="mx-auto my-auto overflow-y-hidden relative overflow-x-hidden flex flex-col items-center bg-[#FF6400]">

            <!-- section - home -->
            <div class="h-screen relative pb-10">
                <div class="z-50"><livewire:layout.navigation /></div>
                

                <img class="absolute h-auto md:h-96 z-10 -right-56 bottom-10 mt-6 animate-wiggle opacity-70"
                    src="/images/awan.webp" alt="Logo">
                <img class="absolute h-auto md:h-96 z-10 -left-60 -bottom-32 animate-wiggle opacity-70"
                    src="/images/awan.webp" alt="Logo">
                <div class="hidden md:flex absolute h-auto md:h-80 z-10 left-20 top-32 animate-move-x">
                    <img class="animate-move-y opacity-70 h-80" src="/images/awan.webp" alt="Logo">
                </div>

                <div class="flex flex-col items-center relative md:justify-normal justify-center mt-12 md:mt-0 h-full">

                    <div class="flex flex-col items-center relative justify-center h-full">

                        <div class="flex flex-col md:ml-16 md:flex-row w-[90%] mt-2 justify-center z-10">

                            <div class="w-full  md:w-[50%] flex flex-col justify-center md:mb-20">
                                <p class="hidden md:flex text-yellow-900 text-[3rem] md:text-[6rem] font-black font-blackhansans tracking-tighter text-center w-full mb-4 justify-center"
                                style="-webkit-text-stroke: 2px white;">
                                About Us</p>

                                <div
                                    class="w-full md:hidden flex items-center justify-center mx-auto my-10 scale-[1.2]">
                                    <img class="object-cover" src="/images/logo2.webp" alt="Logo">
                                </div>

                                <p class="flex md:hidden text-yellow-900 text-[4rem] md:text-[5rem] font-black font-blackhansans tracking-tighter text-center w-full justify-center"
                                style="-webkit-text-stroke: 3.5px white;">
                                About Us</p>

                                <p class="text-orange-800 font-averialibrebold text-2xl md:text-2xl text-justify mx-auto mt-5"
                                    style="filter: drop-shadow(0 0 6px white); -webkit-text-stroke: 0.1px #FAC774;">
                                    Mamappang memproduksi Bungeoppang, kue dalam bentuk ikan dengan berbagai macam rasa yang menarik. 
                                    <br><br>
                                    Dibuat dengan adonan tepung yang berkualitas serta bermacam-macam selai yang premium membuat mamappang berbeda dengan yang lainnya.</p>
                            </div>

                            <div class="hidden md:flex w-full md:w-[50%]">
                                <div class="w-full flex items-center justify-center mx-auto mb-10 md:mb-4">
                                    <img class="object-cover scale-[1.2]" src="/images/logo2.webp" alt="Logo">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="w-full hidden md:flex">
                <div class="fixed w-screen z-0 scale-[1.7] lg:-mt-56 md:-mt-48">
                    <img class="object-cover animate-spin-slow" src="/images/cahaya.webp" alt="Logo">
                </div>
            </div>



        </div>
    </x-app-layout>
</body>
