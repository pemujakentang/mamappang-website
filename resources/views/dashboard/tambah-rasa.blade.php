

<body>
<x-app-layout>

    <!-- component -->
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
        <livewire:layout.admin-nav />

        <div class="flex-auto min-h-screen bg-[#FFDBA3] md:pt-0 pt-20 flex md:justify-start justify-center items-center md:items-stretch flex-col">
            <!-- Dummy Content on the Right Sidebar -->
            <div class="ml-0 md:ml-64 p-3 md:p-8 ">
                <div class="flex">
                    <p class="text-5xl font-averialibre text-orange-800">Tambah Rasa</p>
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
                    <ul class="p-3 md:p-8">
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
                    <div class="m-4">
                        <div class="mt-1 flex items-center">
                            <label for="title" class="block text-2xl font-averialibre text-orange-800 md:ml-4">Nama Menu</label>
                            <input type="text" id="title" name="title" class="p-2 w-[200px] bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] md:ml-10 font-averialibre placeholder-orange-700">
                        </div>
                    </div>
                    <div class="m-4 mb-56">
                        <div class="mt-1 flex items-center">
                            <label for="title" class="block text-2xl font-averialibre text-orange-800 md:ml-4">Nama Series</label>

                            <div class="flex flex-row justify-center pt-4 relative">
                                <div class="flex-none p-2 bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] md:ml-10">
                                    <button onclick="showDropdownOptions()" class="flex flex-row justify-between h-[40px] font-averialibre text-orange-800 bg-[#FDED87] border-3 rounded-2xl focus:border-orange-800 w-[200px] items-center">
                                        <span class="select-none">Select Series</span>

                                        <svg id="arrow-down" class="hidden w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        <svg id="arrow-up" class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>

                                    <div id="options" class="hidden absolute top-full left-0 w-52 py-2 mt-2 bg-[#FDED87] border-solid border-2 border-[#945E3D] rounded-lg font-averialibre text-orange-800 ml-2 md:ml-10">
                                        <a href="#" class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600">series 1</a>
                                        <a href="#" class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600">series 2</a>
                                        <a href="#" class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600">series 3</a>
                                    </div>
                                </div>
                            </div>
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
    <script>
        function showDropdownOptions() {
            document.getElementById("options").classList.toggle("hidden");
            document.getElementById("arrow-up").classList.toggle("hidden");
            document.getElementById("arrow-down").classList.toggle("hidden");
        }
    </script>
    </x-app-layout>
</body>
