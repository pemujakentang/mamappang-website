<body class="bg-[#FF6400]">
    <x-app-layout>
        <livewire:layout.navigation />
        <div
            class="mx-auto my-auto overflow-y-hidden relative overflow-x-hidden flex flex-col items-center bg-[#FF6400] mt-10 md:mt-0">

            <div class="w-[90%]">
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
                <p class="font-averialibre text-5xl text-orange-900 my-2 mt-6 pl-4">ORDER STATUS</p>
                <form action="/my-dashboard" id="filterFormOrder" method="POST">
                    @csrf
                    <select name="filterOrder" id="" onchange="submitFormOrder()"
                        class="w-32 p-2 bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] mx-1 font-averialibre">
                        <option disabled selected value>Filter</option>
                        <option @if (session('filterOrder') == 'ALL') selected @endif
                            class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600"
                            value="ALL">ALL</option>
                        <option @if (session('filterOrder') == 'PENDING') selected @endif
                            class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600"
                            value="PENDING">PENDING</option>
                        <option @if (session('filterOrder') == 'AWAITING PAYMENT') selected @endif
                            class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600"
                            value="AWAITING PAYMENT">AWAITING PAYMENT</option>
                        <option @if (session('filterOrder') == 'PENDING PAYMENT') selected @endif
                            class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600"
                            value="PENDING PAYMENT">PENDING PAYMENT</option>
                        <option @if (session('filterOrder') == 'CONFIRMED') selected @endif
                            class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600"
                            value="CONFIRMED">CONFIRMED</option>
                        <option @if (session('filterOrder') == 'SHIPPING') selected @endif
                            class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600"
                            value="SHIPPING">SHIPPING</option>
                        <option @if (session('filterOrder') == 'ARRIVED') selected @endif
                            class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600"
                            value="ARRIVED">ARRIVED</option>
                        <option @if (session('filterOrder') == 'FINISHED') selected @endif
                            class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600"
                            value="FINISHED">FINISHED</option>
                        <option @if (session('filterOrder') == 'CANCELED') selected @endif
                            class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600"
                            value="CANCELED">CANCELED</option>
                        <option @if (session('filterOrder') == 'REJECTED') selected @endif
                            class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600"
                            value="REJECTED">REJECTED</option>
                    </select>
                    <select name="sortOrder" id="" onchange="submitFormOrder()"
                        class="w-32 p-2 bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] mx-1 font-averialibre">
                        <option disabled selected value>Sort</option>
                        <option @if (session('sortOrder') == 'OLDEST') selected @endif
                            class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600"
                            value="OLDEST">OLDEST</option>
                        <option @if (session('sortOrder') == 'NEWEST') selected @endif
                            class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600"
                            value="NEWEST">NEWEST</option>
                    </select>
                    <button hidden type="submit"></button>
                </form>
                <script>
                    function submitFormOrder() {
                        document.getElementById("filterFormOrder").submit();
                    }
                </script>
                <div
                    class="w-full p-5 rounded-2xl bg-orange-300 flex-row flex gap-x-2 overflow-x-scroll  md:h-[26.5rem]">
                    @foreach ($preorders as $preorder)
                        <div>
                            <div
                                class="w-full h-full md:w-96 md:h-96 bg-orange-800 rounded-2xl  p-4 justify-between flex flex-col border-4 border-orange-500">
                                <div class="flex flex-row justify-between items-center">
                                    <p class="w-1/2 font-averialibre text-4xl md:text-5xl text-orange-300">ORD
                                        {{ $preorder->id }}</p>
                                    <!-- status -->
                                    <p class="font-averialibre text-2xl text-orange-300 text-end">
                                        {{ $preorder->status }}</p>
                                </div>
                                <p class="font-averialibre text-orange-300 text-4xl my-6">{{ $preorder->total_qty }}
                                    Bungeoppang</p>
                                <div class="flex flex-row gap-x-2 items-center">
                                    <div class="w-auto">
                                        <p class="font-averialibre text-2xl text-orange-300">Order Placed:
                                            {{ date_format($preorder->created_at, 'Y/m/d') }}</p>
                                        <p class="font-averialibre text-2xl text-orange-300">Shipment Date:
                                            {{ $preorder->tanggal_pesanan }}</p>
                                        <p class="font-averialibre text-2xl text-orange-300">Total price: Rp. {{ number_format($preorder->total_price, 0, ',', '.') }}</p>
                                    </div>
                                    {{-- <div class="w-auto">
                                        <p class="font-averialibre text-2xl text-orange-300">:</p>
                                        <p class="font-averialibre text-2xl text-orange-300">:</p>
                                        <p class="font-averialibre text-2xl text-orange-300">:</p>
                                    </div>
                                    <div class="w-auto">
                                        <p class="font-averialibre text-2xl text-orange-300">
                                            {{ date_format($preorder->created_at, 'Y/m/d') }}</p>
                                        <p class="font-averialibre text-2xl text-orange-300">
                                            {{ $preorder->tanggal_pesanan }}</p>
                                        <p class="font-averialibre text-2xl text-orange-300">Rp. {{ number_format($preorder->total_price, 0, ',', '.') }}</p>
                                    </div> --}}
                                </div>
                                <button x-data=""
                                    x-on:click.prevent="$dispatch('open-modal', '{{ 'detail-modal-preorder' . $preorder->id }}')"
                                    class="border-2 mt-3 rounded-xl hover:bg-orange-400 hover:border-orange-800 border-orange-900 bg-orange-600 font-averialibre text-2xl px-2 w-full py-2 h-16 text-center hover:text-orange-700 text-orange-300">
                                    <p class=" font-averialibre text-4xl ">Lihat detail</p>
                                </button>
                            </div>
                        </div>
                        <x-modal name="{{ 'detail-modal-preorder' . $preorder->id }}" :show="$errors->isNotEmpty()" focusable
                            class="z-50">
                            <div
                                class="border-4 rounded-3xl h-fit px-5 md:px-7 pb-5 pt-12 overflow-scroll bg-orange-800 border-orange-500 flex flex-col relative overflow-x-hidden justify-center">

                                <button x-on:click="$dispatch('close')"
                                    class="flex absolute cursor-pointer rotate-45 right-5 top-2 font-averialibrebold text-5xl scale-[1.3] text-orange-300 hover:text-orange-950">+</button>

                                <div class="flex flex-row justify-between items-center">
                                    <!-- order id -->
                                    <p class="font-averialibre text-5xl text-orange-300">#ORD {{ $preorder->id }}</p>
                                    <!-- status -->
                                    <p class="font-averialibre text-2xl text-orange-300">{{ $preorder->status }}</p>
                                </div>

                                <div
                                    class="flex flex-wrap gap-x-2 my-4 px-4 py-2 font-averialibre text-xl bg-orange-900 w-full rounded-xl text-orange-300">
                                    <p class="font-averialibre text-lg md:text-2xl text-orange-300">Status</p>
                                    <p class="font-averialibre text-lg md:text-2xl text-orange-300">:</p>
                                    <!-- wordingan bakal ganti di setiap status -->
                                    @if ($preorder->status == 'PENDING')
                                        <p class="font-averialibre text-lg md:text-2xl text-orange-400">Menunggu
                                            konfirmasi admin</p>
                                    @elseif ($preorder->status == 'AWAITING PAYMENT')
                                        <p class="font-averialibre text-lg md:text-2xl text-orange-400">Menunggu
                                            pembayaran</p>
                                    @elseif ($preorder->status == 'PAYMENT')
                                        <p class="font-averialibre text-lg md:text-2xl text-orange-400">Menunggu
                                            konfirmasi
                                            pembayaran</p>
                                    @elseif ($preorder->status == 'CONFIRMED')
                                        <p class="font-averialibre text-lg md:text-2xl text-orange-400">Pengajuan
                                            diterima, pesanan diproses</p>
                                    @elseif ($preorder->status == 'ARRIVED')
                                        <p class="font-averialibre text-lg md:text-2xl text-orange-400">Pesanan sampai
                                        </p>
                                    @elseif ($preorder->status == 'FINISHED')
                                        <p class="font-averialibre text-lg md:text-2xl text-orange-400">Pesanan selesai
                                        </p>
                                    @elseif ($preorder->status == 'CANCELED')
                                        <p class="font-averialibre text-lg md:text-2xl text-orange-400">Pengajuan
                                            dibatalkan</p>
                                    @elseif ($preorder->status == 'REJECTED')
                                        <p class="font-averialibre text-lg md:text-2xl text-orange-400">Pengajuan
                                            ditolak</p>
                                    @else
                                        <p class="font-averialibre text-lg md:text-2xl text-orange-400">Unknown</p>
                                    @endif
                                    @if ($preorder->message)
                                        <p class="w-full font-averialibre text-md text-orange-200">
                                            {{ $preorder->message }}
                                        </p>
                                    @endif
                                </div>

                                <div class="flex flex-col rounded-xl bg-orange-200 p-1 gap-y-1">

                                    <div class="px-4 py-2 flex-col flex bg-orange-700 rounded-xl">
                                        <!-- pas shipping, ini diganti jadi detail driver -->
                                        <div class="flex flex-row py-2">
                                            <div class="w-auto">
                                                <p class="font-averialibre text-lg md:text-2xl text-orange-300">
                                                    Alamat Pengiriman</p>
                                            </div>
                                            <div class="w-auto">
                                                <p class="font-averialibre text-lg md:text-2xl text-orange-300 mx-5">
                                                    :</p>
                                            </div>
                                            <div class="w-auto">
                                                <p class="font-averialibre text-lg md:text-2xl text-orange-400">Jl
                                                    {{ $preorder->shipment_address }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-row py-2">
                                            <div class="w-auto">
                                                <p class="font-averialibre text-lg md:text-2xl text-orange-300">
                                                    Tanggal Kirim</p>
                                            </div>
                                            <div class="w-auto">
                                                <p class="font-averialibre text-lg md:text-2xl text-orange-300 mx-5">
                                                    :</p>
                                            </div>
                                            <div class="w-auto">
                                                <p class="font-averialibre text-lg md:text-2xl text-orange-400">
                                                    {{ $preorder->tanggal_pesanan }}</p>
                                            </div>
                                        </div>
                                        <div class="flex flex-row py-2">
                                            <div class="w-auto">
                                                <p class="font-averialibre text-lg md:text-2xl text-orange-300">
                                                    Tanggal Pesan</p>
                                            </div>
                                            <div class="w-auto">
                                                <p class="font-averialibre text-lg md:text-2xl text-orange-300 mx-5">
                                                    :</p>
                                            </div>
                                            <div class="w-auto">
                                                <p
                                                    class="font-averialibre text-lg md:text-2xl text-orange-400 max-h-40 overflow-scroll">
                                                    {{ date_format($preorder->created_at, 'Y/m/d') }}</p>
                                            </div>
                                        </div>
                                        <div class="flex flex-row py-2">
                                            <div class="w-auto">
                                                <p class="font-averialibre text-lg md:text-2xl text-orange-300">
                                                    Harga Total</p>
                                            </div>
                                            <div class="w-auto">
                                                <p class="font-averialibre text-lg md:text-2xl text-orange-300 mx-5">
                                                    :</p>
                                            </div>
                                            <div class="w-auto">
                                                <p
                                                    class="font-averialibre text-lg md:text-2xl text-orange-400 max-h-40 overflow-scroll">Rp. {{ number_format($preorder->total_price, 0, ',', '.') }}</p>
                                            </div>
                                        </div>
                                        <div class="flex flex-row py-2">
                                            <div class="w-auto">
                                                <p class="font-averialibre text-lg md:text-2xl text-orange-300">
                                                    Jumlah Total</p>
                                            </div>
                                            <div class="w-auto">
                                                <p class="font-averialibre text-lg md:text-2xl text-orange-300 mx-5">
                                                    :</p>
                                            </div>
                                            <div class="w-auto">
                                                <p
                                                    class="font-averialibre text-lg md:text-2xl text-orange-400 max-h-40 overflow-scroll">
                                                    {{ $preorder->total_qty }}</p>
                                            </div>
                                        </div>
                                        @if ($preorder->bill)
                                            <div class="flex flex-row py-2">
                                                <div class="w-auto">
                                                    <p class="font-averialibre text-lg md:text-2xl text-orange-300">
                                                        Ongkir</p>
                                                </div>
                                                <div class="w-auto">
                                                    <p
                                                        class="font-averialibre text-lg md:text-2xl text-orange-300 mx-5">
                                                        :</p>
                                                </div>
                                                <div class="w-auto">
                                                    <p
                                                        class="font-averialibre text-lg md:text-2xl text-orange-400 max-h-40 overflow-scroll">
                                                        {{ $preorder->bill->shipping }}</p>
                                                </div>
                                            </div>
                                            <div class="flex flex-row py-2">
                                                <div class="w-auto">
                                                    <p class="font-averialibre text-lg md:text-2xl text-orange-300">
                                                        Total</p>
                                                </div>
                                                <div class="w-auto">
                                                    <p
                                                        class="font-averialibre text-lg md:text-2xl text-orange-300 mx-5">
                                                        :</p>
                                                </div>
                                                <div class="w-auto">
                                                    <p
                                                        class="font-averialibre text-lg md:text-2xl text-orange-400 max-h-40 overflow-scroll">
                                                        {{ $preorder->bill->total }}</p>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    <!-- setelah approve, button diganti jadi "hubungi via whatsapp" -->
                                    @if ($preorder->status == 'PENDING')
                                        <div
                                            class="rounded-xl px-4 py-6 flex-col md:flex-row flex bg-orange-400 gap-y-3 md:gap-y-0 gap-x-2">
                                            <button x-data=""
                                                x-on:click.prevent="$dispatch('open-modal', '{{ 'warning-modal-preorder' . $preorder->id }}')"
                                                class="border-2 rounded-xl hover:bg-orange-500 hover:border-orange-800 border-orange-900 bg-orange-800 font-averialibre text-2xl px-2 w-full py-2 h-16 text-center hover:text-orange-700 text-orange-300">
                                                <p class=" font-averialibre text-2xl md:text-4xl ">Batalkan
                                                    Pengajuan
                                                </p>
                                            </button>
                                        </div>
                                    @elseif ($preorder->status == 'AWAITING PAYMENT')
                                        <form action="/bill/{{ $preorder->bill->id }}/pay" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div
                                                class="rounded-xl px-4 py-6 flex-col flex bg-orange-400 gap-y-3 md:gap-y-0 gap-x-2">
                                                <input class="my-2" type="file" id="fileInput" accept="image/*"
                                                    name="image" onchange="previewImage()" required>
                                                <p class="font-averialibrebold text-xl">KETERANGAN</p>
                                                <textarea required type="text" name="keterangan"
                                                    class="p-2 w-[90%] bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] font-averialibre placeholder-orange-700"></textarea>
                                                <button type="submit"
                                                    class="border-2 rounded-xl my-2 hover:bg-orange-500 hover:border-orange-800 border-orange-900 bg-orange-800 font-averialibre text-2xl px-2 w-full py-2 h-16 text-center hover:text-orange-700 text-orange-300">
                                                    <p class=" font-averialibre text-4xl ">Bayar</p>
                                                </button>
                                                <img id="imagePreview" class="w-48 object-contain object-center">
                                            </div>
                                        </form>
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
                                    @elseif ($preorder->status == 'SHIPPING')
                                        <div class="px-4 py-2 flex-col flex bg-orange-700 rounded-xl">
                                            <!-- pas shipping, ini diganti jadi detail driver -->
                                            <div class="flex flex-row py-2">
                                                <div class="w-auto">
                                                    <p class="font-averialibre text-lg md:text-2xl text-orange-300">
                                                        Layanan Pengiriman</p>
                                                </div>
                                                <div class="w-auto">
                                                    <p
                                                        class="font-averialibre text-lg md:text-2xl text-orange-300 mx-5">
                                                        :</p>
                                                </div>
                                                <div class="w-auto">
                                                    <p class="font-averialibre text-lg md:text-2xl text-orange-400">
                                                        {{ $preorder->shipment->service_provider }}
                                                    </p>
                                                </div>
                                            </div>
                                            @if ($preorder->shipment->driver)
                                                <div class="flex flex-row py-2">
                                                    <div class="w-auto">
                                                        <p
                                                            class="font-averialibre text-lg md:text-2xl text-orange-300">
                                                            Nama Driver</p>
                                                    </div>
                                                    <div class="w-auto">
                                                        <p
                                                            class="font-averialibre text-lg md:text-2xl text-orange-300 mx-5">
                                                            :</p>
                                                    </div>
                                                    <div class="w-auto">
                                                        <p
                                                            class="font-averialibre text-lg md:text-2xl text-orange-400">
                                                            {{ $preorder->shipment->driver }}</p>
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($preorder->shipment->plat)
                                                <div class="flex flex-row py-2">
                                                    <div class="w-auto">
                                                        <p
                                                            class="font-averialibre text-lg md:text-2xl text-orange-300">
                                                            Plat Nomor</p>
                                                    </div>
                                                    <div class="w-auto">
                                                        <p
                                                            class="font-averialibre text-lg md:text-2xl text-orange-300 mx-5">
                                                            :</p>
                                                    </div>
                                                    <div class="w-auto">
                                                        <p
                                                            class="font-averialibre text-lg md:text-2xl text-orange-400">
                                                            {{ $preorder->shipment->plat }}</p>
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($preorder->shipment->no_hp)
                                                <div class="flex flex-row py-2">
                                                    <div class="w-auto">
                                                        <p
                                                            class="font-averialibre text-lg md:text-2xl text-orange-300">
                                                            Nomor HP</p>
                                                    </div>
                                                    <div class="w-auto">
                                                        <p
                                                            class="font-averialibre text-lg md:text-2xl text-orange-300 mx-5">
                                                            :</p>
                                                    </div>
                                                    <div class="w-auto">
                                                        <p
                                                            class="font-averialibre text-lg md:text-2xl text-orange-400">
                                                            {{ $preorder->shipment->no_hp }}</p>
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($preorder->shipment->link)
                                                <div class="flex flex-row py-2">
                                                    <div class="w-auto">
                                                        <p
                                                            class="font-averialibre text-lg md:text-2xl text-orange-300">
                                                            Link Lacak</p>
                                                    </div>
                                                    <div class="w-auto">
                                                        <p
                                                            class="font-averialibre text-lg md:text-2xl text-orange-300 mx-5">
                                                            :</p>
                                                    </div>
                                                    <div class="w-auto">
                                                        <p
                                                            class="font-averialibre text-lg md:text-2xl text-orange-400">
                                                            {{ $preorder->shipment->link }}</p>
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($preorder->shipment->keterangan)
                                                <div class="flex flex-row py-2">
                                                    <div class="w-auto">
                                                        <p
                                                            class="font-averialibre text-lg md:text-2xl text-orange-300">
                                                            Keterangan</p>
                                                    </div>
                                                    <div class="w-auto">
                                                        <p
                                                            class="font-averialibre text-lg md:text-2xl text-orange-300 mx-5">
                                                            :</p>
                                                    </div>
                                                    <div class="w-auto">
                                                        <p
                                                            class="font-averialibre text-lg md:text-2xl text-orange-400">
                                                            {{ $preorder->shipment->keterangan }}</p>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        <div
                                            class="rounded-xl px-4 py-6 flex-col md:flex-row flex bg-orange-400 gap-y-3 md:gap-y-0 gap-x-2">
                                            <form class="w-full"
                                                action="/preorder/{{ $preorder->id }}/finish-shipment" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <button type="submit"
                                                    class="border-2 rounded-xl hover:bg-orange-500 hover:border-orange-800 border-orange-900 bg-orange-800 font-averialibre text-2xl px-2 w-full py-2 h-16 text-center hover:text-orange-700 text-orange-300">
                                                    <p class=" font-averialibre text-4xl ">Pengiriman Selesai</p>
                                                </button>
                                            </form>
                                        </div>
                                    @else
                                        <div
                                            class="rounded-xl px-4 py-6 flex-col md:flex-row flex bg-orange-400 gap-y-3 md:gap-y-0 gap-x-2">
                                            <a href="https://wa.me/6285161610765" target="_"
                                                class="border-2 rounded-xl hover:bg-orange-500 hover:border-orange-800 border-orange-900 bg-orange-800 font-averialibre text-xl px-2 w-full py-2 h-16 text-center hover:text-orange-700 text-orange-300">
                                                <p class="font-averialibre md:text-4xl ">Hubungi via Whatsapp</p>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </x-modal>
                        <x-modal name="{{ 'warning-modal-preorder' . $preorder->id }}" :show="$errors->isNotEmpty()" focusable
                            class="z-50">
                            <div
                                class="border-4 rounded-3xl h-96 p-7 overflow-scroll bg-orange-700 border-orange-900 flex flex-col items-center justify-between overflow-x-hidden">
                                <p class="text-orange-300 font-averialibre text-5xl">ⓘ</p>
                                <p class="text-orange-300 font-averialibre text-2xl md:text-3xl text-justify mb-3">
                                    Apakah anda yakin
                                    ingin menghapus pengajuan preorder?</p>
                                <button x-on:click="$dispatch('close')"
                                    class="mx-1 border-2 rounded-xl hover:bg-orange-800 hover:border-orange-300 border-orange-900 bg-orange-400 font-averialibre text-2xl px-2  w-full py-1 h-16 text-center hover:text-orange-300 text-orange-700">
                                    <p class="font-averialibre text-2xl ">TIDAK</p>
                                </button>
                                <form action="/preorder/{{ $preorder->id }}/cancel" enctype="multipart/form-data"
                                    class="w-full" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="border-2 rounded-xl hover:bg-orange-400 hover:border-orange-800 border-orange-900 bg-orange-800 font-averialibre text-2xl w-full py-1 h-16 text-center hover:text-orange-700 text-orange-300">
                                        <p class="font-averialibre text-2xl ">YA</p>
                                    </button>
                                </form>
                            </div>
                        </x-modal>
                    @endforeach
                    {{-- <!-- order 1 // pending -->
                    <div>
                        <div
                            class="w-96 h-96 bg-orange-800 rounded-2xl  p-4 justify-between flex flex-col border-4 border-orange-500">
                            <div class="flex flex-row justify-between items-center">
                                <p class="font-averialibre text-5xl text-orange-300">#ORD1</p>
                                <!-- status -->
                                <p class="font-averialibre text-2xl text-orange-300">pending</p>
                            </div>
                            <p class="font-averialibre text-orange-300 text-4xl my-6">39 Bungeoppang</p>
                            <div class="flex flex-row gap-x-2 items-center">
                                <div class="w-auto">
                                    <p class="font-averialibre text-2xl text-orange-300">Order date</p>
                                    <p class="font-averialibre text-2xl text-orange-300">Payment</p>
                                    <p class="font-averialibre text-2xl text-orange-300">Total price</p>
                                </div>
                                <div class="w-auto">
                                    <p class="font-averialibre text-2xl text-orange-300">:</p>
                                    <p class="font-averialibre text-2xl text-orange-300">:</p>
                                    <p class="font-averialibre text-2xl text-orange-300">:</p>
                                </div>
                                <div class="w-auto">
                                    <p class="font-averialibre text-2xl text-orange-300">12-12-2023</p>
                                    <p class="font-averialibre text-2xl text-orange-300">not paid</p>
                                    <p class="font-averialibre text-2xl text-orange-300">Rp. 180,000</p>
                                </div>
                            </div>
                            <button onclick="openStatus()"
                                class="border-2 mt-3 rounded-xl hover:bg-orange-400 hover:border-orange-800 border-orange-900 bg-orange-600 font-averialibre text-2xl px-2 w-full py-2 h-16 text-center hover:text-orange-700 text-orange-300">
                                <p class=" font-averialibre text-4xl ">Lihat detail</p>
                            </button>
                        </div>
                    </div> --}}
                </div>

                <p class="font-averialibre text-5xl text-orange-900 my-2 mt-6 pl-4">FRANCHISE STATUS</p>
                <form action="/my-dashboard" id="filterFormFranchise" method="POST">
                    @csrf
                    <select name="filterFranchise" id="" onchange="submitFormFranchise()"
                        class="w-32 p-2 bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] mx-1 font-averialibre">
                        <option disabled selected value>Filter</option>
                        <option @if (session('filterFranchise') == 'ALL') selected @endif
                            class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600"
                            value="ALL">ALL</option>
                        <option @if (session('filterFranchise') == 'PENDING') selected @endif
                            class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600"
                            value="PENDING">PENDING</option>
                        <option @if (session('filterFranchise') == 'CONFIRMED') selected @endif
                            class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600"
                            value="CONFIRMED">CONFIRMED</option>
                        <option @if (session('filterFranchise') == 'CANCELED') selected @endif
                            class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600"
                            value="CANCELED">CANCELED</option>
                        <option @if (session('filterFranchise') == 'REJECTED') selected @endif
                            class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600"
                            value="REJECTED">REJECTED</option>
                    </select>
                    <select name="sortFranchise" id="" onchange="submitFormFranchise()"
                        class="w-32 p-2 bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] mx-1 font-averialibre">
                        <option disabled selected value>Sort</option>
                        <option @if (session('sortFranchise') == 'OLDEST') selected @endif
                            class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600"
                            value="OLDEST">OLDEST</option>
                        <option @if (session('sortFranchise') == 'NEWEST') selected @endif
                            class="block px-4 py-2 text-orange-800 hover:bg-[#FDED87] hover:text-orange-600"
                            value="NEWEST">NEWEST</option>
                    </select>
                    <button hidden type="submit"></button>
                </form>
                <script>
                    function submitFormFranchise() {
                        document.getElementById("filterFormFranchise").submit();
                    }
                </script>
                <div class="w-full p-5 rounded-2xl bg-orange-300 flex-row flex gap-x-2 overflow-x-auto h-[26.5rem]">
                    @foreach ($franchises as $franchise)
                        <!-- franchise 1 // pending -->
                        <div>
                            <div
                                class="w-72 h-[400px] md:w-96 md:h-96 bg-orange-800 rounded-2xl  p-4 justify-between flex flex-col border-4 border-orange-500">
                                <div class="flex flex-row justify-between items-center">
                                    <p class="font-averialibre text-3xl md:text-5xl text-orange-300">FRC {{ $franchise->id }}</p>
                                    <!-- status -->
                                    <p class="font-averialibre text-2xl text-orange-300">{{ $franchise->status }}</p>
                                </div>
                                <p class="font-averialibre text-orange-300 text-4xl my-6">
                                    {{ $franchise->package->title }}</p>
                                <div class="flex gap-x-2 flex-wrap items-center">
                                    <div class="w-full flex flex-wrap md:flex-row">
                                        <p class="font-averialibre text-2xl text-orange-300">Tanggal: </p>
                                        <p class="text-white font-averialibre text-2xl">
                                            {{ date_format($franchise->created_at, 'Y/m/d') }}</p>
                                    </div>
                                    <div class="w-full flex flex-wrap md:flex-row">
                                        <p class="font-averialibre text-2xl text-orange-300">Nama Bisnis: </p>
                                        <p class="text-white font-averialibre text-2xl">{{ $franchise->nama_bisnis }}
                                        </p>
                                    </div>
                                </div>
                                <p class="font-averialibre text-lg text-orange-300 h-12 overflow-scroll text-ellipsis">
                                    Keterangan: {{ $franchise->keterangan }}</p>
                                <button x-data=""
                                    x-on:click.prevent="$dispatch('open-modal', '{{ 'detail-modal-franchise' . $franchise->id }}')"
                                    class="border-2 mt-3 rounded-xl hover:bg-orange-400 hover:border-orange-800 border-orange-900 bg-orange-600 px-2 w-full py-2 h-16 text-center hover:text-orange-700 text-orange-300 font-averialibre text-4xl ">
                                    Lihat detail
                                </button>
                            </div>
                        </div>
                        <x-modal name="{{ 'detail-modal-franchise' . $franchise->id }}" :show="$errors->isNotEmpty()" focusable
                            class="z-50">
                            <div
                                class="border-4 rounded-3xl h-fit px-5 md:px-7 pb-5 pt-12 overflow-scroll bg-orange-800 border-orange-500 flex flex-col relative overflow-x-hidden justify-center">

                                <button x-on:click="$dispatch('close')"
                                    class="flex absolute cursor-pointer rotate-45 right-5 top-2 font-averialibrebold text-5xl scale-[1.3] text-orange-300 hover:text-orange-950">+</button>

                                <div class="flex flex-row justify-between items-center">
                                    <!-- order id -->
                                    <p class="font-averialibre text-5xl text-orange-300">#FRC {{ $franchise->id }}</p>
                                    <!-- status -->
                                    <p class="font-averialibre text-2xl text-orange-300">{{ $franchise->status }}</p>
                                </div>

                                <div
                                    class="flex flex-wrap gap-x-2 my-4 px-4 py-2 font-averialibre text-xl bg-orange-900 w-full rounded-xl text-orange-300">
                                    <p class="font-averialibre text-lg md:text-2xl text-orange-300">Status:</p>
                                    <!-- wordingan bakal ganti di setiap status -->
                                    @if ($franchise->status == 'PENDING')
                                        <p class="font-averialibre text-lg md:text-2xl text-orange-400">Menunggu
                                            konfirmasi admin</p>
                                    @elseif ($franchise->status == 'CONFIRMED')
                                        <p class="font-averialibre text-lg md:text-2xl text-orange-400">Pengajuan
                                            diterima</p>
                                    @elseif ($franchise->status == 'CANCELLED')
                                        <p class="font-averialibre text-lg md:text-2xl text-orange-400">Pengajuan
                                            dibatalkan</p>
                                    @elseif ($franchise->status == 'REJECTED')
                                        <p class="font-averialibre text-lg md:text-2xl text-orange-400">Pengajuan
                                            ditolak</p>
                                    @else
                                        <p class="font-averialibre text-lg md:text-2xl text-orange-400">Unknown</p>
                                    @endif
                                    @if ($franchise->message)
                                        <p class="w-full font-averialibre text-md text-orange-200">
                                            {{ $franchise->message }}
                                        </p>
                                    @endif
                                </div>

                                <div class="flex flex-col rounded-xl bg-orange-200 p-1 gap-y-1">
                                    <div class="rounded-xl px-4 py-2 flex-col flex bg-orange-900">
                                        <p class="font-averialibre text-3xl text-orange-300">Paket:
                                            {{ $franchise->package->title }}</p>
                                        <div class="font-averialibre text-sm text-orange-300">
                                            {!! $franchise->package->description !!}
                                        </div>
                                    </div>
                                    <div class="px-4 py-2 flex-col flex bg-orange-700 rounded-xl">
                                        <!-- pas shipping, ini diganti jadi detail driver -->
                                        <div class="flex flex-row py-2">
                                            <div class="w-auto">
                                                <p class="font-averialibre text-lg md:text-2xl text-orange-300">
                                                    Alamat pribadi</p>
                                            </div>
                                            <div class="w-auto">
                                                <p class="font-averialibre text-lg md:text-2xl text-orange-300 mx-5">
                                                    :</p>
                                            </div>
                                            <div class="w-auto">
                                                <p class="font-averialibre text-lg md:text-2xl text-orange-400">Jl
                                                    {{ $franchise->domisili }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-row py-2">
                                            <div class="w-auto">
                                                <p class="font-averialibre text-lg md:text-2xl text-orange-300">
                                                    Alamat franchise</p>
                                            </div>
                                            <div class="w-auto">
                                                <p class="font-averialibre text-lg md:text-2xl text-orange-300 mx-5">
                                                    :</p>
                                            </div>
                                            <div class="w-auto">
                                                <p class="font-averialibre text-lg md:text-2xl text-orange-400">Jl
                                                    {{ $franchise->address }}</p>
                                            </div>
                                        </div>
                                        <div class="flex flex-row py-2">
                                            <div class="w-auto">
                                                <p class="font-averialibre text-lg md:text-2xl text-orange-300">
                                                    Keterangan</p>
                                            </div>
                                            <div class="w-auto">
                                                <p class="font-averialibre text-lg md:text-2xl text-orange-300 mx-5">
                                                    :</p>
                                            </div>
                                            <div class="w-auto">
                                                <p
                                                    class="font-averialibre text-lg md:text-2xl text-orange-400 max-h-40 overflow-scroll">
                                                    {{ $franchise->keterangan }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- setelah approve, button diganti jadi "hubungi via whatsapp" -->
                                    @if ($franchise->status == 'PENDING')
                                        <div
                                            class="rounded-xl px-4 py-6 flex-col md:flex-row flex bg-orange-400 gap-y-3 md:gap-y-0 gap-x-2">
                                            <button x-data=""
                                                x-on:click.prevent="$dispatch('open-modal', '{{ 'warning-modal-franchise' . $franchise->id }}')"
                                                class="border-2 rounded-xl hover:bg-orange-500 hover:border-orange-800 border-orange-900 bg-orange-800 font-averialibre text-2xl px-2 w-full py-2 h-16 text-center hover:text-orange-700 text-orange-300">
                                                <p class=" font-averialibre text-2xl md:text-4xl ">Batalkan
                                                    Pengajuan
                                                </p>
                                            </button>
                                        </div>
                                    @else
                                        <div
                                            class="rounded-xl px-4 py-6 flex-col md:flex-row flex bg-orange-400 gap-y-3 md:gap-y-0 gap-x-2">
                                            <a href="https://wa.me/6285161610765" target="_"
                                                class="border-2 rounded-xl hover:bg-orange-500 hover:border-orange-800 border-orange-900 bg-orange-800 font-averialibre text-xl px-2 w-full py-2 h-16 text-center hover:text-orange-700 text-orange-300">
                                                <p class="font-averialibre md:text-4xl ">Hubungi via Whatsapp</p>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </x-modal>
                        <x-modal name="{{ 'warning-modal-franchise' . $franchise->id }}" :show="$errors->isNotEmpty()" focusable
                            class="z-50">
                            <div
                                class="border-4 rounded-3xl h-96 p-7 overflow-scroll bg-orange-700 border-orange-900 flex flex-col items-center justify-between overflow-x-hidden">
                                <p class="text-orange-300 font-averialibre text-5xl">ⓘ</p>
                                <p class="text-orange-300 font-averialibre text-2xl md:text-3xl text-justify mb-3">
                                    Apakah anda yakin
                                    ingin menghapus pengajuan franchise?</p>
                                <button x-on:click="$dispatch('close')"
                                    class="mx-1 border-2 rounded-xl hover:bg-orange-800 hover:border-orange-300 border-orange-900 bg-orange-400 font-averialibre text-2xl px-2  w-full py-1 h-16 text-center hover:text-orange-300 text-orange-700">
                                    <p class="font-averialibre text-2xl ">TIDAK</p>
                                </button>
                                <form action="/franchise/{{ $franchise->id }}/cancel" enctype="multipart/form-data"
                                    class="w-full" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="border-2 rounded-xl hover:bg-orange-400 hover:border-orange-800 border-orange-900 bg-orange-800 font-averialibre text-2xl w-full py-1 h-16 text-center hover:text-orange-700 text-orange-300">
                                        <p class="font-averialibre text-2xl ">YA</p>
                                    </button>
                                </form>
                            </div>
                        </x-modal>
                    @endforeach
                </div>
            </div>
            @if (session()->has('success'))
                <!-- Modal Request Sent Notification -->
                <div class="fixed h-full z-10 inset-0 bg-gray-600 bg-opacity-50 w-full" id="notification"
                    class="z-50">
                    <div
                        class="md:w-[500px] h-fit mx-auto my-32 py-4 md:my-60 relative bg-[#b9480f] border-[2px] border-solid border-[#5C3623] rounded-[10px] shadow">
                        <button type="button" id="closenotif"
                            class="absolute top-4 right-8 text-white text-4xl font-bold focus:outline-none">
                            &times;
                        </button>
                        <div class="w-full flex justify-center h-12 mt-6 ">
                            <img src="/images/done.webp" alt="">
                        </div>
                        <div class="mx-8 mt-3 text-xl text-white text-center font-averialibre">
                            {{ session('success') }}
                        </div>
                        <button id="check-order-btn" onclick="closeModal()"
                            class="mx-[2.85rem] mt-10 w-[80%] h-14 bg-[#f1a03c] text-[#992300] font-black font-averialibre text-2xl rounded-2xl border-2 border-orange-700 hover:scale-[1.1] duration-75">
                            Close
                        </button>
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

            <!-- footer -->
            <div class="w-full flex flex-col z-10 px-5 md:px-3 md:pl-7 py-7 mt-10"
                style="background-image: url('/images/background-menu.webp');">
                <p class="text-orange-800 font-averialibre text-3xl md:text-4xl mb-3">Mamappang - Best In Town</p>
                <p class="text-orange-800 font-averialibre text-lg md:text-xl w-full md:w-[70%] text-justify mb-6">
                    Contact us
                    <br>
                    mamappang.bungeoppang@gmail.com
                    <br>
                    0851-6161-0765
                    <br>
                    Tangerang Selatan
                </p>
                <p class="text-orange-800 font-averialibrebold text-xl md:text-2xl mb-1">In collaboration with :</p>
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
    </x-app-layout>
</body>
