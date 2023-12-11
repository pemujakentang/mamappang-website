<div>
    <div class="mb-4">
        <div id="series3"
            class="flex justify-between flex-col md:flex-row bg-orange-700 py-2 px-3.5 rounded-2xl items-center">
            <div class="flex flex-col">
                <p class="text-orange-300 font-averialibre text-3xl my-auto">TOTAL PESANAN</p>
                <p class="text-orange-300 font-averialibre text-xs my-auto -mt-2 ml-1">*harga belum
                    termasuk ongkos kirim</p>
            </div>
            <div class="flex items-center md:justify-center gap-2 h-16">

                <div id="grandpcs"
                    class="border-2 rounded-xl bg-orange-300 border-orange-800 focus:outline-none font-averialibre text-xl px-4 text-orange-700 py-1 h-12 text-center items-center justify-center">
                    {{ $totalQty }} Pcs</div>
                @php
                    if ($totalQty < 21) {
                        $totalPrice = $totalQty * 12000;
                    } elseif ($totalQty < 51) {
                        $totalPrice = $totalQty * 11000;
                    } else {
                        $totalPrice = $totalQty * 10000;
                    }
                    // $totalPrice = $totalQty * 12000;
                @endphp
                <div id="grandtotal"
                    class="w-44 border-2 rounded-xl bg-orange-300 border-orange-800 focus:outline-none font-averialibre text-xl px-4 text-orange-700 py-1 h-12 text-center items-center justify-center">
                    Rp. {{ number_format($totalPrice, 0, ',', '.') }}</div>
            </div>
        </div>
    </div>
    <form action="/bulk-order/order" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="flex flex-col md:flex-row justify-between mb-3">
            <p class="text-orange-200 font-averialibre text-2xl my-auto ml-2 w-[40%]">ALAMAT PENGIRIMAN</p>
            <textarea name="shipment_address" type="text"
                class="bg-orange-300 border-orange-800 text-orange-700 border-2 outline-none text-xl rounded-xl p-3 max-h-28 h-28 font-averialibre w-full md:w-[60%]"></textarea>
        </div>
        @error('shipment_address')
            <span class="text-red-500">{{ $error('shipment_address') }}</span>
        @enderror

        <div class="flex flex-col md:flex-row justify-between mb-7">
            <p class="text-orange-200 font-averialibre text-2xl my-auto ml-2 w-full md:w-[40%]">TANGGAL
                PENGIRIMAN</p>
            <input type="date" name="tanggal_pesanan" min="{{date("Y-m-d")}}"
                class="bg-orange-300 border-orange-800 text-orange-700 border-2 outline-none text-xl rounded-xl max-h-28 h-16 p-3 font-averialibre w-full md:w-[60%]">
        </div>
        @error('tanggal_pesanan')
            <span class="text-red-500">{{ $error('tanggal_pesanan') }}</span>
        @enderror

        <div class="flex flex-col md:flex-row justify-between mb-7 hidden">
            <p class="text-orange-200 font-averialibre text-2xl my-auto ml-2 w-full md:w-[40%]">TOTAL QTY</p>
            <input type="number" name="total_qty"
                class="bg-orange-300 border-orange-800 text-orange-700 border-2 outline-none text-xl rounded-xl max-h-28 h-16 p-3 font-averialibre w-full md:w-[60%]"
                value="{{ $totalQty }}">
        </div>

        <div class="flex flex-col md:flex-row justify-between mb-7 hidden">
            <p class="text-orange-200 font-averialibre text-2xl my-auto ml-2 w-full md:w-[40%]">TOTAL PRICE</p>
            <input type="number" name="total_price"
                class="bg-orange-300 border-orange-800 text-orange-700 border-2 outline-none text-xl rounded-xl max-h-28 h-16 p-3 font-averialibre w-full md:w-[60%]"
                value="Rp. {{ number_format($totalPrice, 0, ',', '.') }}">
        </div>

        <button type="submit"
            class="border-2 rounded-xl hover:bg-orange-400 hover:border-orange-800 border-orange-900 bg-orange-700 font-averialibre text-2xl px-2   w-full py-2 h-16 text-center hover:text-orange-700 text-orange-300">
            <p class=" font-averialibre md:text-4xl ">Pesan Sekarang</p>
        </button>
    </form>
</div>
