<body>
    <x-app-layout>
    <!-- component -->
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
        <livewire:layout.admin-nav />

        <div class="flex-auto min-h-screen bg-[#FFDBA3] pt-20 md:pt-0">
            <!-- Dummy Content on the Right Sidebar -->
            <div class="md:ml-64 p-8 ">
                <div class="flex md:flex-row flex-col items-center w-full md:justify-between">
                    <p class="text-5xl font-averialibre text-orange-800">Franchises</p>
                    <div class="mt-4">
                        <a href="{{ route('franchise-create') }}"
                            class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl bg-[#FAC774] rounded-2xl border-solid border-2 border-[#945E3D] flex items-center h-16 px-2">
                            Add New
                        </a>
                    </div>
                </div>
                @if (session()->has('success'))
                    {{-- <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div> --}}
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 my-4 rounded relative w-fit"
                        role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif
                <div class="rounded-2xl border-solid border-4 border-[#F1A03C] mt-6 mb-6 bg-[#FAC774] mr-2 simplebar">
                    <ul class="mt-4 mb-4 ml-4 mr-4 space-y-2">
                        <!-- Dummy data, replace with dynamic data in a real application -->
                        @foreach ($packages as $package)
                            <li
                                class="flex justify-between items-center bg-[#FAC774] border-solid border-4 border-orange-700 p-2 rounded-2xl flex-col md:flex-row">
                                <div class="flex items-center">
                                    <img class="object-cover h-14 transform scale-x-[-1] -translate-y-2 mt-2"
                                        src="/images/ikan.webp" alt="Logo">
                                    <span
                                        class="ml-2 font-averialibre text-orange-800 text-3xl">{{ $package->title }}</span>
                                </div>
                                <div class="flex space-x-2 items-center">
                                    <a href="/admin/package/{{ $package->id }}/edit"
                                        class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl">Edit
                                    </a>
                                    <form action="/admin/package/{{ $package->id }}/delete" method="post" class="my-auto">
                                        @method('delete')
                                        @csrf
                                        <button type="submit"
                                            class="text-red-500 ml-4 mr-4 font-averialibre text-3xl">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                        {{-- <li
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
                        </li> --}}



                        <!-- Add more items as needed -->
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <script src="https://unpkg.com/simplebar@5.3.0/dist/simplebar.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new SimpleBar(document.querySelector('.simplebar'));
        });
    </script>
    </x-app-layout>
</body>

