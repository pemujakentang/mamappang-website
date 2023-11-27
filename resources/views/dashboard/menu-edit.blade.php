
<body>
<x-app-layout>

    <!-- component -->
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
        <livewire:layout.admin-nav />
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
    </x-app-layout>
</body>