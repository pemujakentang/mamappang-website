<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <x-app-layout>
        <!-- component -->
        <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
            <livewire:layout.admin-nav />

            <div
                class="flex-auto bg-[#FFDBA3] md:pt-0 pt-8 flex justify-center items-center md:pl-48">

                <div class="justify-center flex w-full flex-wrap mt-8">

                        <p class="text-4xl md:text-5xl font-averialibre text-orange-800">Edit Franchise Package</p>
                    <form action="/admin/package/{{ $package->id }}/update"
                        class="rounded-2xl border-solid border-4 border-[#F1A03C] my-6 bg-[#FAC774] p-4 w-[90%] md:w-[75%] "
                        enctype="multipart/form-data" method="post">
                        @csrf
                        @method('put')
                        <div class="mt-1 flex flex-col md:flex-row md:justify-between justify-center items-center">
                            <label for="image" class="block text-2xl font-averialibre text-orange-800">Image</label>
                            <div class="flex flex-col md:flex-row w-full md:w-3/4">
                                <span
                                    class="h-44 w-full md:w-44 overflow-hidden bg-gray-100 rounded-2xl border-solid border-2 mt-2 border-[#945E3D]">
                                    <!-- Preview Image -->
                                    <img id="imagePreview" class="h-full w-full object-contain object-center"
                                        src="{{ asset('storage/' . $package->image) }}">
                                </span>
                                <input type="hidden" name="old_image" value="{{ $package->image }}">
                                <input type="file" id="fileInput" accept="image/*" name="image"
                                    onchange="previewImage()">
                            </div>
                        </div>
                        @error('image')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror

                        <div class="mt-6 flex flex-col md:flex-row justify-between">
                            <label for="title" class="block text-2xl font-averialibre text-orange-800">Package
                                Title</label>
                            <input type="text" id="title" name="title"
                                class="@error('title') border-red-500 @enderror md:w-3/4 mt-1 p-2 bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D]"
                                value="{{ old('title', $package->title) }}">
                        </div>
                        @error('title')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror

                        <div class="mt-6 flex flex-col md:flex-row justify-between">
                            <label for="price" class="block text-2xl font-averialibre text-orange-800">Price</label>
                            <input type="number" id="price" name="price"
                                class="@error('price') border-red-500 @enderror md:w-3/4 mt-1 p-2 bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D]"
                                value="{{ old('price', $package->price) }}">
                        </div>
                        @error('price')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror

                        <div class="mt-6">
                            <label for="description"
                                class="block text-2xl font-averialibre text-orange-800">Description</label>
                            <input id="x" type="hidden" name="description"
                                value="{{ old('description', $package->description) }}">
                            <div class="bg-white p-2 rounded">
                                <trix-editor class="@error('description') border-red-500 @enderror  "
                                    input="x"></trix-editor>
                            </div>
                            @error('description')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="flex mb-4 justify-center mt-6 gap-4">

                            <a href="{{ route('admin-dashboard') }}"
                                class="mx-4 font-averialibre text-orange-800 text-3xl text-center bg-[#F1A03C] rounded-[20px] border-solid border-4 border-[#945E3D] flex items-center justify-center w-36">
                                Cancel
                            </a>
                            <button type="submit"
                                class="bg-[#FDED87] rounded-[20px] border-solid border-4 border-[#945E3D] flex items-center justify-center w-36 font-averialibre text-orange-800 text-3xl text-center px-4">
                                Save
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <script>
            function previewImage() {
                var fileInput = document.getElementById('fileInput');
                var imagePreview = document.getElementById('imagePreview');

                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        imagePreview.src = e.target.result;
                    }

                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        </script>
        <script src="{{ asset('js/attachments.js') }}"></script>
        <style>
            .attachment img {
                height: 400px;
                width: auto;
            }

            .attachment {
                display: flex;
                justify-content: center;
            }
        </style>
    </x-app-layout>
</body>
