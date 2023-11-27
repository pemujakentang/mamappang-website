

<body>
    <x-app-layout>
    <!-- component -->
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
        <livewire:layout.admin-nav />

        <div class="flex-auto min-h-screen bg-[#FFDBA3] md:pt-0 pt-20 flex md:justify-start justify-center items-center md:items-stretch flex-col">
            <!-- Dummy Content on the Right Sidebar -->
            <div class="ml-0 md:ml-64 p-3 md:p-8 ">
                <div class="flex">
                    <p class="text-5xl font-averialibre text-orange-800">Tambah Series</p>
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
                    <div class="p-3 md:p-8">
                        <!-- Dummy data, replace with dynamic data in a real application -->
                        <li class="flex justify-between items-center bg-[#FAC774] border-solid border-4 border-[#F1A03C] py-3 md:px-5 rounded-2xl md:w-full md:flex-row md:justify-between flex-col">
                            <div class="flex items-center">
                                <img class="object-cover h-14 transform scale-x-[-1] -translate-y-2 mt-2" src="/images/ikan.webp" alt="Logo">
                                <span class="ml-2 font-averialibre text-orange-800 text-4xl">Item 1</span>
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
                        <div class="rounded-2xl my-6 bg-[#FAC774] overflow-y-auto py-4">
                            <div class="px-2 flex items-center">
                                <label for="title" class="block text-2xl font-averialibre text-orange-800 ml-4">Nama Series</label>
                                <input type="text" id="title" name="title" class="p-2 w-[200px] bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] ml-2 md:ml-10 font-averialibre placeholder-orange-700">
                            </div>
                        </div>
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