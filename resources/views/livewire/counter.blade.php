<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="flex items-center justify-center gap-2">
        <button wire:click="decrement" class="rounded-xl bg-orange-300 hover:bg-orange-800 hover:text-orange-300 text-orange-700 w-10 h-10 py-1 border-2 border-orange-800 flex items-center justify-center text-3xl font-averialibre">
            <p class="text-center -translate-y-[1.5px]">-</p>
        </button>
        <input type="text" placeholder="0"
            class="border-2 rounded-xl bg-orange-300 border-orange-800 focus:outline-none font-averialibre text-2xl px-2 text-orange-700 placeholder-orange-700 w-24 py-1 h-10 text-center"
            oninput="this.value=this.value.replace(/[^0-9]/g,'')" value="{{$count}}">

        <button wire:click="increment" class="rounded-xl bg-orange-300 hover:bg-orange-800 hover:text-orange-300 text-orange-700 w-10 h-10 py-1 border-2 border-orange-800 flex items-center justify-center text-3xl font-averialibre">
            <p class="text-center -translate-y-[1.55px]">+</p>
        </button>
    </div>
</div>
