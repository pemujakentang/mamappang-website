<body>
    <x-app-layout>
        <div class="mx-auto my-auto overflow-hidden relative flex flex-col items-center bg-[#FF6400]">
            <!-- section - home -->
            <div class="flex relative justify-center flex-col w-full">
                <img class="absolute h-96 z-10 -right-56 bottom-10 mt-6 animate-wiggle opacity-70" src="/images/awan.webp"
                    alt="Logo">
                <img class="absolute h-96 z-10 -left-60 -bottom-32 animate-wiggle opacity-70" src="/images/awan.webp"
                    alt="Logo">
                <div class="absolute h-80 z-10 left-20 top-32 animate-move-x">
                    <img class="animate-move-y opacity-70 h-80" src="/images/awan.webp" alt="Logo">
                </div>

                <livewire:layout.navigation />

                <!-- home -->
                <div class="flex justify-center p-10 mt-10 mb-4">
                    <div
                        class="border-4 rounded-3xl w-full md:w-[50%] px-5 md:px-7 pt-7 pb-5 overflow-scroll bg-orange-500 border-orange-800 flex flex-col relative overflow-x-hidden z-30">
                        <p class="text-orange-800 text-center font-averialibre text-3xl md:text-4xl mx-auto md:my-5"
                            style="text-shadow: 4px 4px 4px #FFFFFF, -4px -4px 4px #FFFFFF, 4px -4px 4px #FFFFFF, -4px 4px 4px #FFFFFF;">
                            FORM PEMESANAN BULK ORDER</p>
                        @foreach ($categories as $category)
                            <!-- series -->
                            <div class="mb-2">
                                <div id="{{ 'series' . $category->name }}"
                                    class="flex justify-between flex-row bg-orange-700 py-2 px-3.5 rounded-2xl">
                                    <p class="text-orange-300 font-averialibre text-lg md:text-2xl my-auto">
                                        {{ $category->name }} Series
                                    </p>
                                    <div class="flex items-center justify-center gap-2">
                                        {{-- <div id="{{ 'series-' . $category->name }}"
                                            class="border-2 rounded-xl bg-orange-300 border-orange-800 font-averialibre text-2xl px-2 text-orange-700 w-32 py-1 h-12 text-center">
                                            0Pcs</div> --}}

                                        <button onclick="{{ 'changeClass' . $category->name . '()' }}" type="button"
                                            class="rounded-xl bg-orange-300 text-orange-700 w-16 h-12 py-1 border-2 border-orange-800 flex items-center justify-center">
                                            <div class="w-6">
                                                <img id="{{ 'arrow' . $category->name }}"
                                                    class="rotate-0 object-cover duration-75" src="/images/arrow.webp"
                                                    alt="Logo">
                                            </div>
                                        </button>

                                        <script>
                                            function {{ 'changeClass' . $category->name . '()' }} {
                                                var {{ 'arrow' . $category->name }} = document.getElementById("{{ 'arrow' . $category->name }}");
                                                var {{ 'dropContent' . $category->name }} = document.getElementById("{{ 'dropContent' . $category->name }}");
                                                var {{ 'series' . $category->name }} = document.getElementById("{{ 'series' . $category->name }}");

                                                if ({{ 'arrow' . $category->name }}.classList.contains('-rotate-90')) {
                                                    {{ 'arrow' . $category->name }}.classList.remove('-rotate-90');
                                                    {{ 'arrow' . $category->name }}.classList.add('rotate-0');
                                                } else {
                                                    {{ 'arrow' . $category->name }}.classList.remove('rotate-0');
                                                    {{ 'arrow' . $category->name }}.classList.add('-rotate-90');
                                                }

                                                if ({{ 'dropContent' . $category->name }}.classList.contains('hidden')) {
                                                    {{ 'dropContent' . $category->name }}.classList.remove('hidden');
                                                    {{ 'dropContent' . $category->name }}.classList.add('flex');
                                                    {{ 'series' . $category->name }}.classList.remove('rounded-2xl');
                                                    {{ 'series' . $category->name }}.classList.add('rounded-t-2xl');
                                                } else {
                                                    {{ 'dropContent' . $category->name }}.classList.remove('flex');
                                                    {{ 'dropContent' . $category->name }}.classList.add('hidden');
                                                    {{ 'series' . $category->name }}.classList.remove('rounded-t-2xl');
                                                    {{ 'series' . $category->name }}.classList.add('rounded-2xl');
                                                }
                                            }
                                        </script>
                                    </div>
                                </div>

                                <div id="{{ 'dropContent' . $category->name }}"
                                    class="flex duration-75 flex-col rounded-b-2xl py-2 bg-orange-300">
                                    <!-- menu -->

                                    @foreach ($category->menus as $menu)
                                        <div class="flex justify-between flex-row  py-2 pr-4 md:md:pl-8 pl-4">
                                            <p class="text-orange-700 font-averialibre md:text-2xl my-auto">
                                                {{ $menu->name }}
                                            </p>
                                            @if (auth()->user()->carts->where('menu_id', $menu->id)->count() == 0)
                                                {{-- {{auth()->user()->carts->where('menu_id', $menu->id)->first()}} --}}
                                                <form action="/cart/new" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <input hidden type="number" name="menu_id" id=""
                                                        value="{{ $menu->id }}">
                                                    <button type="submit"
                                                        class="rounded-xl h-8 w-32 bg-orange-300 hover:bg-orange-800 hover:text-orange-300 text-orange-700 py-1 px-2 border-2 border-orange-800 flex items-center justify-center">ADD
                                                        TO CART</button>
                                                </form>
                                            @else
                                                {{-- {{auth()->user()->carts->where('menu_id', $menu->id)->first()->qty}} --}}
                                                <div class="flex items-center justify-center gap-2">
                                                    <livewire:qty-form :cart="auth()
                                                        ->user()
                                                        ->carts->where('menu_id', $menu->id)
                                                        ->first()" />
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @endforeach
                        <livewire:cart-total />
                    </div>
                </div>
            </div>


            <!-- footer -->
            <div class="w-full flex flex-col z-10 px-5 md:px-3 md:pl-7 py-7"
                style="background-image: url('/images/background-menu.webp');">
                <p class="text-orange-800 font-averialibre text-3xl md:text-4xl mb-3">Mamappang - Best In Town</p>
                <p class="text-orange-800 font-averialibre text-lg md:text-xl w-full md:w-[70%] text-justify mb-6">
                    Contact us
                    <br>
                    mamappang.bungeoppang@gmail.com
                    <br>
                    0851-6161-0765
                    <br>
                    Tangerang Selatan </p>
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
