<body>
    <x-app-layout>

        <!-- component -->
        <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
            <livewire:layout.admin-nav />

            <div
                class="flex-auto min-h-screen bg-[#FFDBA3] md:pt-0 pt-20 flex md:justify-start justify-center items-center md:items-stretch flex-col">
                <!-- Dummy Content on the Right Sidebar -->
                <form action="/admin/dashboard/create-menu" method="POST" enctype="multipart/form-data" class="ml-0 md:ml-64 p-3 md:p-8 ">
                    @csrf
                    <div class="flex">
                        <p class="text-5xl font-averialibre text-orange-800">Tambah Rasa</p>
                    </div>
                    <div class="rounded-2xl border-solid border-4 border-[#F1A03C] my-6 bg-[#FAC774] overflow-y-auto">
                        <div class="m-4">
                            <div class="mt-1 flex items-center">
                                <label for="name"
                                    class="block text-2xl font-averialibre text-orange-800 md:ml-4">Nama
                                    Menu</label>
                                <div class="flex pt-4 w-full">
                                    <input type="text" id="name" name="name"
                                        class="p-2 bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] md:ml-10 font-averialibre placeholder-orange-700">
                                </div>

                            </div>
                        </div>
                        <div class="m-4">
                            <div class="mt-1 flex items-center">
                                <label for="category_id"
                                    class="block text-2xl font-averialibre text-orange-800 md:ml-4">Nama
                                    Series</label>

                                <div class="flex pt-4 w-full">
                                    <select name="category_id" id=""
                                        class="w-48 p-2 bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] md:ml-10 font-averialibre">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600">
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex mb-4 justify-center mt-4">
                            <button
                                class="bg-[#F1A03C] rounded-[20px] border-solid border-4 border-[#945E3D] flex items-center justify-center w-36 mr-4">
                                <a href="{{ route('admin-dashboard') }}"
                                    class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl text-center">Cancel</a>
                            </button>
                            <button type="submit"
                                class="bg-[#FDED87] rounded-[20px] border-solid border-4 border-[#945E3D] flex items-center justify-center w-36 mr-4 ml-4 font-averialibre text-orange-800 text-3xl text-center">
                                Save
                            </button>
                        </div>
                    </div>

                </form>
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
