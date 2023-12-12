<body>
    <x-app-layout>
        <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
            <livewire:layout.admin-nav />
            <div class="flex-auto min-h-screen bg-[#FFDBA3] pt-20 md:pt-0">
                <!-- Dummy Content on the Right Sidebar -->
                <div class="md:ml-64 p-8 ">
                    <div class="flex md:flex-row flex-col items-center w-full md:justify-between">
                        <div
                            class="col-span-2 lg:col-span-1 text-3xl lg:text-5xl tracking-wide truncate font-averialibre text-orange-800">
                            Order Status</div>
                    </div>
                    @if (session()->has('success'))
                        {{-- <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div> --}}
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 my-4 rounded relative w-fit"
                            role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif
                    <div
                        class="p-4 lg:p-8 grid grid-cols-1 lg:grid-cols-2 gap-4 border border-solid border-[#F1A03C] rounded-2xl bg-[#b9480f] overflow-y-auto">
                        @foreach ($preorders as $preorder)
                            <!-- Dummy data, replace with dynamic data in a real application -->
                            <div
                                class="bg-[#f1a03c] border-solid border-4 border-[#F1A03C] p-4 lg:p-6 rounded-2xl mb-4">
                                <!-- Item 1 -->
                                <div class="flex justify-between items-center mb-8 lg:mb-16">
                                    <div class="flex items-center">
                                        <span
                                            class="ml-2 font-averialibre text-orange-800 text-3xl lg:text-5xl uppercase"
                                            style="-webkit-text-stroke: 0.5px rgba(255,255,255,0.8);">ODR
                                            {{ $preorder->id }}</span>
                                    </div>
                                    <span class="ml-2 font-averialibre text-orange-800 text-3xl lg:text-5xl uppercase"
                                        style="-webkit-text-stroke: 0.5px rgba(255,255,255,0.8);">{{ $preorder->status }}</span>
                                </div>

                                <!-- Item 2 -->
                                <div class="flex justify-between items-center">
                                    <div class="flex flex-col items-start">
                                        <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Nama:
                                            {{ $preorder->user->firstname }} {{ $preorder->user->lastname }}</span>
                                        <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Alamat
                                            Kirim: {{ $preorder->shipment_address }}</span>
                                        <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Tanggal
                                            Kirim: {{ $preorder->tanggal_pesanan }}</span>
                                    </div>
                                    <a href="#"
                                        class="ml-2 font-averialibre text-orange-800 text-xl lg:text-3xl underline flex justify-between items-center bg-[#FAC774] border-solid border-4 border-[#ad713e] p-2 rounded-2xl max-w-[1100px]"
                                        onclick="{{ 'togglemodal' . $preorder->id . '()' }}">View Details</a>
                                </div>
                            </div>
                            <!-- Modal container using plain JavaScript -->
                            <div id="{{ 'modal' . $preorder->id }}"
                                class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 hidden overflow-y-scroll flex justify-center items-center ">
                                <div class="h-full overflow-scroll py-4 flex justify-center pt-10 md:pt-0">
                                    <div
                                        class="bg-[#b9480f] text-orange-800 p-4 rounded-2xl border border-solid border-[#F1A03C] max-w-[90%] lg:max-w-[500px]">
                                        <div class="flex justify-between items-center mb-4">
                                            <span class="ml-2 font-averialibre text-[#FAC774] text-4xl ">Order
                                                #{{ $preorder->id }}</span>
                                            <span
                                                class="mr-2 font-averialibre text-[#FAC774] text-4xl self-end">{{ $preorder->status }}</span>
                                        </div>
                                        <div class="flex justify-center items-center rounded-2xl ">
                                            <div class="flex flex-col w-[400px]">
                                                <div
                                                    class="w-full h-auto bg-[#5c3623] rounded-t-lg flex justify-center items-center">
                                                    <div class="font-averialibre text-[#fac774] text-left p-2">
                                                        <p class="text-lg font-bold">{{ $preorder->total_qty }}
                                                            Bungeoppang
                                                        </p>
                                                        <div class="flex flex-wrap">
                                                            @foreach ($preorder->details as $detail)
                                                                <span class="mr-4">• {{ $detail->qty }}
                                                                    {{ $detail->menu->name }} </span>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="{{ 'blueSection' . $preorder->id }}"
                                                    class="font-averialibre w-full h-auto bg-[#945e3d] flex justify-start items-start">
                                                    <!-- Content for the Blue section -->
                                                    <div id="{{ 'blueSection' . $preorder->id }}Content"
                                                        font-averialibre class="text-[#fac774] text-left p-2">
                                                        <p><span class="font-bold">Nama:</span>
                                                            {{ $preorder->user->firstname }}
                                                            {{ $preorder->user->lastname }}</p>
                                                        <p><span class="font-bold">No:</span>
                                                            {{ $preorder->user->no_telp }}</p>
                                                        <p><span class="font-bold">Alamat:</span>
                                                            {{ $preorder->shipment_address }}</p>
                                                        <p><span class="font-bold">Tanggal Pemesanan: </span>
                                                            {{ date_format($preorder->created_at, 'Y/m/d') }}</p>
                                                        <p><span class="font-bold">Tanggal Kirim: </span>
                                                            {{ $preorder->tanggal_pesanan }}</p>
                                                        <p><span class="font-bold">Harga Sementara:</span>
                                                            Rp. {{ number_format($preorder->total_price, 0, ',', '.') }}</p>
                                                    </div>
                                                </div>
                                                @if ($preorder->status == 'PENDING')
                                                    <div id="{{ 'greenSection' . $preorder->id }}"
                                                        class="font-averialibre w-full h-auto bg-[#fac774] rounded-b-lg p-4">
                                                        <!-- Content for the green section -->
                                                        <div id="{{ 'greenSection' . $preorder->id }}Content"
                                                            font-averialibre
                                                            class="flex-1 flex items-center justify-between">
                                                            <p id="{{ 'questionText' . $preorder->id }}"
                                                                class="text-orange-800 text-justify">Terima
                                                                Pesanan?</p>
                                                            <div id="{{ 'buttonContainer' . $preorder->id }}"
                                                                class="flex justify-between items-center mt-2">
                                                                <a href="/admin/billing/{{ $preorder->id }}">
                                                                    <button
                                                                        class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#f1a03c] text-[#b9480f] rounded-full h-[35px] w-[100px] border border-[#b9480f]">Terima</button>
                                                                </a>
                                                                <a href="/preorders/{{ $preorder->id }}/rejectform">
                                                                    <button
                                                                        class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#fded87] text-[#b9480f] rounded-full h-[35px] w-[100px] border border-[#b9480f]">Tidak</button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div id="{{ 'replacementContent' . $preorder->id }}"
                                                            class="hidden">
                                                            <!-- Content will be replaced based on button clicks -->
                                                        </div>
                                                    </div>
                                                @elseif ($preorder->status == 'AWAITING PAYMENT')
                                                    <div id="{{ 'greenSection' . $preorder->id }}"
                                                        class="font-averialibre w-full h-auto bg-[#fac774] rounded-b-lg p-4">
                                                        <!-- Content for the green section -->
                                                        <div id="{{ 'greenSection' . $preorder->id }}Content"
                                                            font-averialibre
                                                            class="flex-1 flex items-center justify-between">
                                                            <p id="{{ 'questionText' . $preorder->id }}"
                                                                class="text-orange-800 text-justify">Menunggu Pembayaran
                                                            </p>
                                                        </div>
                                                    </div>
                                                @elseif ($preorder->status == 'PAYMENT')
                                                    <div id="{{ 'greenSection' . $preorder->id }}"
                                                        class="font-averialibre w-full h-auto bg-[#fac774] rounded-b-lg p-4">
                                                        <!-- Content for the green section -->
                                                        <div id="{{ 'greenSection' . $preorder->id }}Content"
                                                            font-averialibre
                                                            class="flex-1 flex items-center justify-between">
                                                            <p id="{{ 'questionText' . $preorder->id }}"
                                                                class="text-orange-800 text-justify">Bukti Pembayaran
                                                            </p>
                                                            <a href="{{ asset('storage/' . $preorder->payment->image) }}"
                                                                target="_">
                                                                <img class="h-64"
                                                                    src="{{ asset('storage/' . $preorder->payment->image) }}"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <form class="w-full flex justify-center my-2"
                                                            action="/preorder/{{ $preorder->id }}/confirm-payment"
                                                            method="POST">
                                                            @csrf
                                                            <button type="submit"
                                                                class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#fded87] text-[#b9480f] rounded-full border border-[#b9480f] p-2">Konfirmasi
                                                                Pembayaran</button>
                                                        </form>
                                                        <a class="flex justify-center" href="/preorders/{{ $preorder->id }}/rejectform">
                                                            <button 
                                                                class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#fded87] text-[#b9480f] rounded-full border border-[#b9480f] p-2">Tolak
                                                                Pembayaran</button>
                                                        </a>
                                                    </div>
                                                @elseif ($preorder->status == 'CONFIRMED')
                                                    <div id="{{ 'greenSection' . $preorder->id }}"
                                                        class="font-averialibre w-full h-auto bg-[#fac774] rounded-b-lg p-4">
                                                        <form class="w-full flex flex-wrap justify-center my-2"
                                                            action="/preorder/{{ $preorder->id }}/ship" method="POST">
                                                            @csrf
                                                            <!-- Prevent implicit submission of the form -->
                                                            <button type="submit" disabled style="display: none"
                                                                aria-hidden="true"></button>
                                                            <div class="mt-1 flex items-center w-full">
                                                                <label for="name"
                                                                    class="block text-xl w-[40%] font-averialibre text-orange-800 md:ml-4">Layanan</label>
                                                                <div class="flex pt-4 w-full">
                                                                    <input type="text" id="name" required
                                                                        placeholder="Gojek, Anteraja, dsb."
                                                                        name="service_provider"
                                                                        class="p-2 bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] md:ml-10 font-averialibre placeholder-orange-500">
                                                                </div>
                                                            </div>
                                                            <div class="mt-1 flex items-center w-full">
                                                                <label for="name"
                                                                    class="block text-xl w-[40%] font-averialibre text-orange-800 md:ml-4">Nama
                                                                    Driver</label>
                                                                <div class="flex pt-4 w-full">
                                                                    <input type="text" id="name"
                                                                        placeholder="opsional" name="driver"
                                                                        class="p-2 bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] md:ml-10 font-averialibre placeholder-orange-500">
                                                                </div>
                                                            </div>
                                                            <div class="mt-1 flex items-center w-full">
                                                                <label for="name"
                                                                    class="block text-xl w-[40%] font-averialibre text-orange-800 md:ml-4">Nomor
                                                                    Plat</label>
                                                                <div class="flex pt-4 w-full">
                                                                    <input type="text" id="name"
                                                                        placeholder="opsional" name="plat"
                                                                        class="p-2 bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] md:ml-10 font-averialibre placeholder-orange-500">
                                                                </div>
                                                            </div>
                                                            <div class="mt-1 flex items-center w-full">
                                                                <label for="name"
                                                                    class="block text-xl w-[40%] font-averialibre text-orange-800 md:ml-4">Nomor
                                                                    HP</label>
                                                                <div class="flex pt-4 w-full">
                                                                    <input type="text" id="name"
                                                                        placeholder="opsional" name="no_hp"
                                                                        class="p-2 bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] md:ml-10 font-averialibre placeholder-orange-500">
                                                                </div>
                                                            </div>
                                                            <div class="mt-1 flex items-center w-full">
                                                                <label for="name"
                                                                    class="block text-xl w-[40%] font-averialibre text-orange-800 md:ml-4">Link
                                                                    Lacak</label>
                                                                <div class="flex pt-4 w-full">
                                                                    <input type="text" id="name"
                                                                        placeholder="opsional" name="link"
                                                                        class="p-2 bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] md:ml-10 font-averialibre placeholder-orange-500">
                                                                </div>
                                                            </div>
                                                            <div class="mt-1 flex items-center w-full">
                                                                <label for="name"
                                                                    class="block text-xl w-[40%] font-averialibre text-orange-800 md:ml-4">Keterangan</label>
                                                                <div class="flex pt-4 w-full">
                                                                    <input type="text" id="name"
                                                                        placeholder="opsional" name="keterangan"
                                                                        class="p-2 bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] md:ml-10 font-averialibre placeholder-orange-500">
                                                                </div>
                                                            </div>
                                                            <button type="submit"
                                                                class="my-2 font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#fded87] text-[#b9480f] rounded-full border border-[#b9480f] p-2">Kirim</button>
                                                        </form>
                                                    </div>
                                                @elseif ($preorder->status == 'SHIPPING')
                                                    <div id="{{ 'greenSection' . $preorder->id }}"
                                                        class="font-averialibre w-full h-auto bg-[#fac774] rounded-b-lg p-4">
                                                        <!-- Content for the green section -->
                                                        <div class="px-4 py-2 flex-col flex bg-orange-700 rounded-xl">
                                                            <!-- pas shipping, ini diganti jadi detail driver -->
                                                            <div class="flex flex-row py-2">
                                                                <div class="w-auto">
                                                                    <p
                                                                        class="font-averialibre text-lg md:text-2xl text-orange-300">
                                                                        Layanan Pengiriman</p>
                                                                </div>
                                                                <div class="w-auto">
                                                                    <p
                                                                        class="font-averialibre text-lg md:text-2xl text-orange-300 mx-5">
                                                                        :</p>
                                                                </div>
                                                                <div class="w-auto">
                                                                    <p
                                                                        class="font-averialibre text-lg md:text-2xl text-orange-400">
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
                                                        {{-- <div id="{{ 'greenSection' . $preorder->id }}Content"
                                                        font-averialibre
                                                        class="flex-1 flex items-center justify-between">
                                                        <p id="{{ 'questionText' . $preorder->id }}"
                                                            class="text-orange-800 text-justify">CONTACT WA</p>
                                                    </div>
                                                    <form class="w-full flex justify-center my-2"
                                                        action="/shipment/{{ $preorder->shipment->id }}/arrived"
                                                        method="POST">
                                                        @csrf
                                                        <button type="submit"
                                                            class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#fded87] text-[#b9480f] rounded-full border border-[#b9480f] p-2">Konfirmasi Pengiriman</button>
                                                    </form> --}}
                                                    </div>
                                                @elseif ($preorder->status == 'ARRIVED')
                                                    <div id="{{ 'greenSection' . $preorder->id }}"
                                                        class="font-averialibre w-full h-auto bg-[#fac774] rounded-b-lg p-4">
                                                        <!-- Content for the green section -->
                                                        <div id="{{ 'greenSection' . $preorder->id }}Content"
                                                            font-averialibre
                                                            class="flex-1 flex items-center justify-between">
                                                            <p id="{{ 'questionText' . $preorder->id }}"
                                                                class="text-orange-800 text-justify">PESANAN SELESAI?
                                                            </p>
                                                        </div>
                                                        <form class="w-full flex justify-center my-2"
                                                            action="/preorder/{{ $preorder->id }}/finish"
                                                            method="POST">
                                                            @csrf
                                                            <button type="submit"
                                                                class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#fded87] text-[#b9480f] rounded-full border border-[#b9480f] p-2">Selesaikan
                                                                Pesanan</button>
                                                        </form>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div id="{{ 'bottomButtons' . $preorder->id }}"
                                            class="flex items-center justify-center mt-4">
                                            <!-- The close button -->
                                            <button onclick="{{ 'togglemodal' . $preorder->id . '()' }}"
                                                class="font-averialibre text-orange-800 text-3xl flex items-center justify-center bg-[#FAC774] text-[#b9480f] rounded-full h-[50px] w-full">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                function toggle{{ 'modal' . $preorder->id }}() {
                                    const {{ 'modal' . $preorder->id }} = document.getElementById('{{ 'modal' . $preorder->id }}');
                                    {{ 'modal' . $preorder->id }}.classList.toggle('hidden');
                                }
                            </script>
                        @endforeach
                        {{-- <!-- Dummy data, replace with dynamic data in a real application -->
                        <div class="bg-[#f1a03c] border-solid border-4 border-[#F1A03C] p-4 lg:p-6 rounded-2xl mb-4">
                            <!-- Item 1 -->
                            <div class="flex justify-between items-center mb-8 lg:mb-16">
                                <div class="flex items-center">
                                    <span class="ml-2 font-averialibre text-orange-800 text-4xl lg:text-5xl uppercase"
                                        style="-webkit-text-stroke: 1px rgba(255,255,255,0.8);">ODR 1</span>
                                </div>
                                <span class="ml-2 font-averialibre text-orange-800 text-4xl lg:text-5xl uppercase"
                                    style="-webkit-text-stroke: 1px rgba(255,255,255,0.8);">Pending</span>
                            </div>

                            <!-- Item 2 -->
                            <div class="flex justify-between items-center">
                                <div class="flex flex-col items-start">
                                    <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Nama: John
                                        Thor</span>
                                    <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Request:
                                        John
                                        Doe</span>
                                    <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Payment
                                        Status:
                                        Lorem Ipsum</span>
                                </div>
                                <a href="#"
                                    class="ml-2 font-averialibre text-orange-800 text-xl lg:text-3xl underline flex justify-between items-center bg-[#FAC774] border-solid border-4 border-[#ad713e] p-2 rounded-2xl max-w-[1100px]"
                                    onclick="toggle{{ 'modal' . $preorder->id }}()">View Details</a>
                            </div>
                        </div> --}}
                        <!-- Add more items as needed -->
                    </div>
                </div>
            </div>

        </div>


    </x-app-layout>
</body>
