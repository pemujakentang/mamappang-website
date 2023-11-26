<!DOCTYPE html>
<html class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @vite('resources/css/app.css')
    <title>pizza?</title>
</head>

<body>
<div class="mx-auto my-auto overflow-y-hidden relative overflow-x-hidden flex flex-col items-center bg-[#FF6400]">

<!-- popup / pending -->
<div id="popup-sstatus" class="hidden fixed w-full h-screen z-30 px-2 md:px-10 md:pt-10 pt-20 pb-2 md:pb-8 items-center justify-center bg-[#00000080]">
        <div class="border-4 rounded-3xl w-full md:w-[50%] h-full px-5 md:px-7 pt-16 pb-5 overflow-scroll bg-orange-800 border-orange-500 flex flex-col relative overflow-x-hidden justify-center">

            <button onclick="closeStatus()" class="flex absolute cursor-pointer rotate-45 right-5 top-2 font-averialibrebold text-5xl scale-[1.3] text-orange-300 hover:text-orange-950">+</button>

            <div class="flex flex-row justify-between items-center">
                <!-- order id -->
                <p class="font-averialibre text-5xl text-orange-300">#ORD1</p>
                <!-- status -->
                <p class="font-averialibre text-2xl text-orange-300">pending</p>
            </div>

            <div class="flex flex-row gap-x-2 my-4 px-4 py-2 font-averialibre text-xl bg-orange-900 w-full rounded-xl text-orange-300">
                <p class="font-averialibre text-lg md:text-2xl text-orange-300">Status</p>
                <p class="font-averialibre text-lg md:text-2xl text-orange-300">:</p>
                <!-- wordingan bakal ganti di setiap status -->
                <p class="font-averialibre text-lg md:text-2xl text-orange-400">menunggu konfirmasi admin</p>
            </div>

            <div class="flex flex-col rounded-xl bg-orange-200 p-1 gap-y-1">
                <div class="rounded-xl px-4 py-2 flex-col flex bg-orange-900">
                    <p class="font-averialibre text-3xl text-orange-300">39 Bungeoppang</p>
                    <div class="grid grid-cols-2 md:grid-cols-3">
                        <li class="font-averialibre text-lg text-orange-300">5 Vanilla oreo</li>
                        <li class="font-averialibre text-lg text-orange-300">10 Chocolate</li>
                        <li class="font-averialibre text-lg text-orange-300">10 Taro</li>
                        <li class="font-averialibre text-lg text-orange-300">10 Oreo</li>
                        <li class="font-averialibre text-lg text-orange-300">4 Classic</li>
                    </div>
                </div>
                <div class="px-4 py-2 flex-col flex bg-orange-700 rounded-xl">
                    <!-- pas shipping, ini diganti jadi detail driver -->
                    <div class="flex flex-row gap-x-2 items-center">
                        <div class="w-auto">
                            <p class="font-averialibre text-lg md:text-2xl text-orange-300">Nama</p>
                            <p class="font-averialibre text-lg md:text-2xl text-orange-300">Tanggal Pesanan</p>
                            <p class="font-averialibre text-lg md:text-2xl text-orange-300">Harga Sementara</p>
                        </div>
                        <div class="w-auto">
                            <p class="font-averialibre text-lg md:text-2xl text-orange-300">:</p>
                            <p class="font-averialibre text-lg md:text-2xl text-orange-300">:</p>
                            <p class="font-averialibre text-lg md:text-2xl text-orange-300">:</p>
                        </div>
                        <div class="w-auto">
                            <p class="font-averialibre text-lg md:text-2xl text-orange-400">Alex</p>
                            <p class="font-averialibre text-lg md:text-2xl text-orange-400">12-12-2023</p>
                            <p class="font-averialibre text-lg md:text-2xl text-orange-400">Rp. 180,000</p>
                        </div>
                    </div>
                    <div class="flex flex-row">
                        <div class="w-auto">
                            <p class="font-averialibre text-lg md:text-2xl text-orange-300">Alamat</p>
                        </div>
                        <div class="w-auto">
                            <p class="font-averialibre text-lg md:text-2xl text-orange-300 mx-5">:</p>
                        </div>
                        <div class="w-auto">
                            <p class="font-averialibre text-lg md:text-2xl text-orange-400">Jl scientia boulevard blok b25 no 4 tangerang selatan</p>
                        </div>
                    </div>
                </div>

                <!-- setelah pending, ini buang aja -->
                <div class="rounded-xl px-4 py-6 flex-col md:flex-row flex bg-orange-400 gap-y-3 md:gap-y-0 gap-x-2">
                    <button onclick="openForm()" class="border-2 rounded-xl hover:bg-orange-600 hover:border-orange-800 border-orange-900 bg-orange-300 font-averialibre text-2xl px-2 w-full py-2 h-16 text-center hover:text-orange-300 text-orange-700">
                        <p class=" font-averialibre text-4xl ">Edit Pesanan</p>
                    </button>
                    <button onclick="openWarn()" class="border-2 rounded-xl hover:bg-orange-500 hover:border-orange-800 border-orange-900 bg-orange-800 font-averialibre text-2xl px-2 w-full py-2 h-16 text-center hover:text-orange-700 text-orange-300">
                        <p class=" font-averialibre text-4xl ">Hapus pesanan</p>
                    </button>
                </div>
            </div>

        </div>
</div>

