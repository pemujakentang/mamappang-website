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

<div class="mx-auto my-auto overflow-hidden relative flex flex-col items-center bg-[#FF6400]">

    
    <!-- section - home -->

    <!-- popup / form -->
    <form id="popup-main" class="hidden fixed w-full h-screen z-30 px-2 md:px-10 pt-10 pb-8 items-center justify-center bg-[#00000080]">
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

            <button onclick="formComplete()" class="border-2 rounded-xl hover:bg-orange-400 hover:border-orange-800 border-orange-900 bg-orange-700 font-averialibre text-2xl px-2   w-full py-2 h-16 text-center hover:text-orange-700 text-orange-300">
                <p class=" font-averialibre text-4xl ">Pesan Sekarang</p>
            </button>



        </div>

        <div id="popup-tnc" class="hidden fixed w-full h-screen z-30 px-10 pt-10 pb-8 items-center justify-center bg-[#00000080]">
        
            <div class="relative border-4 rounded-3xl w-full md:w-[30%] h-96 p-7 overflow-scroll bg-orange-700 border-orange-900 flex flex-col items-center justify-between overflow-x-hidden">
                <button onclick="closeTnc()" class="flex absolute cursor-pointer rotate-45 right-5 top-2 font-averialibrebold text-5xl scale-[1.3] text-orange-300 hover:text-orange-950">+</button>
                <p class="text-orange-300 font-averialibre text-5xl mb-5">ⓘ</p>
                <p class="text-orange-300 font-averialibre text-lg md:text-xl text-justify md:mb-0 mb-3">Perlu diingat bahwa pemesanan membutuhkan persetujuan dari pihak kami, Persetujuan akan kami kirim via email dan anda akan dikontak oleh admin.</p>
                <button type="submit" onclick="tncComplete()" class="mx-1 border-2 rounded-xl hover:bg-orange-400 hover:border-orange-800 border-orange-900 bg-orange-800 font-averialibre text-2xl px-2  w-full py-1 h-16 text-center hover:text-orange-700 text-orange-300">
                    <p class=" font-averialibre text-lg md:text-2xl ">Kirim permohonan pesanan</p>
                </button>
            </div>
    
    </div>

    <!-- close form -->
    </form>

    

    <div id="popup-done" class="hidden fixed w-full h-screen z-40 px-10 pt-10 pb-8 items-center justify-center bg-[#00000080]">
        <div class="border-4 rounded-3xl w-full md:w-[30%] h-96 p-7 overflow-scroll bg-orange-700 border-orange-900 flex flex-col items-center justify-between overflow-x-hidden">
            <div class="w-14">
                <img class="object-cover" src="/images/done.webp" alt="Logo">
            </div>
            <p class="text-orange-300 font-averialibre text-2xl md:text-3xl text-justify">Permohonan terkirim!</p>
            <p class="text-orange-300 font-averialibre text-xl text-center">Cek email atau page my order untuk pemberitahuan berikutnya.</p>
            <button onclick="doneComplete()" class="mx-1 border-2 rounded-xl hover:bg-orange-400 hover:border-orange-800 border-orange-900 bg-orange-800 font-averialibre text-2xl px-2  w-full py-1 h-16 text-center hover:text-orange-700 text-orange-300">
                    <p class="font-averialibre text-2xl ">Cek my order</p>
            </button>
        </div>
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
        var main = document.getElementById('popup-main');
        var done = document.getElementById('popup-done');
        var tnc = document.getElementById('popup-tnc');

        function doneComplete() {
            done.classList.remove('flex');
            done.classList.add('hidden');
        }

        function tncComplete() {
            tnc.classList.remove('flex');
            tnc.classList.add('hidden');
            done.classList.remove('hidden');
            done.classList.add('flex');
            main.classList.remove('flex');
            main.classList.add('hidden');
        }

        function formComplete() {
            tnc.classList.remove('hidden');
            tnc.classList.add('flex');
        }

        function closeTnc() {
            tnc.classList.remove('flex');
            tnc.classList.add('hidden');
        }

        function openForm() {
            main.classList.remove('hidden');
            main.classList.add('flex');
        }

        function closePopup() {
            main.classList.remove('flex');
            main.classList.add('hidden');
        }
    </script>

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
            
            
    <div class="h-screen flex relative justify-center flex-col">

            
    
        <img class="absolute h-96 z-10 -right-56 bottom-10 mt-6 animate-wiggle opacity-70" src="/images/awan.webp" alt="Logo">
        <img class="absolute h-96 z-10 -left-60 -bottom-32 animate-wiggle opacity-70" src="/images/awan.webp" alt="Logo">
        <div class="absolute h-80 z-10 left-20 top-32 animate-move-x">
            <img class="animate-move-y opacity-70 h-80" src="/images/awan.webp" alt="Logo">
        </div>


        <!-- navbar -->
        <div id="navbar" class="hidden md:flex justify-between w-screen h-16 pt-3 pr-5 items-center z-10 mt-2">
            <div class="w-[10%] flex items-center justify-center z-10">
                <img class="object-cover h-16 " src="/images/logo.webp" alt="Logo">
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

        <!-- home -->
        <div class="flex flex-col items-center relative z-10 h-full justify-center d:-mt-20">

            <div class="flex flex-col md:flex-row w-[90%] mt-2 justify-center">
                <div class="w-full md:w-[50%]">
                    <div class="w-full md:w-[85%] flex items-center justify-center mx-auto mb-10 md:mb-4">
                        <img class="object-cover z-10" src="/images/logo3.webp" alt="Logo">
                        <div class="absolute w-screen z-0 translate-y-4 flex md:hidden scale-[1.1]">
                            <img class="object-cover animate-spin-slow" src="/images/cahaya.webp" alt="Logo">
                        </div>
                    </div>
            </div>

                <div class="w-full md:w-[50%] flex flex-col justify-center md:pr-7 z-10">
                    <!-- SERIES #1 -->
                    <p class="text-orange-800 font-averialibrebold text-5xl mx-auto mb-6" style="text-shadow: 4px 4px 4px #FFFFFF, -4px -4px 4px #FFFFFF, 4px -4px 4px #FFFFFF, -4px 4px 4px #FFFFFF;">BULK ORDER</p>
                    <p class="text-orange-800 font-averialibrebold text-xl md:text-2xl text-justify mx-auto " style="text-shadow: 4px 4px 4px #FFFFFF, -4px -4px 4px #FFFFFF, 4px -4px 4px #FFFFFF, -4px 4px 4px #FFFFFF;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, cupiditate adipisci, inventore et necessitatibus nemo nesciunt repellat debitis, officia laborum temporibus tempore soluta ut dolore. Ullam quidem magni nisi. Ab!</p>
                </div>
            </div>

        </div>

        <div class="flex bottom-5 md:bottom-10 absolute z-10 w-full items-center justify-center pb-5">
            <a href="#menu-bulk" class="no-underline">
                <button href="" class="flex h-16 rounded-full border-2 border-yellow-800 bg-orange-300 items-center justify-center px-6 hover:scale-[1.2] duration-75">
                    <p class="text-orange-800 font-averialibre text-2xl mr-2 ml-3">Lihat Penawaran</p>
                    <div class="w-8 flex items-center justify-center">
                        <img class="object-cover h-3" src="/images/arrow.webp" alt="Logo">
                    </div>
                </button>
            </a>
        </div>

    </div>

    <div class="w-full hidden md:flex">
        <div class="fixed w-screen z-0 scale-[1.7] lg:-mt-56 md:-mt-48">
            <img class="object-cover animate-spin-slow" src="/images/cahaya.webp" alt="Logo">
        </div>
        
    </div>

    

    <!-- section - menu -->
    <div id="menu-bulk" class="pt-24 md:pt-12 w-full flex flex-col items-center z-10 py-12 bg-orange-500">
        <p class="text-orange-800 font-averialibre text-2xl md:text-5xl mx-auto -mt-5 mb-5" style="text-shadow: 4px 4px 4px #FFFFFF, -4px -4px 4px #FFFFFF, 4px -4px 4px #FFFFFF, -4px 4px 4px #FFFFFF;">HARGA SPECIAL BULK ORDER</p>
        <div class="flex flex-col md:flex-row w-[90%] gap-2 md:gap-5">
            <div class="w-full md:w-[50%]">
                <div class="flex rounded-3xl border-2 border-orange-300 bg-orange-700 items-center justify-center p-6 flex-col md:flex-row">
                    <div class="w-[45%] flex flex-col items-center justify-center mx-auto pl-3 mb-4">
                        <img class="object-cover" src="/images/logo3.webp" alt="Logo">
                        <p class="text-orange-300 font-averialibre text-2xl md:text-3xl md:mt-3">20-50 Pcs</p>
                    </div>

                    <div class="w-full md:w-[50%] text-center md:text-end">
                        <p class="text-orange-200 md:text-orange-300 font-averialibre text-4xl md:mr-3">Rp. 10.000/Pcs</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-[50%]">
                <div class="flex rounded-3xl border-2 border-orange-300 bg-orange-700 items-center justify-center p-6 flex-col md:flex-row">
                    <div class="w-[45%] flex flex-col items-center justify-center mx-auto pl-3 mb-4">
                        <img class="object-cover" src="/images/logo3.webp" alt="Logo">
                        <p class="text-orange-300 font-averialibre text-2xl md:text-3xl md:mt-3">20-50 Pcs</p>
                    </div>

                    <div class="w-full md:w-[50%] text-center md:text-end">
                        <p class="text-orange-200 md:text-orange-300 font-averialibre text-4xl md:mr-3">Rp. 10.000/Pcs</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-row w-[90%] items-center justify-center m-2 md:m-5">
            <div class="w-full md:w-[50%]">
                <div class="flex rounded-3xl border-2 border-orange-300 bg-orange-700 items-center justify-center p-6 flex-col md:flex-row">
                    <div class="w-[45%] flex flex-col items-center justify-center mx-auto pl-3 mb-4">
                        <img class="object-cover" src="/images/logo3.webp" alt="Logo">
                        <p class="text-orange-300 font-averialibre text-2xl md:text-3xl md:mt-3">20-50 Pcs</p>
                    </div>

                    <div class="w-full md:w-[50%] text-center md:text-end">
                        <p class="text-orange-200 md:text-orange-300 font-averialibre text-4xl md:mr-3">Rp. 10.000/Pcs</p>
                    </div>
                </div>
            </div>
        </div>

        <button onclick="openForm()" href="" class="flex h-20 w-[90%] md:w-[35%] rounded-full border-2 border-yellow-800 bg-orange-400 items-center justify-center mt-3 hover:scale-[1.2] duration-75">
            <p class="text-white font-averialibre text-4xl mx-6">ORDER SEKARANG!</p>
        </button>
    </div>



    <!-- footer -->
    <div class="w-full flex flex-col z-10 px-5 md:px-3 md:pl-7 py-7" style="background-image: url('/images/background-menu.webp');">
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