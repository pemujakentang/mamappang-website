<body>
    <x-app-layout>

        <!-- component -->
        <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
            <livewire:layout.admin-nav />
            <div class="flex-auto min-h-screen bg-[#FFDBA3]">
                <!-- Dummy Content on the Right Sidebar -->
                <div class="ml-0 md:ml-64 md:p-8 p-2 md:pt-4 pt-16">
                    <div class="flex-col flex">
                        <p class="col-span-1 text-5xl tracking-wide truncate font-averialibre text-orange-800 flex mx-auto md:mx-0">Edit
                        </p>
                        <div class="mt-4 flex-col md:flex-row gap-3 md:justify-normal justify-center items-center grid grid-cols-2 md:grid-cols-4">
                            <div class="w-full md:w-auto">
                                <button
                                    class="bg-[#FDED87] rounded-2xl border-solid border-4 border-[#F1A03C] w-full md:w-35 py-2 md:h-full h-20">
                                    <a href=""
                                        class="ml-4 mr-4 font-averialibre text-orange-800 text-xl md:text-2xl text-center">Edit
                                        Harga Bulk</a>
                                </button>
                            </div>
                            <div class="w-full md:w-auto">
                                <button
                                    class="bg-[#FDED87] rounded-2xl border-solid border-4 border-[#F1A03C] w-full md:w-35 py-2 md:h-full h-20">
                                    <a href="/admin/dashboard/add-series"
                                        class="ml-4 mr-4 font-averialibre text-orange-800 text-xl md:text-2xl">Tambah Series</a>
                                </button>
                            </div>
                            <div class="w-full md:w-auto">
                                <button
                                    class="bg-[#FDED87] rounded-2xl border-solid border-4 border-[#F1A03C] w-full md:w-35 py-2 md:h-full h-20">
                                    <a href="/admin/dashboard/add-menu"
                                        class="ml-4 mr-4 font-averialibre text-orange-800 text-xl md:text-2xl">Tambah Rasa</a>
                                </button>
                            </div>
                            <!-- blm dikasih path -->
                            <div class="w-full md:w-auto">
                                <button
                                    class="bg-[#FDED87] rounded-2xl border-solid border-4 border-[#F1A03C] w-full md:w-35 py-2 md:h-full h-20">
                                    <a href=""
                                        class="mx-3 font-averialibre text-orange-800 text-xl md:text-2xl text-center">Tambah Franchise</a>
                                </button>
                            </div>
                        </div>
                    </div>

                <div class="w-full flex flex-col md:flex-row">
                    <div
                        class="w-full md:w-[50%] rounded-2xl border-solid border-4 border-[#F1A03C] mt-6 mb-6 md:mb-0 bg-[#FAC774] mr-2 simplebar overflow-hidden">
                        <p class="w-full flex justify-center m-4 col-span-1 text-4xl tracking-wide truncate font-averialibre text-orange-800">Edit Menu
                        </p>
                        @if (session()->has('success'))
                            {{-- <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div> --}}
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 my-4 rounded relative w-fit"
                                role="alert">
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif
                        @if (session()->has('error'))
                            {{-- <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div> --}}
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 my-4 rounded relative w-fit"
                                role="alert">
                                <strong class="font-bold">Error!</strong>
                                <span class="block sm:inline">{{ session('error') }}</span>
                            </div>
                        @endif
                        <ul class="mt-4 mb-4 ml-4 mr-4 space-y-2">
                            <!-- Dummy data, replace with dynamic data in a real application -->
                            @foreach ($categories as $category)
                                <li
                                    class="flex justify-between items-center bg-[#FAC774] border-solid border-4 border-orange-700 p-2 rounded-2xl flex-col md:flex-row">
                                    <div class="flex items-center">
                                        <img class="object-cover h-14 transform scale-x-[-1] -translate-y-2 mt-2"
                                            src="/images/ikan.webp" alt="Logo">
                                        <span
                                            class="ml-2 font-averialibre text-orange-800 text-2xl">{{ $category->name }}
                                            Series</span>
                                    </div>
                                    <div class="flex space-x-2 items-center">
                                        <a class="text-blue-500" href="/admin/series/{{ $category->id }}/edit">
                                            <p class="ml-4 mr-4 font-averialibre text-orange-800 text-2xl">Edit</p>
                                        </a>
                                        <form class="my-auto" action="/admin/series/{{ $category->id }}/delete" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="text-red-500">
                                                <p class="ml-4 mr-4 font-averialibre text-redx text-2xl">Delete</p>
                                            </button>
                                        </form>

                                    </div>
                                </li>
                                @foreach ($category->menus as $menu)
                                    <li
                                        class="flex justify-between items-center bg-[#FAC774] border-solid border-4 border-[#F1A03C] p-2 rounded-2xl md:ml-8 mx-4 md:mx-0 flex-col md:flex-row">
                                        <div class="flex items-center">
                                            <img class="object-cover h-14 transform scale-x-[-1] -translate-y-2 mt-2"
                                                src="/images/ikan.webp" alt="Logo">
                                            <span
                                                class="ml-2 font-averialibre text-orange-800 text-2xl">{{ $menu->name }}</span>
                                        </div>
                                        <div class="flex space-x-2">
                                            <a class="text-blue-500" href="/admin/menu/{{ $menu->id }}/edit">
                                                <p class="ml-4 mr-4 font-averialibre text-orange-800 text-2xl">Edit</p>
                                            </a>
                                            <form action="/admin/menu/{{ $menu->id }}/delete" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="text-red-500">
                                                    <p class="ml-4 mr-4 font-averialibre text-redx text-2xl">Delete</p>
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                @endforeach
                            @endforeach
                            <!-- Add more items as needed -->
                        </ul>
                    </div>

                    <div class="w-full md:w-[50%] rounded-2xl border-solid border-4 border-[#F1A03C] mt-6 bg-[#FAC774] simplebar order-first md:order-last">
                    <ul class="mt-4 mb-4 ml-4 mr-4 space-y-2">
                        <p class="w-full flex justify-center m-4 col-span-1 text-4xl tracking-wide truncate font-averialibre text-orange-800">Edit Franchise
                        </p>
                        <!-- Dummy data, replace with dynamic data in a real application -->
                        
                         <li
                            class="flex justify-between items-center bg-[#FAC774] border-solid border-4 border-orange-700 p-2 rounded-2xl max-w-[1100px] flex-col md:flex-row">
                            <div class="flex items-center">
                                <img class="object-cover h-14 transform scale-x-[-1] -translate-y-2 mt-2"
                                    src="/images/ikan.webp" alt="Logo">
                                <span class="ml-2 font-averialibre text-orange-800 text-3xl">Paket 1</span>
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
