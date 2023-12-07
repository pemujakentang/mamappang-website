<div>
        <div class="flex items-center justify-center gap-2">
            {{-- Be like water. --}}
            {{-- <button type="button"
        class="rounded-xl bg-orange-300 hover:bg-orange-800 hover:text-orange-300 text-orange-700 w-10 h-10 py-1 border-2 border-orange-800 flex items-center justify-center text-3xl font-averialibre">
        <p class="text-center -translate-y-[1.5px]">-</p>
    </button> --}}
            <input wire:model="quantity" type="number" placeholder="QTY"
                class="border-2 rounded-xl bg-orange-300 border-orange-800 focus:outline-none font-averialibre px-2 text-orange-700 placeholder-orange-500 w-24 py-1 h-10 text-center text-xl"
                oninput="this.value=this.value.replace(/[^0-9]/g,'')" value="{{ $cart->qty }}" required>
            @error('quantity')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
            {{-- <button type="button"
        class="rounded-xl bg-orange-300 hover:bg-orange-800 hover:text-orange-300 text-orange-700 w-10 h-10 py-1 border-2 border-orange-800 flex items-center justify-center text-3xl font-averialibre">
        <p class="text-center -translate-y-[1.55px]">+</p>
    </button> --}}
            <button wire:click="submit" type="button"
                class="rounded-xl bg-orange-300 hover:bg-orange-800 hover:text-orange-300 text-orange-700 h-10 py-1 px-2 border-2 border-orange-800 flex items-center justify-center font-averialibre">
                <p class="text-center -translate-y-[1.55px]">Update Quantity</p>
            </button>
        </div>
</div>