<!-- popup / warning -->
<div id="popup-warning" class="hidden fixed w-full h-screen z-40 px-10 pt-10 pb-8 items-center justify-center bg-[#00000080]">
    <div class="border-4 rounded-3xl w-full md:w-[30%] h-96 p-7 overflow-scroll bg-orange-700 border-orange-900 flex flex-col items-center justify-between overflow-x-hidden">
        <p class="text-orange-300 font-averialibre text-5xl">ⓘ</p>
        <p class="text-orange-300 font-averialibre text-2xl md:text-3xl text-justify mb-3">Apakah anda yakin ingin menghapus pesanan?</p>
        <button onclick="closeWarn()" class="mx-1 border-2 rounded-xl hover:bg-orange-800 hover:border-orange-300 border-orange-900 bg-orange-400 font-averialibre text-2xl px-2  w-full py-1 h-16 text-center hover:text-orange-300 text-orange-700">
            <p class="font-averialibre text-2xl ">Batal</p>
        </button>
        <button onclick="hapus()" class="mx-1 border-2 rounded-xl hover:bg-orange-400 hover:border-orange-800 border-orange-900 bg-orange-800 font-averialibre text-2xl px-2  w-full py-1 h-16 text-center hover:text-orange-700 text-orange-300">
            <p class="font-averialibre text-2xl ">Hapus</p>
        </button>
    </div>
</div>

<!-- franchise / pending -->
<div id="popup-franchise" class="hidden fixed w-full h-screen z-30 px-2 md:px-10 md:pt-10 pt-20 pb-2 md:pb-8 items-center justify-center bg-[#00000080]">
        <div class="border-4 rounded-3xl w-full md:w-[50%] h-full px-5 md:px-7 pt-16 pb-5 overflow-scroll bg-orange-800 border-orange-500 flex flex-col relative overflow-x-hidden justify-center">

            <button onclick="closeFrc()" class="flex absolute cursor-pointer rotate-45 right-5 top-2 font-averialibrebold text-5xl scale-[1.3] text-orange-300 hover:text-orange-950">+</button>

            <div class="flex flex-row justify-between items-center">
                <!-- order id -->
                <p class="font-averialibre text-5xl text-orange-300">#FRC1</p>
                <!-- status -->
                <p class="font-averialibre text-2xl text-orange-300">pending</p>
            </div>

            <div class="flex flex-row gap-x-2 my-4 px-4 py-2 font-averialibre text-xl bg-orange-900 w-full rounded-xl text-orange-300">
                <p class="font-averialibre text-lg md:text-2xl text-orange-300">Status</p>
                <p class="font-averialibre text-lg md:text-2xl text-orange-300">:</p>
                <!-- wordingan bakal ganti di setiap status -->
                <p class="font-averialibre text-lg md:text-2xl text-orange-400">menunggu konfirmasi admin</p>
            </div>

            <div class="flex flex-col rounded-xl bg-orange-200 p-1 gap-y-1">
                <div class="rounded-xl px-4 py-2 flex-col flex bg-orange-900">
                    <p class="font-averialibre text-3xl text-orange-300">Package 1</p>
                    <div class="grid grid-cols-2 md:grid-cols-3">
                        <li class="font-averialibre text-lg text-orange-300">detail</li>
                        <li class="font-averialibre text-lg text-orange-300">detail</li>
                        <li class="font-averialibre text-lg text-orange-300">detail</li>
                        <li class="font-averialibre text-lg text-orange-300">detail</li>
                        <li class="font-averialibre text-lg text-orange-300">detail</li>
                    </div>
                </div>
                <div class="px-4 py-2 flex-col flex bg-orange-700 rounded-xl">
                    <!-- pas shipping, ini diganti jadi detail driver -->
                    <div class="flex flex-row py-2">
                        <div class="w-auto">
                            <p class="font-averialibre text-lg md:text-2xl text-orange-300">Alamat pribadi</p>
                        </div>
                        <div class="w-auto">
                            <p class="font-averialibre text-lg md:text-2xl text-orange-300 mx-5">:</p>
                        </div>
                        <div class="w-auto">
                            <p class="font-averialibre text-lg md:text-2xl text-orange-400">Jl scientia boulevard blok b25 no 4 tangerang selatan masa sih yaoi ya lesyfhi djndj</p>
                        </div>
                    </div>
                    <div class="flex flex-row py-2">
                        <div class="w-auto">
                            <p class="font-averialibre text-lg md:text-2xl text-orange-300">Alamat franchise</p>
                        </div>
                        <div class="w-auto">
                            <p class="font-averialibre text-lg md:text-2xl text-orange-300 mx-5">:</p>
                        </div>
                        <div class="w-auto">
                            <p class="font-averialibre text-lg md:text-2xl text-orange-400">Jl scientia boulevard blok b25 no 4 tangerang selatan</p>
                        </div>
                    </div>
                    <div class="flex flex-row py-2">
                        <div class="w-auto">
                            <p class="font-averialibre text-lg md:text-2xl text-orange-300">keterangan</p>
                        </div>
                        <div class="w-auto">
                            <p class="font-averialibre text-lg md:text-2xl text-orange-300 mx-5">:</p>
                        </div>
                        <div class="w-auto">
                            <p class="font-averialibre text-lg md:text-2xl text-orange-400">apa kek udah gede</p>
                        </div>
                    </div>
                </div>

                <!-- setelah approve, button diganti jadi "hubungi via whatsapp" -->
                <div class="rounded-xl px-4 py-6 flex-col md:flex-row flex bg-orange-400 gap-y-3 md:gap-y-0 gap-x-2">
                    <button onclick="openWarnFrc()" class="border-2 rounded-xl hover:bg-orange-500 hover:border-orange-800 border-orange-900 bg-orange-800 font-averialibre text-2xl px-2 w-full py-2 h-16 text-center hover:text-orange-700 text-orange-300">
                        <p class=" font-averialibre text-2xl md:text-4xl ">Batalkan Pengajuan</p>
                    </button>
                </div>
                <!-- <div class="rounded-xl px-4 py-6 flex-col md:flex-row flex bg-orange-400 gap-y-3 md:gap-y-0 gap-x-2">
                    <button onclick="BUKA WA" class="border-2 rounded-xl hover:bg-orange-500 hover:border-orange-800 border-orange-900 bg-orange-800 font-averialibre text-2xl px-2 w-full py-2 h-16 text-center hover:text-orange-700 text-orange-300">
                        <p class=" font-averialibre text-4xl ">Hubungi via whatsapp</p>
                    </button>
                </div> -->
            </div>

        </div>
