<body class="bg-[#FF6400]">
    <x-app-layout>
        <livewire:layout.navigation />
        <div
            class="mx-auto my-auto overflow-y-hidden relative overflow-x-hidden flex flex-col items-center bg-[#FF6400]">

            <!--Whatsapp button-->
            <div id="button1"
                class="fixed bottom-12 end-4 md:bottom-8 md:end-20 flex justify-center items-center z-20 animate-move-y-fast ">
                <a href="" class="no-underline hover:scale-[1.1] duration-1">
                    <button
                        class="rounded-[100%] h-[5.5rem] md:h-28 aspect-square bg-orange-300 border-orange-700 p-6 font-bold border-4">
                        <img class="object-cover" src="/images/whatsapp.webp" alt="Logo">
                    </button>
                </a>
            </div>

            <div class="h-screen relative">

                <img class="absolute h-96 z-10 -right-56 bottom-10 mt-6 animate-wiggle opacity-70"
                    src="/images/awan.webp" alt="Logo">
                <img class="absolute h-96 z-10 -left-60 -bottom-32 animate-wiggle opacity-70" src="/images/awan.webp"
                    alt="Logo">
                <div class="absolute h-80 z-10 left-20 top-32 animate-move-x">
                    <img class="animate-move-y opacity-70 h-80" src="/images/awan.webp" alt="Logo">
                </div>

                <!-- home -->
                <div id="home" class="flex flex-col items-center relative z-10 h-full justify-center md:-mt-20">
                    <!-------->
                    <div class="flex flex-col md:ml-28 md:flex-row w-[90%] mt-2 justify-center">
                        <div class="w-full md:-mx-20 md:w-[50%] flex flex-col justify-center">
                            <p class="  text-yellow-900 text-[8rem] font-black font-blackhansans tracking-tighter text-center"
                                style="-webkit-text-stroke: 3.5px white; line-height:1;">
                                Join The Family!</p>
                            <p class="mt-6 text-center text-orange-300 text-4xl font-black font-averialibre"
                                style="-webkit-text-stroke:1px #ab5000;">Best
                                Bungeoppang in Town!</p>
                        </div>
                        <div class="w-full md:w-[60%]">
                            <div class="w-full flex items-center justify-center mx-auto mb-10 md:mb-4">
                                <img class="object-cover" src="/images/logo2.webp" alt="Logo">
                            </div>
                        </div>
                    </div>
                    <!---------->
                </div>

                <div class="flex bottom-5 md:bottom-10 absolute z-10 w-full items-center justify-center pb-5">
                    <a href="#franchise-list" class="no-underline">
                        <button href=""
                            class="flex h-16 rounded-full border-2 border-yellow-800 bg-orange-300 items-center justify-center px-6 hover:scale-[1.2] duration-75">
                            <p class="text-orange-800 font-averialibre text-2xl mr-2 ml-3">View Franchise Packages</p>
                            <div class="w-8 flex items-center justify-center">
                                <img class="object-cover h-3" src="/images/arrow.webp" alt="Logo">
                            </div>
                        </button>
                    </a>
                </div>

            </div>

            <div class="w-full">
                <div class="fixed w-screen z-0 scale-[1.7] lg:-mt-56 md:-mt-48">
                    <img class="object-cover animate-spin-slow" src="/images/cahaya.webp" alt="Logo">
                </div>
            </div>

            <!-- section - menu -->
            <div id="franchise-list" class="w-full justify-center z-10 py-12 bg-orange-500">
                <div class="flex flex-col gap-6 mb-12">
                    @php
                        $count = 0;
                    @endphp

                    @foreach ($packages as $package)
                        @if ($count++ % 2 == 0)
                            <div class="flex flex-row md:gap-10 flex-wrap justify-center">
                                <div
                                    class="md:h-48 w-[90%] md:w-[50%] bg-orange-200 rounded-[15px] border-4 border-orange-600 flex flex-col p-4">
                                    <div class="text-black text-[32px] font-normal font-averialibre">
                                        {{ $package->title }}</div>
                                    <div class="flex flex-wrap flex-row justify-between h-full">
                                        <div class="flex flex-row">
                                            <img class="w-[30%] md:w-[141px] h-20 object-cover  scale-x-[-1] "
                                                src="/images/ikan.webp" />
                                            <div
                                                class="w-[50%] h-fit max-h-16 md:max-h-48 md:w-auto md:h-[60%] mx-4 text-black text-md font-normal font-averialibre overflow-hidden white text-ellipsis">
                                                {!! $package->description !!}
                                            </div>
                                        </div>
                                        <div class="hover:scale-[1.2] duration-75 w-[184px]">
                                            <div
                                                class="h-[39px] bg-[#E16F25] rounded-[53.44px] border-2 border-orange-700">
                                                <button id="open-btn"
                                                    class="open-btn w-[183px] h-[34px] text-center text-white text-2xl font-normal font-averialibre"
                                                    x-data=""
                                                    x-on:click.prevent="$dispatch('open-modal', '{{ 'detail-modal' . $count }}')">
                                                    See Details
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-col relative w-80">
                                    <p
                                        class="absolute font-averialibre text-white text-3xl z-10 right-0 bg-[#FF0000] px-5 py-1 rounded-tr-[15px] rounded-bl-[15px]">
                                        Rp {{ $package->price }}</p>
                                    <img class="w-full h-48 rounded-[15px] shadow border-4 border-orange-600 object-cover"
                                        src="{{ asset('storage/' . $package->image) }}" />
                                </div>
                            </div>
                        @else
                            <div class="flex flex-row md:gap-10 flex-wrap-reverse justify-center">
                                <div class="flex-col relative w-80">
                                    <p
                                        class="absolute font-averialibre text-white text-3xl z-10 right-0 bg-[#FF0000] px-5 py-1 rounded-tr-[15px] rounded-bl-[15px]">
                                        Rp {{ $package->price }}</p>
                                    <img class="w-full h-48 rounded-[15px] shadow border-4 border-orange-600 object-cover"
                                        src="{{ asset('storage/' . $package->image) }}" />
                                </div>
                                <div
                                    class="md:h-48 w-[90%] md:w-[50%] bg-orange-200 rounded-[15px] border-4 border-orange-600 flex flex-col p-4">
                                    <div class="text-black text-[32px] font-normal font-averialibre">
                                        {{ $package->title }}</div>
                                    <div class="flex flex-wrap flex-row justify-between h-full">
                                        <div class="flex flex-row">
                                            <img class="w-[30%] md:w-[141px] h-20 object-cover  scale-x-[-1] "
                                                src="/images/ikan.webp" />
                                            <div
                                                class="w-[50%] h-fit max-h-16 md:max-h-48 md:w-auto md:h-[60%] mx-4 text-black text-md font-normal font-averialibre overflow-hidden white text-ellipsis">
                                                {!! $package->description !!}
                                            </div>
                                        </div>
                                        <div class="hover:scale-[1.2] duration-75 w-[184px]">
                                            <div
                                                class="h-[39px] bg-[#E16F25] rounded-[53.44px] border-2 border-orange-700">
                                                <button id="open-btn"
                                                    class="open-btn w-[183px] h-[34px] text-center text-white text-2xl font-normal font-averialibre"
                                                    x-data=""
                                                    x-on:click.prevent="$dispatch('open-modal', '{{ 'detail-modal' . $count }}')">
                                                    See Details
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <x-modal name="{{ 'detail-modal' . $count }}" :show="$errors->isNotEmpty()" focusable class="z-50">
                            <div
                                class="border-4 w-full h-full md:h-fit px-5 md:px-7 pt-7 pb-5 overflow-scroll bg-orange-500 border-orange-800 flex flex-col relative overflow-x-hidden mx-auto md:justify-center md:items-center ">
                                <button x-on:click="$dispatch('close')"
                                    class="flex absolute cursor-pointer rotate-45 right-5 top-2 font-averialibrebold text-5xl scale-[1.3] text-orange-800 hover:text-orange-950">+</button>

                                <div class="mx-auto w-full md:p-2">
                                    <p class="text-black text-5xl font-black font-averialibre">
                                        {{ $package->title }}
                                    </p>
                                    <p class="text-yellow-800 text-3xl mt-2 font-black font-averialibre">
                                        Rp. {{ $package->price }}</p>
                                    <div
                                        class="flex flex-col md:flex-row w-full justify-center md:items-start items-center md:justify-between my-3 md:my-5 ">
                                        <div
                                            class="flex-col font-averialibre text-white text-md font-black md:w-[50%] w-full gap-y-2">
                                            {!! $package->description !!}
                                        </div>
                                        <div class="flex-col md:order-last order-first md:w-[50%] w-full">
                                            <img class="rounded-2xl border-4 border-orange-700 w-[80%] md:w-auto md:max-h-96 mx-auto object-cover"
                                                src="{{ asset('storage/' . $package->image) }}" alt="">
                                        </div>
                                    </div>

                                    <p
                                        class="font-averialibre text-orange-800 w-full flex justify-end items-end pr-8 -mb-4 mt-6 md:mt-10">
                                        ingin tahu lebih lanjut?</p>

                                    <div
                                        class="mt-4 flex justify-center items-center flex-col md:flex-row w-full gap-2">
                                        <button id="franchise-btn" x-data=""
                                            x-on:click.prevent="$dispatch('close'); $dispatch('open-modal', '{{ 'form-modal' }}')"
                                            class="h-16 w-full md:w-[60%] text-white font-averialibre text-2xl rounded-full border-2 border-yellow-800 bg-orange-400 items-center justify-center hover:scale-[1.125] duration-75 p-2">
                                            Daftar Jadi Franchise
                                        </button>
                                        <button id="contact-btn"
                                            class="md:order-last order-first h-16 w-full md:w-[40%] text-white font-averialibre text-2xl rounded-full border-2 border-yellow-800 bg-orange-400 items-center justify-center hover:scale-[1.125] duration-75 p-2">
                                            Contact Us
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </x-modal>
                    @endforeach
                </div>

                <form action="/franchise/add" method="post" enctype="multipart/form-data" class="z-50">
                    @csrf
                    <x-modal name="{{ 'form-modal' }}" :show="$errors->isNotEmpty()" focusable>
                        <div class="bg-[#FFDBA3] shadow p-4">

                            <button x-on:click="$dispatch('close')" type="button"
                                class="absolute top-4 right-8 text-[#992300] text-4xl font-bold focus:outline-none">
                                &times;
                            </button>

                            <div class="text-yellow-800 text-4xl font-normal font-averialibre">
                                Franchise Form
                            </div>

                            <div class="mt-6 flex flex-col md:flex-row justify-between mx-4">
                                <label for="" class="block  text-2xl font-averialibre text-[#992300]">Pilih
                                    Paket</label>
                                <select id="package_id" name="package_id"
                                    class="@error('package_id') border-red-500 @enderror w-[56%] mt-1  bg-[#FAC774] rounded-2xl border-solid border-2 border-[#992300]">
                                    @foreach ($packages as $package)
                                        <option value="{{ $package->id }}">{{ $package->title }}</option>
                                    @endforeach
                                </select>

                            </div>
                            @error('package_id')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror

                            <div class="mt-6 flex flex-col md:flex-row justify-between mx-4">
                                <label for=""
                                    class="block  text-2xl font-averialibre text-[#992300]">Alamat</br>(Pribadi)</label>
                                <input type="text" id="domisili" name="domisili"
                                    class="@error('domisili') border-red-500 @enderror w-[56%] mt-1  bg-[#FAC774] rounded-2xl border-solid border-2 border-[#992300]">

                            </div>
                            @error('domisili')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror

                            <div class="mt-6 flex flex-col md:flex-row justify-between mx-4 ">
                                <label for="nama_bisnis" class="text-2xl font-averialibre text-[#992300]">Nama
                                    Bisnis</label>
                                <input type="text" id="nama_bisnis" name="nama_bisnis"
                                    class="@error('nama_bisnis') border-red-500 @enderror w-[56%]  mt-1 bg-[#FAC774] rounded-2xl border-solid border-2 border-[#992300]">

                            </div>
                            @error('nama_bisnis')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror

                            <div class="mt-6 flex flex-col md:flex-row justify-between mx-4 ">
                                <label for="address"
                                    class="text-2xl font-averialibre text-[#992300]">Alamat</br>(Franchise)</label>
                                <input type="text" id="address" name="address"
                                    class="@error('address') border-red-500 @enderror w-[56%]  mt-1 bg-[#FAC774] rounded-2xl border-solid border-2 border-[#992300]">

                            </div>
                            @error('address')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror

                            <div class="mt-6 flex flex-col md:flex-row justify-between mx-4 ">
                                <label for="keterangan"
                                    class=" mr-1 text-2xl font-averialibre text-[#992300]">Keterangan</label>
                                <textarea type="text" id="keterangan" name="keterangan"
                                    class="@error('keterangan') border-red-500 @enderror md:w-[56%] mt-1 bg-[#FAC774] rounded-2xl border-solid border-2 border-[#992300] h-14"> </textarea>

                            </div>
                            @error('keterangan')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror

                            <button id="book-franchise"
                                class="mx-12 mt-6 w-[85%] h-14 bg-[#f1a03c] text-[#992300] font-black font-averialibre text-2xl rounded-2xl border-2 border-orange-700 hover:scale-[1.1] duration-75"
                                x-data=""
                                x-on:click.prevent="$dispatch('open-modal', '{{ 'confirm-modal' }}')">
                                Book Franchise
                            </button>
                        </div>
                    </x-modal>
                    <!-- Modal Reminder Notification -->
                    <x-modal class="bg-none" name="{{ 'confirm-modal' }}" :show="$errors->isNotEmpty()" focusable>
                        <div
                            class="w-[450px] h-[335px] mx-auto my-60 relative bg-[#b9480f] border-[2px] border-solid border-[#5C3623] rounded-[10px] shadow">
                            <button x-on:click="$dispatch('close')" type="button"
                                class="absolute top-4 right-8 text-white text-4xl font-bold focus:outline-none">
                                &times;
                            </button>
                            <div class="mx-[12.85rem] translate-y-6 text-5xl text-white">
                                ⓘ
                            </div>
                            <div class="mx-8 mt-10 text-xl text-white text-center font-averialibre">
                                Perlu diingat bahwa pengajuan franchise membutuhkan follow up dari tim Mamappang
                                sebelum
                                dapat
                                diproses
                                lebih lanjut.
                            </div>
                            <button
                                class="mx-9 mt-6 w-[85%] h-14 bg-[#f1a03c] text-[#992300] font-black font-averialibre text-2xl rounded-2xl border-2 border-orange-700 hover:scale-[1.1] duration-75"
                                type="submit" x-on:click="$dispatch('close')">
                                Kirim Pengajuan Franchise
                            </button>
                        </div>
                    </x-modal>
                </form>
                @if (session()->has('success'))
                    <!-- Modal Request Sent Notification -->
                    <div class="fixed h-full z-10 inset-0 bg-gray-600 bg-opacity-50 w-full" id="notification"
                        class="z-50">
                        <div
                            class="w-[450px] h-[335px] mx-auto my-60 relative bg-[#b9480f] border-[2px] border-solid border-[#5C3623] rounded-[10px] shadow">
                            <button type="button" id="closenotif"
                                class="absolute top-4 right-8 text-white text-4xl font-bold focus:outline-none">
                                &times;
                            </button>
                            <div class="w-[12%] mx-[12.4rem] mt-6 ">
                                <img src="/images/done.webp" alt="">
                            </div>
                            <div class="mx-8 mt-3 text-xl text-white text-center font-averialibre">
                                REQUEST SENT!
                                <br>
                                <br>
                                Check your email or your dashboard page for further updates!
                            </div>
                            <a href="/my-dashboard">
                                <button id="check-order-btn"
                                    class="mx-[2.85rem] mt-10 w-[80%] h-14 bg-[#f1a03c] text-[#992300] font-black font-averialibre text-2xl rounded-2xl border-2 border-orange-700 hover:scale-[1.1] duration-75">
                                    Check My Dashboard
                                </button>
                            </a>
                        </div>
                    </div>
                    <script>
                        // Function to close the modal
                        function closeModal() {
                            var modal = document.getElementById('notification');
                            modal.style.display = 'none';
                        }

                        // Add event listener to the close button
                        var closeButton = document.querySelector('#closenotif');
                        if (closeButton) {
                            closeButton.addEventListener('click', function() {
                                closeModal();
                            });
                        }
                    </script>
                @endif

                <button onclick="openForm()" href=""
                    class="mx-auto mb-20 flex h-16 w-[90%] md:w-72 rounded-full border-2 border-yellow-800 bg-orange-400 items-center justify-center mt-3 hover:scale-[1.2] duration-75">
                    <p class="text-white font-averialibre text-3xl mx-5">Contact Us</p>
                </button>

                <!-- footer -->
                <div class="w-full flex flex-col -mb-12 z-10 px-5 md:px-3 md:pl-7 py-7"
                    style="background-image: url('/images/background-menu.webp');">
                    <p class="text-orange-800 font-averialibre text-3xl md:text-4xl mb-3">Mamappang - Best In Town</p>
                    <p class="text-orange-800 font-averialibre text-lg md:text-xl w-full md:w-[70%] text-justify mb-6">
                        mammapang is Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit
                        esse
                        cillum dolore eu fugiat nulla pariatur. </p>
                    <p class="text-orange-800 font-averialibrebold text-xl md:text-2xl mb-1">In collaboration with :
                    </p>
                    <div class="flex">
                        <div class="w-28 md:w-42 flex items-center justify-center">
                            <img class="object-cover" src="/images/umn.webp" alt="Logo">
                        </div>
                        <div class="w-28 md:w-42 flex items-center justify-center ml-3">
                            <img class="object-cover" src="/images/logo.webp" alt="Logo">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </x-app-layout>
</body>
