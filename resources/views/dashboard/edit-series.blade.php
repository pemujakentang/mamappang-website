

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
                </div>

                <form action="/admin/series/{{$category->id}}/update" method="POST" enctype="multipart/form-data" class="rounded-2xl border-solid border-4 border-[#F1A03C] my-6 bg-[#FAC774] overflow-y-auto">
                    @csrf
                    @method('put')
                    <div class="p-3 md:p-8">

                        <!-- Add more items as needed -->
                        <div class="rounded-2xl my-6 bg-[#FAC774] overflow-y-auto py-4">
                            <div class="px-2 flex items-center">
                                <label for="name" class="block text-2xl font-averialibre text-orange-800 ml-4">Nama Series</label>
                                <input type="text" id="name" name="name" class="p-2 w-[200px] bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] ml-2 md:ml-10 font-averialibre placeholder-orange-700" value="{{ old('name', $category->name)}}">
                            </div>
                        </div>
                        <div class="flex mb-4 justify-center mt-4">
                            <button class="bg-[#F1A03C] rounded-[20px] border-solid border-4 border-[#945E3D] flex items-center justify-center w-36 mr-4">
                                <a href="{{ route('menu-edit') }}" class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl text-center">Cancel</a>
                            </button>
                            <button type="submit" class="bg-[#FDED87] rounded-[20px] border-solid border-4 border-[#945E3D] flex items-center justify-center w-36 ml-4 mr-4 font-averialibre text-orange-800 text-3xl text-center">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </x-app-layout>
</body>