</div>

<!-- popup / warning -->
<div id="popup-warning-frc" class="hidden fixed w-full h-screen z-40 px-10 pt-10 pb-8 items-center justify-center bg-[#00000080]">
    <div class="border-4 rounded-3xl w-full md:w-[30%] h-96 p-7 overflow-scroll bg-orange-700 border-orange-900 flex flex-col items-center justify-between overflow-x-hidden">
        <p class="text-orange-300 font-averialibre text-5xl">ⓘ</p>
        <p class="text-orange-300 font-averialibre text-2xl md:text-3xl text-justify mb-3">Apakah anda yakin ingin menghapus pengajuan franchise?</p>
        <button onclick="closeWarnFrc()" class="mx-1 border-2 rounded-xl hover:bg-orange-800 hover:border-orange-300 border-orange-900 bg-orange-400 font-averialibre text-2xl px-2  w-full py-1 h-16 text-center hover:text-orange-300 text-orange-700">
            <p class="font-averialibre text-2xl ">Batal</p>
        </button>
        <button onclick="hapusFrc()" class="mx-1 border-2 rounded-xl hover:bg-orange-400 hover:border-orange-800 border-orange-900 bg-orange-800 font-averialibre text-2xl px-2  w-full py-1 h-16 text-center hover:text-orange-700 text-orange-300">
            <p class="font-averialibre text-2xl ">Hapus</p>
        </button>
    </div>
</div>

