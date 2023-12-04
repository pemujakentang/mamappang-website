<body>
    <x-app-layout>

        <!-- component -->
        <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
            <livewire:layout.admin-nav />

            <div
                class="flex-auto min-h-screen bg-[#FFDBA3] md:pt-0 pt-20 flex md:justify-start justify-center items-center md:items-stretch flex-col">
                <!-- Dummy Content on the Right Sidebar -->
                <div class="ml-0 md:ml-64 p-3 md:p-8 ">
                    <div class="flex">
                        <p class="text-5xl font-averialibre text-orange-800">Billing</p>
                    </div>
                    <div class="rounded-2xl border-solid border-4 border-[#F1A03C] my-6 bg-[#FAC774] overflow-y-auto">
                        <div class="flex flex-wrap">
                            <div class="w-[47%]">
                                <div class="m-4">
                                    <div class="mt-1 flex items-center">
                                        <label
                                            class="block text-2xl w-[50%] font-averialibre text-orange-800 md:ml-4">Nama
                                            Pemesan</label>
                                        <div class="flex pt-4 w-full">
                                            <input disabled type="text"
                                                value="{{ $preorder->user->firstname }} {{ $preorder->user->lastname }}"
                                                class="p-2 w-[90%] bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] md:ml-10 font-averialibre placeholder-orange-700">
                                        </div>
                                    </div>
                                </div>
                                <div class="m-4">
                                    <div class="mt-1 flex items-center">
                                        <label
                                            class="block text-2xl w-[50%] font-averialibre text-orange-800 md:ml-4">Nomor
                                            Telepon Pemesan</label>
                                        <div class="flex pt-4 w-full">
                                            <input disabled type="text" value="{{ $preorder->user->no_telp }}"
                                                class="p-2 w-[90%] bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] md:ml-10 font-averialibre placeholder-orange-700">
                                        </div>
                                    </div>
                                </div>
                                <div class="m-4">
                                    <div class="mt-1 flex items-center">
                                        <label
                                            class="block text-2xl w-[50%] font-averialibre text-orange-800 md:ml-4">Email
                                            Pemesan</label>
                                        <div class="flex pt-4 w-full">
                                            <input disabled type="text" value="{{ $preorder->user->email }}"
                                                class="p-2 w-[90%] bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] md:ml-10 font-averialibre placeholder-orange-700">
                                        </div>
                                    </div>
                                </div>
                                <div class="m-4">
                                    <div class="mt-1 flex items-center">
                                        <label
                                            class="block text-2xl w-[50%] font-averialibre text-orange-800 md:ml-4">Alamat
                                            Pemesanan</label>
                                        <div class="flex pt-4 w-full">
                                            <textarea disabled type="text" value=""
                                                class="p-2 w-[90%] bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] md:ml-10 font-averialibre placeholder-orange-700">{{ $preorder->shipment_address }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-4">
                                    <div class="mt-1 flex items-center">
                                        <label
                                            class="block text-2xl w-[50%] font-averialibre text-orange-800 md:ml-4">Tanggal
                                            Pemesanan</label>
                                        <div class="flex pt-4 w-full">
                                            <input disabled type="text" value="{{ $preorder->created_at }}"
                                                class="p-2 w-[90%] bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] md:ml-10 font-averialibre placeholder-orange-700">
                                        </div>
                                    </div>
                                </div>
                                <div class="m-4">
                                    <div class="mt-1 flex items-center">
                                        <label
                                            class="block text-2xl w-[50%] font-averialibre text-orange-800 md:ml-4">Tanggal
                                            Kirim yang Diminta</label>
                                        <div class="flex pt-4 w-full">
                                            <input disabled type="text" value="{{ $preorder->tanggal_pesanan }}"
                                                class="p-2 w-[90%] bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] md:ml-10 font-averialibre placeholder-orange-700">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-[47%] m-4">
                                <div class="w-full h-auto bg-[#5c3623] rounded-lg flex m-4">
                                    <div class="font-averialibre text-[#fac774] text-left p-2 m-4">
                                        <p class="text-xl font-bold pb-3">{{ $preorder->total_qty }} Bungeoppang
                                        </p>
                                        <ul>
                                            @foreach ($preorder->details as $detail)
                                                <li class="ml-4 text-lg">{{ $detail->qty }}
                                                    {{ $detail->menu->name }} </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-4">
                                    <div class="mt-1 flex items-center">
                                        <label
                                            class="block text-2xl w-[50%] font-averialibre text-orange-800 md:ml-4">Estimasi Harga</label>
                                        <div class="flex pt-4 w-full">
                                            <input disabled type="text" value="{{ $preorder->total_price }}"
                                                class="p-2 w-[90%] bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] md:ml-10 font-averialibre placeholder-orange-700">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="/admin/billing/{{$preorder->id}}/new" class="w-full flex justify-center flex-col" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="w-full flex justify-center">
                                <div class="mt-1 flex items-center w-1/2">
                                    <label for="name"
                                        class="block text-2xl font-averialibre text-orange-800 md:ml-4 w-[40%]">Harga
                                        Pesanan Akhir</label>
                                    <div class="flex pt-4 w-full">
                                        <input type="number" id="price" name="price"
                                            class="p-2 bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] md:ml-10 font-averialibre placeholder-orange-700 w-1/2">
                                    </div>

                                </div>
                            </div>
                            <div class="w-full flex justify-center">
                                <div class="mt-1 flex items-center w-1/2">
                                    <label for=""
                                        class="block text-2xl font-averialibre text-orange-800 md:ml-4 w-[40%]">Jumlah
                                        Ongkir</label>
                                    <div class="flex pt-4 w-full">
                                        <input type="number" id="shipping" name="shipping"
                                            class="p-2 bg-[#FDED87] rounded-2xl border-solid border-2 border-[#945E3D] md:ml-10 font-averialibre placeholder-orange-700 w-1/2">
                                    </div>

                                </div>
                            </div>
                            <div class="flex mb-4 justify-center mt-4">
                                <button
                                    class="bg-[#F1A03C] rounded-[20px] border-solid border-4 border-[#945E3D] flex items-center justify-center w-36 mr-4">
                                    <a href="{{ route('order-status') }}"
                                        class="ml-4 mr-4 font-averialibre text-orange-800 text-3xl text-center">Cancel</a>
                                </button>
                                <button type="submit"
                                    class="bg-[#FDED87] rounded-[20px] border-solid border-4 border-[#945E3D] flex items-center justify-center w-36 mr-4 ml-4 font-averialibre text-orange-800 text-3xl text-center">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
