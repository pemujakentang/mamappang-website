
<body>
    <x-app-layout>

    <!-- component -->
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
        <livewire:layout.admin-nav />

        <div class="flex-auto min-h-screen bg-[#FFDBA3] pt-20 md:pt-0">
            <!-- Dummy Content on the Right Sidebar -->
            <div class="ml-0 md:ml-64 p-3 md:p-8">
                <div class="flex">
                    <p class="text-5xl font-averialibre text-orange-800">Edit Harga Bulk</p>
                    <!-- <div>
                        <button class="bg-[#FDED87] rounded-2xl border-solid border-4 border-[#F1A03C] flex items-center w-35 ml-auto">
                            <a href="{{ route('edit-bulk') }}" class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl">Edit Harga Bulk</a>
                        </button>
                    </div>
                    <div>
                        <button class="bg-[#FDED87] rounded-2xl border-solid border-4 border-[#F1A03C] flex items-center w-35 ml-auto mr-4">
                            <a href="{{ route('tambah-series') }}" class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl">Tambah Series</a>
                        </button>
                    </div> -->
                </div>

                <div class="rounded-2xl border-solid border-4 border-[#F1A03C] my-6 bg-[#FAC774] overflow-y-auto">
                    <ul class="m-2 md:m-4 space-y-2">
                        <!-- Dummy data, replace with dynamic data in a real application -->
                        <li class="flex justify-between items-center bg-[#FAC774] border-solid border-4 border-[#F1A03C] py-3 md:px-5 rounded-2xl md:w-full md:flex-row md:justify-between flex-col">

                            <div class="flex flex-row items-center justify-center">
                                <img class="object-cover h-16 transform scale-x-[-1] -translate-y-2 mt-2" src="/images/ikan.webp" alt="Logo">
                                <div class="">
                                    <div class="flex h-16">
                                        <input type="text" id="title" name="title" class="p-2 w-[200px] bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] ml-2 font-averialibre placeholder-orange-700" placeholder="20-50pcs">
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-row items-center justify-center gap-2 mt-2">
                                <div class="">
                                    <div class="flex h-16">
                                        <input type="text" id="title" name="title" class="p-2 w-[200px] bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] ml-2 font-averialibre placeholder-orange-700" placeholder="20-50pcs">
                                    </div>
                                </div>

                                <span class="md:ml-[20px] font-averialibre text-orange-800 text-center text-xl md:text-4xl md:w-[180px] bg-[#FFDBA3] rounded-[10px] border-solid border-2 border-[#945E3D] h-16 items-center justify-center flex px-2">Per Pcs</span>
                                <!-- <span class="ml-2 font-averialibre text-orange-800 text-4xl">Item 1</span> -->
                            </div>
                            <!-- <div class="flex space-x-2">
                                <button type="button" class="text-blue-500">
                                    <p class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl">Edit</p>
                                </button>
                                <button type="button" class="text-red-500">
                                    <p class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl">Delete</p>
                                </button>
                            </div> -->
                        </li>

                        <li class="flex justify-between items-center bg-[#FAC774] border-solid border-4 border-[#F1A03C] py-3 md:px-5 rounded-2xl md:w-full md:flex-row md:justify-between flex-col">

                            <div class="flex flex-row items-center justify-center">
                                <img class="object-cover h-16 transform scale-x-[-1] -translate-y-2 mt-2" src="/images/ikan.webp" alt="Logo">
                                <div class="">
                                    <div class="flex h-16">
                                        <input type="text" id="title" name="title" class="p-2 w-[200px] bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] ml-2 font-averialibre placeholder-orange-700" placeholder="20-50pcs">
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-row items-center justify-center gap-2 mt-2">
                                <div class="">
                                    <div class="flex h-16">
                                        <input type="text" id="title" name="title" class="p-2 w-[200px] bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] ml-2 font-averialibre placeholder-orange-700" placeholder="20-50pcs">
                                    </div>
                                </div>

                                <span class="md:ml-[20px] font-averialibre text-orange-800 text-center text-xl md:text-4xl md:w-[180px] bg-[#FFDBA3] rounded-[10px] border-solid border-2 border-[#945E3D] h-16 items-center justify-center flex px-2">Per Pcs</span>
                                <!-- <span class="ml-2 font-averialibre text-orange-800 text-4xl">Item 1</span> -->
                            </div>
                            <!-- <div class="flex space-x-2">
                                <button type="button" class="text-blue-500">
                                    <p class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl">Edit</p>
                                </button>
                                <button type="button" class="text-red-500">
                                    <p class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl">Delete</p>
                                </button>
                            </div> -->
                        </li>

                        <li class="flex justify-between items-center bg-[#FAC774] border-solid border-4 border-[#F1A03C] py-3 md:px-5 rounded-2xl md:w-full md:flex-row md:justify-between flex-col">

                            <div class="flex flex-row items-center justify-center">
                                <img class="object-cover h-16 transform scale-x-[-1] -translate-y-2 mt-2" src="/images/ikan.webp" alt="Logo">
                                <div class="">
                                    <div class="flex h-16">
                                        <input type="text" id="title" name="title" class="p-2 w-[200px] bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] ml-2 font-averialibre placeholder-orange-700" placeholder="20-50pcs">
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-row items-center justify-center gap-2 mt-2">
                                <div class="">
                                    <div class="flex h-16">
                                        <input type="text" id="title" name="title" class="p-2 w-[200px] bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] ml-2 font-averialibre placeholder-orange-700">
                                    </div>
                                </div>

                                <span class="md:ml-[20px] font-averialibre text-orange-800 text-center text-xl md:text-4xl md:w-[180px] bg-[#FFDBA3] rounded-[10px] border-solid border-2 border-[#945E3D] h-16 items-center justify-center flex px-2">Per Pcs</span>
                                <!-- <span class="ml-2 font-averialibre text-orange-800 text-4xl">Item 1</span> -->
                            </div>
                            <!-- <div class="flex space-x-2">
                                <button type="button" class="text-blue-500">
                                    <p class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl">Edit</p>
                                </button>
                                <button type="button" class="text-red-500">
                                    <p class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl">Delete</p>
                                </button>
                            </div> -->
                        </li>
                        <!-- Add more items as needed -->

                    </ul>
                    <div class="flex mb-4 justify-center mt-4">
                        <button class="bg-[#F1A03C] rounded-[20px] border-solid border-4 border-[#945E3D] flex items-center justify-center w-36 mr-4">
                            <a href="{{ route('menu-edit') }}" class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl text-center">Cancel</a>
                        </button>
                        <button class="bg-[#FDED87] rounded-[20px] border-solid border-4 border-[#945E3D] flex items-center justify-center w-36 mr-4">
                            <a href="#" class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl text-center">Save</a>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </x-app-layout>
</body>