<!-- popup / form -->
<!-- ini divnya ganti form aja -->
<div id="popup-edit" class="hidden fixed w-full h-screen z-30 px-2 md:px-10 md:pt-10 pt-20 pb-2 md:pb-8 items-center justify-center bg-[#00000080]">
        <div class="border-4 rounded-3xl w-full md:w-[50%] h-full px-5 md:px-7 pt-7 pb-5 overflow-scroll bg-orange-500 border-orange-800 flex flex-col relative overflow-x-hidden">

            <button onclick="closePopup()" class="flex absolute cursor-pointer rotate-45 right-5 top-2 font-averialibrebold text-5xl scale-[1.3] text-orange-800 hover:text-orange-950">+</button>

    
            <p class="text-orange-800 font-averialibre text-xl md:text-4xl mx-auto mb-3 md:mb-7 mt-10 md:mt-6" style="text-shadow: 4px 4px 4px #FFFFFF, -4px -4px 4px #FFFFFF, 4px -4px 4px #FFFFFF, -4px 4px 4px #FFFFFF;">FORM PEMESANAN BULK ORDER</p>

            <!-- series -->
            <div class="mb-2">
                <div id="series" class="flex justify-between flex-row bg-orange-700 py-2 px-3.5 rounded-2xl">

                    <p class="text-orange-300 font-averialibre text-lg md:text-2xl my-auto">Coklat Series</p>

                    <div class="flex items-center justify-center gap-2">

                        <div id="series-1" class="border-2 rounded-xl bg-orange-300 border-orange-800 font-averialibre text-2xl px-2 text-orange-700 w-32 py-1 h-12 text-center">0Pcs</div>

                        <button onclick="changeClass()" class="rounded-xl bg-orange-300 text-orange-700 w-16 h-12 py-1 border-2 border-orange-800 flex items-center justify-center">
                            <div class="w-6">
                                <img id="arrow" class="-rotate-90 object-cover duration-75" src="/images/arrow.webp" alt="Logo">
                            </div>
                        </button>

                        <script>
                            function changeClass() {
                                var arrow = document.getElementById('arrow');
                                var dropcontent = document.getElementById('dropcontent');
                                var series = document.getElementById('series');

                                if (arrow.classList.contains('rotate-0')) {
                                    arrow.classList.remove('rotate-0');
                                    arrow.classList.add('-rotate-90');
                                } else {
                                    arrow.classList.remove('-rotate-90');
                                    arrow.classList.add('rotate-0');
                                }

                                if (dropcontent.classList.contains('hidden')) {
                                    dropcontent.classList.remove('hidden');
                                    dropcontent.classList.add('flex');
                                    series.classList.remove('rounded-2xl');
                                    series.classList.add('rounded-t-2xl');
                                } else {
                                    dropcontent.classList.remove('flex');
                                    dropcontent.classList.add('hidden');
                                    series.classList.remove('rounded-t-2xl');
                                    series.classList.add('rounded-2xl');
                                }
                            }
                        </script>

                    </div>
                    
                </div>

                <div id="dropcontent" class="hidden duration-75 flex-col rounded-b-2xl py-2 bg-orange-300">

                

                    <!-- menu -->
                    <div class="flex justify-between flex-row  py-2 pr-4 md:md:pl-8 pl-4">
                        <p class="text-orange-700 font-averialibre text-lg md:text-2xl my-auto">Coklat</p>



                        <div class="flex items-center justify-center gap-2">

                            <button onclick="kurangAngka('series-1-menu-1')" class="rounded-xl bg-orange-300 hover:bg-orange-800 hover:text-orange-300 text-orange-700 w-10 h-10 py-1 border-2 border-orange-800 flex items-center justify-center text-3xl font-averialibre">
                                <p class="text-center -translate-y-[1.5px]">-</p>
                            </button>

                            <input type="text" id="series-1-menu-1" placeholder="0" class="border-2 rounded-xl bg-orange-300 border-orange-800 focus:outline-none font-averialibre text-2xl px-2 text-orange-700 placeholder-orange-700 w-24 py-1 h-10 text-center" oninput="this.value=this.value.replace(/[^0-9]/g,'')"> </input>

                            <button onclick="tambahAngka('series-1-menu-1')" class="rounded-xl bg-orange-300 hover:bg-orange-800 hover:text-orange-300 text-orange-700 w-10 h-10 py-1 border-2 border-orange-800 flex items-center justify-center text-3xl font-averialibre">
                                <p class="text-center -translate-y-[1.55px]">+</p>
                            </button>

                        </div>

                    </div>

                    <div class="flex justify-between flex-row  py-2 pr-4 md:pl-8 pl-4">

                        <p class="text-orange-700 font-averialibre text-lg md:text-2xl my-auto">Coklat vanilla</p>
                        <div class="flex items-center justify-center gap-2">

                            <button onclick="kurangAngka('series-1-menu-2')" class="rounded-xl bg-orange-300 hover:bg-orange-800 hover:text-orange-300 text-orange-700 w-10 h-10 py-1 border-2 border-orange-800 flex items-center justify-center text-3xl font-averialibre">
                                <p class="text-center -translate-y-[1.5px]">-</p>
                            </button>

                            <input type="text" id="series-1-menu-2" placeholder="0" class="border-2 rounded-xl bg-orange-300 border-orange-800 focus:outline-none font-averialibre text-2xl px-2 text-orange-700 w-24 py-1 h-10 text-center placeholder-orange-700" oninput="this.value=this.value.replace(/[^0-9]/g,'')"> </input>

                            <button onclick="tambahAngka('series-1-menu-2')" class="rounded-xl bg-orange-300 hover:bg-orange-800 hover:text-orange-300 text-orange-700 w-10 h-10 py-1 border-2 border-orange-800 flex items-center justify-center text-3xl font-averialibre">
                                <p class="text-center -translate-y-[1.55px]">+</p>
                            </button>

                        </div>
                    </div>

                    

                    

                </div>
            </div>

            <!-- series -->
            <div class="mb-2">
                <div id="series2" class="flex justify-between flex-row bg-orange-700 py-2 px-3.5 rounded-2xl">

                    <p class="text-orange-300 font-averialibre text-lg md:text-2xl my-auto">Vanilla Series</p>

                    <div class="flex items-center justify-center gap-2">

                    <div id="series-2" class="border-2 rounded-xl bg-orange-300 border-orange-800 font-averialibre text-2xl px-2 text-orange-700 w-32 py-1 h-12 text-center">0Pcs</div>

                        <button onclick="changeClass2()" class="rounded-xl bg-orange-300 text-orange-700 w-16 h-12 py-1 border-2 border-orange-800 flex items-center justify-center">
                            <div class="w-6">
                                <img id="arrow2" class="-rotate-90 object-cover duration-75" src="/images/arrow.webp" alt="Logo">
                            </div>
                        </button>

                        <script>
                            function changeClass2() {
                                var arrow2 = document.getElementById('arrow2');
                                var dropcontent2 = document.getElementById('dropcontent2');
                                var series2 = document.getElementById('series2');

                                if (arrow2.classList.contains('rotate-0')) {
                                    arrow2.classList.remove('rotate-0');
                                    arrow2.classList.add('-rotate-90');
                                } else {
                                    arrow2.classList.remove('-rotate-90');
                                    arrow2.classList.add('rotate-0');
                                }

                                if (dropcontent2.classList.contains('hidden')) {
                                    dropcontent2.classList.remove('hidden');
                                    dropcontent2.classList.add('flex');
                                    series2.classList.remove('rounded-2xl');
                                    series2.classList.add('rounded-t-2xl');
                                } else {
                                    dropcontent2.classList.remove('flex');
                                    dropcontent2.classList.add('hidden');
                                    series2.classList.remove('rounded-t-2xl');
                                    series2.classList.add('rounded-2xl');
                                }
                            }
                        </script>

                    </div>
                    
                </div>

                <div id="dropcontent2" class="hidden duration-75 flex-col rounded-b-2xl py-2 bg-orange-300 ">
                    <!-- menu -->
                    <div class="flex justify-between flex-row  py-2 pr-4 md:pl-8 pl-4">
                        <p class="text-orange-700 font-averialibre text-lg md:text-2xl my-auto">Vanilla</p>

                        <div class="flex items-center justify-center gap-2">

                            <button onclick="kurangAngka('series-2-menu-1')" class="rounded-xl bg-orange-300 hover:bg-orange-800 hover:text-orange-300 text-orange-700 w-10 h-10 py-1 border-2 border-orange-800 flex items-center justify-center text-3xl font-averialibre">
                                <p class="text-center -translate-y-[1.5px]">-</p>
                            </button>

                            <input type="text" id="series-2-menu-1" placeholder="0" class="border-2 rounded-xl bg-orange-300 border-orange-800 focus:outline-none font-averialibre text-2xl px-2 text-orange-700 placeholder-orange-700 w-24 py-1 h-10 text-center" oninput="this.value=this.value.replace(/[^0-9]/g,'')"> </input>

                            <button onclick="tambahAngka('series-2-menu-1')" class="rounded-xl bg-orange-300 hover:bg-orange-800 hover:text-orange-300 text-orange-700 w-10 h-10 py-1 border-2 border-orange-800 flex items-center justify-center text-3xl font-averialibre">
                                <p class="text-center -translate-y-[1.55px]">+</p>
                            </button>

                        </div>

                    </div>

                    <div class="flex justify-between flex-row  py-2 pr-4 md:pl-8 pl-4">

                        <p class="text-orange-700 font-averialibre text-lg md:text-2xl my-auto">Vanilla oreo</p>

                        <div class="flex items-center justify-center gap-2">

                            <button onclick="kurangAngka('series-2-menu-2')" class="rounded-xl bg-orange-300 hover:bg-orange-800 hover:text-orange-300 text-orange-700 w-10 h-10 py-1 border-2 border-orange-800 flex items-center justify-center text-3xl font-averialibre">
                                <p class="text-center -translate-y-[1.5px]">-</p>
                            </button>

                            <input type="text" id="series-2-menu-2" placeholder="0" class="border-2 rounded-xl bg-orange-300 border-orange-800 focus:outline-none font-averialibre text-2xl px-2 text-orange-700 placeholder-orange-700 w-24 py-1 h-10 text-center" oninput="this.value=this.value.replace(/[^0-9]/g,'')"> </input>

                            <button onclick="tambahAngka('series-2-menu-2')" class="rounded-xl bg-orange-300 hover:bg-orange-800 hover:text-orange-300 text-orange-700 w-10 h-10 py-1 border-2 border-orange-800 flex items-center justify-center text-3xl font-averialibre">
                                <p class="text-center -translate-y-[1.55px]">+</p>
                            </button>

                        </div>
                    </div>

                    

                </div>
            </div>


            <!-- series -->
            <div class="mb-2">
                <div id="series3" class="flex justify-between flex-row bg-orange-700 py-2 px-3.5 rounded-2xl">

                    <p class="text-orange-300 font-averialibre text-lg md:text-2xl my-auto">Other Series</p>

                    <div class="flex items-center justify-center gap-2">

                    <div id="series-3" class="border-2 rounded-xl bg-orange-300 border-orange-800 font-averialibre text-2xl px-2 text-orange-700 w-32 py-1 h-12 text-center">0Pcs</div>

                        <button onclick="changeClass3()" class="rounded-xl bg-orange-300 text-orange-700 w-16 h-12 py-1 border-2 border-orange-800 flex items-center justify-center">
                            <div class="w-6">
                                <img id="arrow3" class="-rotate-90 object-cover duration-75" src="/images/arrow.webp" alt="Logo">
                            </div>
                        </button>

                        <script>
                            function changeClass3() {
                                var arrow3 = document.getElementById('arrow3');
                                var dropcontent3 = document.getElementById('dropcontent3');
                                var series3 = document.getElementById('series3');

                                if (arrow3.classList.contains('rotate-0')) {
                                    arrow3.classList.remove('rotate-0');
                                    arrow3.classList.add('-rotate-90');
                                } else {
                                    arrow3.classList.remove('-rotate-90');
                                    arrow3.classList.add('rotate-0');
                                }

                                if (dropcontent3.classList.contains('hidden')) {
                                    dropcontent3.classList.remove('hidden');
                                    dropcontent3.classList.add('flex');
                                    series3.classList.remove('rounded-2xl');
                                    series3.classList.add('rounded-t-2xl');
                                } else {
                                    dropcontent3.classList.remove('flex');
                                    dropcontent3.classList.add('hidden');
                                    series3.classList.remove('rounded-t-2xl');
                                    series3.classList.add('rounded-2xl');
                                }
                            }
                        </script>

                    </div>
                    
                </div>

                <div id="dropcontent3" class="hidden duration-75 flex-col rounded-b-2xl py-2 bg-orange-300 ">
                    <!-- menu -->
                    <div class="flex justify-between flex-row  py-2 pr-4 md:pl-8 pl-4">
                        <p class="text-orange-700 font-averialibre text-lg md:text-2xl my-auto">Strawberry</p>

                        <div class="flex items-center justify-center gap-2">

                            <button onclick="kurangAngka('series-3-menu-1')" class="rounded-xl bg-orange-300 hover:bg-orange-800 hover:text-orange-300 text-orange-700 w-10 h-10 py-1 border-2 border-orange-800 flex items-center justify-center text-3xl font-averialibre">
                                <p class="text-center -translate-y-[1.5px]">-</p>
                            </button>

                            <input type="text" id="series-3-menu-1" placeholder="0" class="border-2 rounded-xl bg-orange-300 border-orange-800 focus:outline-none font-averialibre text-2xl px-2 text-orange-700 placeholder-orange-700 w-24 py-1 h-10 text-center" oninput="this.value=this.value.replace(/[^0-9]/g,'')"> </input>

                            <button onclick="tambahAngka('series-3-menu-1')" class="rounded-xl bg-orange-300 hover:bg-orange-800 hover:text-orange-300 text-orange-700 w-10 h-10 py-1 border-2 border-orange-800 flex items-center justify-center text-3xl font-averialibre">
                                <p class="text-center -translate-y-[1.55px]">+</p>
                            </button>

                        </div>

                    </div>

                    <div class="flex justify-between flex-row  py-2 pr-4 md:pl-8 pl-4">

                        <p class="text-orange-700 font-averialibre text-lg md:text-2xl my-auto">Kacang merah</p>
                        <div class="flex items-center justify-center gap-2">

                            <button onclick="kurangAngka('series-3-menu-2')" class="rounded-xl bg-orange-300 hover:bg-orange-800 hover:text-orange-300 text-orange-700 w-10 h-10 py-1 border-2 border-orange-800 flex items-center justify-center text-3xl font-averialibre">
                                    <p class="text-center -translate-y-[1.5px]">-</p>
                                </button>

                            <input type="text" id="series-3-menu-2" placeholder="0" class="border-2 rounded-xl bg-orange-300 border-orange-800 focus:outline-none font-averialibre text-2xl px-2 text-orange-700 placeholder-orange-700 w-24 py-1 h-10 text-center" oninput="this.value=this.value.replace(/[^0-9]/g,'')"> </input>

                            <button onclick="tambahAngka('series-3-menu-2')" class="rounded-xl bg-orange-300 hover:bg-orange-800 hover:text-orange-300 text-orange-700 w-10 h-10 py-1 border-2 border-orange-800 flex items-center justify-center text-3xl font-averialibre">
                                <p class="text-center -translate-y-[1.55px]">+</p>
                            </button>

                        </div>
                    </div>

                    

                    

                </div>
            </div>

            <div class="mb-4">
                <div id="series3" class="flex justify-between flex-col md:flex-row bg-orange-700 py-2 px-3.5 rounded-2xl items-center">
                    
                    <div class="flex flex-col">
                        <p class="text-orange-300 font-averialibre text-3xl my-auto">TOTAL PESANAN</p>
                        <p class="text-orange-300 font-averialibre text-xs my-auto -mt-2 ml-1">*harga belum termasuk ongkos kirim</p>
                    </div>


                    <div class="flex items-center md:justify-center gap-2 h-16">

                        <div id="grandpcs" class="border-2 rounded-xl bg-orange-300 border-orange-800 focus:outline-none font-averialibre text-2xl px-4 text-orange-700 py-1 h-12 text-center">0Pcs</div>

                        <div id="grandtotal" class="w-36 border-2 rounded-xl bg-orange-300 border-orange-800 focus:outline-none font-averialibre text-2xl px-4 text-orange-700 py-1 h-12 text-center">-</div>


                    </div>

                </div>
            </div>

            <div class="flex flex-col md:flex-row justify-between mb-3">

                <p class="text-orange-200 font-averialibre text-2xl my-auto ml-2 w-[40%]">ALAMAT</p>

                <textarea name="name" type="name" class="bg-orange-300 border-orange-800 text-orange-700 border-2 outline-none text-xl rounded-xl p-3 max-h-28 h-28 font-averialibre w-full md:w-[60%]"></textarea>

            </div>

            <div class="flex flex-col md:flex-row justify-between mb-7">

                <p class="text-orange-200 font-averialibre text-2xl my-auto ml-2 w-full md:w-[40%]">TANGGAL PENGIRIMAN</p>

                <input type="date" class="bg-orange-300 border-orange-800 text-orange-700 border-2 outline-none text-xl rounded-xl max-h-28 h-16 p-3 font-averialibre w-full md:w-[60%]"></input>

                
            </div>

            <button type="submit" onclick="formComplete()" class="border-2 rounded-xl hover:bg-orange-400 hover:border-orange-800 border-orange-900 bg-orange-700 font-averialibre text-2xl px-2   w-full py-2 h-16 text-center hover:text-orange-700 text-orange-300">
                <p class=" font-averialibre text-4xl ">Save</p>
            </button>



        </div>


