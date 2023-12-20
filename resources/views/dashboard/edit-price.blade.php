<body>
    <x-app-layout>

        <!-- component -->
        <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
            <livewire:layout.admin-nav />

            <div
                class="flex-auto min-h-screen w-full bg-[#FFDBA3] pt-20 flex md:justify-start justify-center items-center md:items-stretch flex-col md:pl-80 md:pr-20">
                <div class="flex">
                    <p class="text-5xl font-averialibre text-orange-800">Edit Harga Bulk</p>
                </div>
                @if (session()->has('success'))
                    {{-- <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div> --}}
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mt-4 rounded relative w-fit"
                        role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif
                @if (session()->has('error'))
                    {{-- <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div> --}}
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mt-4 rounded relative w-fit"
                        role="alert">
                        <strong class="font-bold">Error!</strong>
                        <span class="block sm:inline">{{ session('error') }}</span>
                    </div>
                @endif
                <div class="rounded-2xl border-solid border-4 border-[#F1A03C] my-6 bg-[#FAC774] flex flex-wrap w-full">
                    @foreach ($prices as $price)
                        <form action="/admin/price/{{ $price->id }}/update" class="p-4 w-full"
                            enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('put')
                            <div class="mt-1 flex justify-start items-center w-full">
                                <label for="price"
                                    class="block text-2xl font-averialibre text-orange-800 md:ml-4">{{ $price->name }}</label>
                                <div class="flex p-4">
                                    <p>{{ $price->description }}</p>
                                </div>
                                <div class="flex pt-4">
                                    <input type="number" id="price" name="price" value="{{ $price->price }}"
                                        class="p-2 bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] md:ml-10 font-averialibre placeholder-orange-700">
                                </div>
                                <button type="submit"
                                    class="bg-[#FDED87] rounded-[20px] border-solid border-4 border-[#945E3D] h-12 w-24 flex items-center justify-center mr-4 ml-4 font-averialibre text-orange-800 text-xl text-center">
                                    Update
                                </button>
                            </div>
                        </form>
                    @endforeach
                    <div class="flex mb-4 justify-center mt-4 w-full">
                        <button
                            class="bg-[#F1A03C] rounded-[20px] border-solid border-4 border-[#945E3D] flex items-center justify-center w-36 mr-4">
                            <a href="{{ route('admin-dashboard') }}"
                                class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl text-center">Cancel</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
