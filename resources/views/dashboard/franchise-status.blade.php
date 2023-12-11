<body>
    <x-app-layout>

        <!-- component -->
        <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
            <livewire:layout.admin-nav />
            <div class="flex-auto min-h-screen bg-[#FFDBA3] pt-20 md:pt-0">
                <!-- Dummy Content on the Right Sidebar -->
                <div class="md:ml-64 p-8 ">
                    <div class="flex md:flex-row flex-col items-center w-full md:justify-between">
                        <div
                            class="col-span-2 lg:col-span-1 text-3xl lg:text-5xl tracking-wide truncate font-averialibre text-orange-800">
                            Franchise Status</div>
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
                        <!-- Dummy data, replace with dynamic data in a real application -->
                        @foreach ($franchises as $franchise)
                            <div
                                class="bg-[#f1a03c] border-solid border-4 border-[#F1A03C] p-4 lg:p-6 rounded-2xl mb-4">
                                <!-- Item 1 -->
                                <div class="flex justify-between items-center mb-8 lg:mb-16">
                                    <div class="flex items-center">
                                        <span
                                            class="ml-2 font-averialibre text-white text-3xl lg:text-5xl uppercase">FRC
                                            {{ $franchise->id }}</span>
                                    </div>
                                    <span
                                        class="ml-2 font-averialibre text-orange-800 text-3xl lg:text-5xl uppercase">{{ $franchise->status }}</span>
                                </div>

                                <!-- Item 2 -->
                                <div class="flex justify-between items-center">
                                    <div class="flex flex-col items-start">
                                        <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Nama:
                                            {{ $franchise->nama_bisnis }}
                                        </span>
                                        <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Request:
                                            {{ $franchise->user->firstname }} {{ $franchise->user->lastname }}</span>
                                    </div>
                                    <button
                                        class="ml-2 font-averialibre text-orange-800 text-xl lg:text-3xl flex justify-between items-center bg-[#FAC774] border-solid border-4 border-[#ad713e] p-2 rounded-2xl max-w-[1100px]"
                                        onclick="{{ 'toggleModal' . $franchise->id . '()' }}">View Details</button>
                                </div>
                            </div>
                            <!-- Modal container using plain JavaScript -->
                            <div id="{{ 'modal' . $franchise->id }}"
                                class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 hidden overflow-y-auto">
                                <div
                                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#b9480f] text-orange-800 p-4 rounded-2xl border border-solid border-[#F1A03C] max-w-[90%] lg:max-w-[500px]">
                                    <div class="flex justify-between items-center mb-4">
                                        <span class="ml-2 font-averialibre text-[#FAC774] text-4xl ">Request
                                            #{{ $franchise->id }}</span>
                                        <span id="state"
                                            class="mr-2 font-averialibre text-[#FAC774] text-4xl self-end">{{ $franchise->status }}</span>
                                    </div>
                                    <div class="flex justify-center items-center rounded-2xl ">
                                        <div class="flex flex-col w-[400px]">
                                            <div
                                                class="font-averialibre w-full h-auto bg-[#945e3d] flex justify-start items-start">
                                                <div class="text-[#fac774] text-left p-2">
                                                    <p><span class="font-bold">Nama:</span>
                                                        {{ $franchise->user->firstname }}
                                                        {{ $franchise->user->lastname }}</p>
                                                    <p><span class="font-bold">No Telp:</span>
                                                        {{ $franchise->user->no_telp }}</p>
                                                    <p><span class="font-bold">Alamat Pribadi:</span>
                                                        {{ $franchise->domisili }}</p>
                                                    <p><span class="font-bold">Nama Bisnis:</span>
                                                        {{ $franchise->nama_bisnis }}</p>
                                                    <p><span class="font-bold">Alamat Bisnis:</span>
                                                        {{ $franchise->address }}</p>
                                                    <p><span class="font-bold">Tanggal:</span>
                                                        {{ $franchise->created_at }}</p>
                                                    <p><span class="font-bold">Keterangan:</span>
                                                        {{ $franchise->keterangan }}</p>
                                                </div>
                                            </div>
                                            @if ($franchise->status == 'PENDING')
                                                <div id="{{ 'greenSection' . $franchise->id }}"
                                                    class="font-averialibre w-full h-auto bg-[#fac774] rounded-b-lg p-4">
                                                    <!-- Content for the green section -->
                                                    <div id="{{ 'greenSection' . $franchise->id }}Content"
                                                        font-averialibre
                                                        class="flex-1 flex items-center justify-between">
                                                        <p id="{{ 'questionText' . $franchise->id }}"
                                                            class="text-orange-800 text-justify flex-1">
                                                            Terima Request?</p>
                                                        <div id="{{ 'buttonContainer' . $franchise->id }}"
                                                            class="flex gap-1">
                                                            <button
                                                                onclick="{{ 'replaceContent' . $franchise->id }}('terima')"
                                                                class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#f1a03c] rounded-full h-[35px] w-[100px] border border-[#b9480f]">Terima</button>
                                                            <button
                                                                onclick="{{ 'replaceContent' . $franchise->id }}('tidak')"
                                                                class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#fded87] rounded-full h-[35px] w-[100px] border border-[#b9480f]">Tidak</button>
                                                        </div>
                                                    </div>
                                                    <div id="{{ 'replacementContent' . $franchise->id }}"
                                                        class="hidden">
                                                        <!-- Content will be replaced based on button clicks -->
                                                    </div>
                                                </div>
                                            @else
                                                <div id=""
                                                    class="font-averialibre w-full h-auto bg-[#fac774] rounded-b-lg p-4">
                                                    <!-- Content for the green section -->
                                                    <div id=""
                                                        font-averialibre
                                                        class="flex-1 flex items-center justify-between">
                                                        <p id=""
                                                            class="text-orange-800 text-justify flex-1">
                                                            Email Pengaju</p>
                                                        <div id=""
                                                            class="flex gap-1">
                                                            <a href="mailto:{{$franchise->user->email}}"
                                                                class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#f1a03c] rounded-full h-[35px] w-[100px] border border-[#b9480f]">Email</a>
                                                        </div>
                                                    </div>
                                                    <div id="{{ 'replacementContent' . $franchise->id }}"
                                                        class="hidden">
                                                        <!-- Content will be replaced based on button clicks -->
                                                    </div>
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                    <div id="{{ 'bottomButtons' . $franchise->id }}"
                                        class="flex items-center justify-center mt-4">
                                        <!-- The close button -->
                                        <button onclick="{{ 'toggleModal' . $franchise->id . '()' }}"
                                            class="font-averialibre text-orange-800 text-3xl flex items-center justify-center bg-[#FAC774]  rounded-full h-[50px] w-full">Close</button>
                                    </div>
                                </div>
                            </div>
                            {{-- <form action="/franchise/{{ $franchise->id }}/reject" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div id="{{ 'greenSection' . $franchise->id }}Content"
                                    class="flex-1 flex items-center justify-between">
                                    <p class="text-orange-800">Alasan Tidak Diterima:</p>
                                    <div class="flex items-center mt-2">
                                        <textarea id="reasonInput" class="border border-[#b9480f] text-orange-800 bg-[#fded87] rounded h-32 min-w-[150px] "
                                            placeholder="Reason" name="message"></textarea>
                                    </div>
                                </div>
                                <div id="{{ 'greenSection' . $franchise->id }}Content"
                                    class="flex-1 flex items-center justify-between">
                                    <button onclick="{{ 'resetContent' . $franchise->id }}()" type="button"
                                        class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#f1a03c]  rounded-full h-[35px] w-[40%] border border-[#b9480f]">Cancel</button>
                                    <button onclick="{{ 'toggleModal' . $franchise->id . '()' }}" type="submit"
                                        class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#fded87]  rounded-full h-[35px] w-[40%] border border-[#b9480f]">Save</button>
                                </div>
                            </form> --}}
                            {{-- <form action="/franchise/{{ $franchise->id }}/confirm" method="post">
                                @csrf
                                <div id="{{ 'greenSection' . $franchise->id }}Content"
                                    class="flex-1 flex items-center justify-between">
                                    <span class="text-orange-800">Kirim Email Konfirmasi</span>
                                    <button onclick="{{ 'toggleModal' . $franchise->id . '()' }}" type="submit"
                                        class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#fded87]  rounded-full h-[35px] w-[150px] border border-[#b9480f]">
                                        Kirim
                                    </button>
                                </div>
                            </form> --}}

                            <script>
                                let {{ 'defaultContent' . $franchise->id }} = document.getElementById(
                                        '{{ 'greenSection' . $franchise->id }}Content')
                                    .innerHTML;

                                function {{ 'replaceContent' . $franchise->id . '(action)' }} {
                                    const {{ 'questionText' . $franchise->id }} = document.getElementById(
                                        '{{ 'questionText' . $franchise->id }}');
                                    const {{ 'buttonContainer' . $franchise->id }} = document.getElementById(
                                        '{{ 'buttonContainer' . $franchise->id }}');
                                    const {{ 'replacementContent' . $franchise->id }} = document.getElementById(
                                        '{{ 'replacementContent' . $franchise->id }}');
                                    const {{ 'bottomButtons' . $franchise->id }} = document.getElementById(
                                        '{{ 'bottomButtons' . $franchise->id }}');

                                    {{ 'questionText' . $franchise->id }}.classList.add('hidden'); // Hide the question text

                                    if (action === 'terima') {
                                        {{ 'buttonContainer' . $franchise->id }}.classList.add('hidden');
                                        {{ 'replacementContent' . $franchise->id }}.classList.remove('hidden');
                                        {{ 'replacementContent' . $franchise->id }}.innerHTML = `
            <!-- New content for 'terima' action -->
            <form action="/franchise/{{ $franchise->id }}/confirm" method="post">
                                @csrf
                                <div id="{{ 'greenSection' . $franchise->id }}Content"
                                    class="flex-1 flex items-center justify-between">
                                    <span class="text-orange-800">Kirim Email Konfirmasi</span>
                                    <button onclick="{{ 'toggleModal' . $franchise->id . '()' }}" type="submit"
                                        class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#fded87]  rounded-full h-[35px] w-[150px] border border-[#b9480f]">
                                        Kirim
                                    </button>
                                </div>
                            </form>`;
                                    } else if (action === 'tidak') {
                                        {{ 'buttonContainer' . $franchise->id }}.classList.add('hidden');
                                        {{ 'replacementContent' . $franchise->id }}.classList.remove('hidden');
                                        {{ 'replacementContent' . $franchise->id }}.innerHTML = `
        <form action="/franchise/{{ $franchise->id }}/reject" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div id="{{ 'greenSection' . $franchise->id }}Content"
                                    class="flex-1 flex items-center justify-between">
                                    <p class="text-orange-800">Alasan Tidak Diterima:</p>
                                    <div class="flex items-center mt-2">
                                        <textarea id="reasonInput" class="border border-[#b9480f] text-orange-800 bg-[#fded87] rounded h-32 min-w-[150px] "
                                            placeholder="Reason" name="message"></textarea>
                                    </div>
                                </div>
                                <div id="{{ 'greenSection' . $franchise->id }}Content"
                                    class="flex-1 flex items-center justify-between">
                                    <button onclick="{{ 'toggleModal' . $franchise->id . '()' }}" type="submit"
                                        class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#fded87]  rounded-full h-[35px] w-[40%] border border-[#b9480f]">Save</button>
                                </div>
                            </form>
        `;
                                        {{ 'bottomButtons' . $franchise->id }}.innerHTML = `
<button onclick="{{ 'resetContent' . $franchise->id }}()" type="button"
                                        class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#f1a03c]  rounded-full h-[35px] w-[40%] border border-[#b9480f]">Cancel</button>
        `;
                                    }
                                }

                                function {{ 'resetContent' . $franchise->id }}() {
                                    const {{ 'questionText' . $franchise->id }} = document.getElementById(
                                        '{{ 'questionText' . $franchise->id }}');
                                    const {{ 'buttonContainer' . $franchise->id }} = document.getElementById(
                                        '{{ 'buttonContainer' . $franchise->id }}');
                                    const {{ 'replacementContent' . $franchise->id }} = document.getElementById(
                                        '{{ 'replacementContent' . $franchise->id }}');
                                    const {{ 'bottomButtons' . $franchise->id }} = document.getElementById(
                                        '{{ 'bottomButtons' . $franchise->id }}');

                                    {{ 'questionText' . $franchise->id }}.classList.remove('hidden'); // Show the question text
                                    {{ 'buttonContainer' . $franchise->id }}.classList.remove('hidden');
                                    {{ 'replacementContent' . $franchise->id }}.classList.add('hidden');
                                    document.getElementById('{{ 'greenSection' . $franchise->id }}Content').innerHTML =
                                        {{ 'defaultContent' . $franchise->id }};

                                    {{ 'bottomButtons' . $franchise->id }}.innerHTML = `
        <button onclick="{{ 'toggleModal' . $franchise->id . '()' }}" class="font-averialibre text-orange-800 text-3xl flex items-center justify-center bg-[#FAC774]  rounded-full h-[50px] w-full">Close</button>
    `;
                                }

                                window.onload = function() {
                                    {{ 'defaultGreenContent' . $franchise->id }} = document.getElementById(
                                        '{{ 'greenSection' . $franchise->id }}').innerHTML;
                                };

                                function {{ 'resetContentData' . $franchise->id . '()' }} {
                                    const {{ 'greenSection' . $franchise->id }} = document.getElementById(
                                        '{{ 'greenSection' . $franchise->id }}');
                                    const {{ 'bottomButtons' . $franchise->id }} = document.getElementById(
                                        '{{ 'bottomButtons' . $franchise->id }}');
                                    const stateSpan = document.getElementById('state');

                                    {{ 'greenSection' . $franchise->id }}.innerHTML = {{ 'defaultGreenContent' . $franchise->id }};

                                    {{ 'bottomButtons' . $franchise->id }}.innerHTML = `
        <button onclick="{{ 'toggleModal' . $franchise->id . '()' }}" class="font-averialibre text-orange-800 text-3xl flex items-center justify-center bg-[#FAC774]  rounded-full h-[50px] w-full">Close</button>
    `;

                                    // Change the content of the span
                                    stateSpan.innerText = 'Pending'; // or any other text you want
                                }


                                function {{ 'toggleModal' . $franchise->id . '()' }} {
                                    const {{ 'modal' . $franchise->id }} = document.getElementById('{{ 'modal' . $franchise->id }}');
                                    {{ 'modal' . $franchise->id }}.classList.toggle('hidden');
                                }
                            </script>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


    </x-app-layout>
</body>