<!-- close form // ini divnya ganti form aja-->
</div>

    <script>

    document.getElementById('series-1-menu-1').addEventListener('input', function() {
        updateResult();
    });
    document.getElementById('series-1-menu-2').addEventListener('input', function() {
        updateResult();
    });
    document.getElementById('series-2-menu-1').addEventListener('input', function() {
        updateResult();
    });
    document.getElementById('series-2-menu-2').addEventListener('input', function() {
        updateResult();
    });
    document.getElementById('series-3-menu-1').addEventListener('input', function() {
        updateResult();
    });
    document.getElementById('series-3-menu-2').addEventListener('input', function() {
        updateResult();
    });


    function tambahAngka(id) {
        var input = document.getElementById(id);
        if (!input.value.trim()) {
            input.value = "1";
        } else {
            input.value = parseInt(input.value) + 1;
        }
        updateResult();
    }

    function kurangAngka(id) {
        var input = document.getElementById(id);
        if (!input.value.trim()) {
            input.value = "0";
        } else {
            input.value = Math.max(parseInt(input.value) - 1, 0);
        }
        updateResult();
    }

    function updateResult() {
        var series1angka1 = document.getElementById('series-1-menu-1').value;
        var series1angka2 = document.getElementById('series-1-menu-2').value;
        var series2angka1 = document.getElementById('series-2-menu-1').value;
        var series2angka2 = document.getElementById('series-2-menu-2').value;
        var series3angka1 = document.getElementById('series-3-menu-1').value;
        var series3angka2 = document.getElementById('series-3-menu-2').value;

        series1angka1 = series1angka1 || 0;
        series1angka2 = series1angka2 || 0;
        series2angka1 = series2angka1 || 0;
        series2angka2 = series2angka2 || 0;
        series3angka1 = series3angka1 || 0;
        series3angka2 = series3angka2 || 0;

        var series1jumlah = parseInt(series1angka1) + parseInt(series1angka2);
        series1jumlah = Math.max(series1jumlah, 0);
        document.getElementById('series-1').innerHTML = series1jumlah + 'Pcs';

        var series2jumlah = parseInt(series2angka1) + parseInt(series2angka2);
        series2jumlah = Math.max(series2jumlah, 0);
        document.getElementById('series-2').innerHTML = series2jumlah + 'Pcs';

        var series3jumlah = parseInt(series3angka1) + parseInt(series3angka2);
        series3jumlah = Math.max(series3jumlah, 0);
        document.getElementById('series-3').innerHTML = series3jumlah + 'Pcs';

        grandpcs = series1jumlah + series2jumlah + series3jumlah;
        document.getElementById('grandpcs').innerHTML = grandpcs + 'Pcs';

        let price;

        if (grandpcs > 100) {
            price = 7000;
        } else if (grandpcs > 50) {
            price = 10000;
        } else {
            price = 13000;
        }
        
        let grandtotal = grandpcs * price;

        // Format grandtotal sebagai mata uang Rupiah tanpa desimal jika nol
        let formattedGrandtotal = new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0, // Set minimum desimal ke 0
        maximumFractionDigits: 2 // Set maksimum desimal ke 2
        }).format(grandtotal);
        
        var boxtotal = document.getElementById('grandtotal');
        boxtotal.classList.remove('w-36');

        document.getElementById('grandtotal').innerHTML = formattedGrandtotal;

    }
    </script>
    
    <script>
        var main = document.getElementById('popup-edit');
        var warning = document.getElementById('popup-warning');
        var sstatus = document.getElementById('popup-sstatus');
        var franchise = document.getElementById('popup-franchise');
        var warningfrc = document.getElementById('popup-warning-frc');

        function formComplete() {
            main.classList.remove('flex');
            main.classList.add('hidden');
            sstatus.classList.remove('flex');
            sstatus.classList.add('hidden');
        }

        function openForm() {
            main.classList.remove('hidden');
            main.classList.add('flex');
        }

        function openWarn() {
            warning.classList.remove('hidden');
            warning.classList.add('flex');
        }

        function openWarnFrc() {
            warningfrc.classList.remove('hidden');
            warningfrc.classList.add('flex');
        }

        function openStatus() {
            sstatus.classList.remove('hidden');
            sstatus.classList.add('flex');
        }

        function openFrc() {
            franchise.classList.remove('hidden');
            franchise.classList.add('flex');
        }

        function closeFrc() {
            franchise.classList.remove('flex');
            franchise.classList.add('hidden');
        }

        function closePopup() {
            main.classList.remove('flex');
            main.classList.add('hidden');
        }

        function closeWarn() {
            warning.classList.remove('flex');
            warning.classList.add('hidden');
        }

        function closeWarnFrc() {
            warningfrc.classList.remove('flex');
            warningfrc.classList.add('hidden');
        }

        function hapus() {
            warning.classList.remove('flex');
            warning.classList.add('hidden');
            sstatus.classList.remove('flex');
            sstatus.classList.add('hidden');
        }

        function hapusFrc() {
            warningfrc.classList.remove('flex');
            warningfrc.classList.add('hidden');
            franchise.classList.remove('flex');
            franchise.classList.add('hidden');
        }

        function closeStatus() {
            sstatus.classList.remove('flex');
            sstatus.classList.add('hidden');
        }
    </script>

    <!-- navbar mobile -->
    <div id="header" x-data="{ isOpen: false }" class="fixed rounded-b-2xl border-x-2 border-b-2 border-orange-300  bg-orange-700  justify-center z-40 w-[97%] md:hidden flex items-center flex-col">

            <button @click="isOpen = !isOpen" type="submit" class="w-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 my-2 text-orange-300 lg:hidden mx-auto" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            

            <div class="w-full">

                <div class="w-full h-2 bg-gradient-to-t from-orange-300" x-show="isOpen"
                    @click.away=" isOpen = false">
                </div>

                <div class="flex left-0 w-full px-3 pt-4 pb-6 bg-orange-300 rounded-b-xl" x-show="isOpen"
                    @click.away=" isOpen = false">
                    <div class="flex flex-col space-y-4 w-full items-center">
                        <a class="text-orange-700 font-averialibre cursor-pointer text-2xl" href="/">SIGN IN</a>
                        <a class="text-orange-700 font-averialibre cursor-pointer text-2xl" href="/">HOME</a>
                        <a class="text-orange-700 font-averialibre cursor-pointer text-2xl" href="/bulk-order">BULK ORDER</a>
                        <a class="text-orange-700 font-averialibre cursor-pointer text-2xl" href="/">FRANCHISE</a>
                        <a class="text-orange-700 font-averialibre cursor-pointer text-2xl" href="/">ABOUT US</a>
                        <a class="text-orange-700 font-averialibre cursor-pointer text-2xl" href="/">MY DASHBOARD</a>
                    </div>
                </div>

            </div>
        
    </div>

    <!-- section - home -->
    <div class="relative w-full">
        


        <!-- navbar -->
        <div id="navbar" class="hidden md:flex justify-between w-screen h-16 pt-3 pr-5 items-center z-10 mt-2">
            <div class="w-[10%]flex items-center justify-center z-10">
                <img class="object-cover h-16" src="/images/logo.webp" alt="Logo">
            </div>
            <div class="w-[75%] flex h-full px-10 rounded-full border-2 border-yellow-800 bg-orange-300 items-center justify-between z-10">
                <a href="/" class="text-orange-800 font-averialibre hover:font-averialibrebold text-2xl">Home</a>
                <a href="/bulk-order" class="text-orange-800 font-averialibre hover:font-averialibrebold text-2xl">Bulk Order</a>
                <a href="" class="text-orange-800 font-averialibre hover:font-averialibrebold text-2xl">Franchise</a>
                <a href="" class="text-orange-800 font-averialibre hover:font-averialibrebold text-2xl">About Us</a>
                <a href="" class="text-orange-800 font-averialibre hover:font-averialibrebold text-2xl">My Dashboard</a>
            </div>
            <button href="" class="w-[12%] hover:scale-[1.2] duration-75 flex h-full ml-3 rounded-full border-2 border-yellow-800 bg-orange-300 items-center justify-center">
                    <div class="w-8 flex items-center justify-center">
                        <img class="object-cover invert" src="/images/avatar.webp" alt="Logo">
                    </div>
                    <p class="text-orange-800 font-averialibre text-2xl ml-3">Log in</p>
            </button>
        </div>


        <!-- popup -->
        
        

        <!-- home -->
        <div class="flex flex-col items-center relative h-full w-full md:mt-3 pt-20 md:pt-0 bg-orange-500 py-10">

            <div class="w-[90%]">
                <p class="font-averialibre text-5xl text-orange-900 my-2 mt-6 pl-4">ORDER STATUS</p>
                <div class="w-full p-5 rounded-2xl bg-orange-300 flex-row flex gap-x-2 overflow-x-scroll">

                    <!-- order 1 // pending -->
                    <div>
                        <div class="w-96 h-96 bg-orange-800 rounded-2xl  p-4 justify-between flex flex-col border-4 border-orange-500">
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
                            <button onclick="openStatus()" class="border-2 mt-3 rounded-xl hover:bg-orange-400 hover:border-orange-800 border-orange-900 bg-orange-600 font-averialibre text-2xl px-2 w-full py-2 h-16 text-center hover:text-orange-700 text-orange-300">
                                <p class=" font-averialibre text-4xl ">Lihat detail</p>
                            </button>
                        </div>
                    </div>
                </div>

                <p class="font-averialibre text-5xl text-orange-900 my-2 mt-6 pl-4">FRANCHISE STATUS</p>
                <div class="w-full p-5 rounded-2xl bg-orange-300 flex-row flex gap-x-2 overflow-x-scroll">

                    <!-- franchise 1 // pending -->
                    <div>
                        <div class="w-96 h-96 bg-orange-800 rounded-2xl  p-4 justify-between flex flex-col border-4 border-orange-500">
                            <div class="flex flex-row justify-between items-center">
                                <p class="font-averialibre text-5xl text-orange-300">#FRC01</p>
                                <!-- status -->
                                <p class="font-averialibre text-2xl text-orange-300">pending</p>
                            </div>
                            <p class="font-averialibre text-orange-300 text-4xl my-6">Package 1</p>
                            <div class="flex flex-row gap-x-2 items-center">
                                <div class="w-auto">
                                    <p class="font-averialibre text-2xl text-orange-300">Request date</p>
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
                            <button onclick="openFrc()" class="border-2 mt-3 rounded-xl hover:bg-orange-400 hover:border-orange-800 border-orange-900 bg-orange-600 font-averialibre text-2xl px-2 w-full py-2 h-16 text-center hover:text-orange-700 text-orange-300">
                                <p class=" font-averialibre text-4xl ">Lihat detail</p>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>      


            
       

    </div>



    
        

    <!-- footer -->
    <div class="w-full flex flex-col z-10 px-5 md:px-3 md:pl-7 py-7 bg-[#FF6400]">
        <p class="text-orange-800 font-averialibre text-3xl md:text-4xl mb-3">Mamappang - Best In Town</p>
        <p class="text-orange-800 font-averialibre text-lg md:text-xl w-full md:w-[70%] text-justify mb-6">mammapang is Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
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
</body>

</html>