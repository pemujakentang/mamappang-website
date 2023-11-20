<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @vite('resources/css/app.css')
    <title>Franchise</title>

</head>

<body>
    <div
        class="fixed mx-auto my-auto overflow-y-hidden relative overflow-x-hidden flex flex-col items-center bg-[#FF6400]">
        <div class="h-screen flex relative justify-center flex-col">



            <img class="absolute h-96 z-10 -right-56 bottom-10 mt-6 animate-wiggle opacity-70" src="/images/awan.webp"
                alt="Logo">
            <img class="absolute h-96 z-10 -left-60 -bottom-32 animate-wiggle opacity-70" src="/images/awan.webp"
                alt="Logo">
            <div class="absolute h-80 z-10 left-20 top-32 animate-move-x">
                <img class="animate-move-y opacity-70 h-80" src="/images/awan.webp" alt="Logo">
            </div>


            <!-- navbar -->
            <div id="navbar" class="hidden md:flex justify-between w-screen h-16 pt-3 pr-5 items-center z-10 mt-2">
                <div class="w-[10%] flex items-center justify-center z-10">
                    <img class="object-cover h-16 " src="/images/logo.webp" alt="Logo">
                </div>
                <div
                    class="w-[75%] flex h-full px-10 rounded-full border-2 border-yellow-800 bg-orange-300 items-center justify-between z-10">
                    <a href="/"
                        class="text-orange-800 font-averialibre hover:font-averialibrebold text-2xl">Home</a>
                    <a href="/bulk-order"
                        class="text-orange-800 font-averialibre hover:font-averialibrebold text-2xl">Bulk Order</a>
                    <a href="/franchise"
                        class="text-orange-800 font-averialibre hover:font-averialibrebold text-2xl">Franchise</a>
                    <a href="" class="text-orange-800 font-averialibre hover:font-averialibrebold text-2xl">About
                        Us</a>
                    <a href="" class="text-orange-800 font-averialibre hover:font-averialibrebold text-2xl">My
                        Dashboard</a>
                </div>
                <button href=""
                    class="w-[12%] hover:scale-[1.2] duration-75 flex h-full ml-3 rounded-full border-2 border-yellow-800 bg-orange-300 items-center justify-center">
                    <div class="w-8 flex items-center justify-center">
                        <img class="object-cover invert" src="/images/avatar.webp" alt="Logo">
                    </div>
                    <p class="text-orange-800 font-averialibre text-2xl ml-3">Log in</p>
                </button>
            </div>

            <!-- home -->
            <div id="home" class="flex flex-col items-center relative z-10 h-full justify-center md:-mt-20">
                <!-------->
                <div class="flex flex-col md:ml-28 md:flex-row w-[90%] mt-2 justify-center">
                    <div class="w-full md:-mx-20 md:w-[50%] flex flex-col justify-center">
                        <div class=" mx-40  text-center text-yellow-900 text-[8rem] font-black font-blackhansans tracking-tighter"
                            style="-webkit-text-stroke: 3.5px white; line-height:1;">
                            Join The Family!</div>
                        <div class="mt-6 text-center text-orange-300 text-4xl font-black font-averialibre"
                            style="-webkit-text-stroke:2px #ab5000;">The best
                            Bungeoppang Family in Town!</div>
                    </div>
                    <div class="w-full md:w-[60%]">
                        <div class="w-full flex items-center justify-center mx-auto mb-10 md:mb-4">
                            <img class="object-cover" src="/images/logo2.webp" alt="Logo">
                        </div>
                    </div>
                </div>
                <!---------->
            </div>

            <div class="flex bottom-5 md:bottom-10 absolute z-10 w-full items-center justify-center pb-5">
                <a href="#franchise-list" class="no-underline">
                    <button href=""
                        class="flex h-16 rounded-full border-2 border-yellow-800 bg-orange-300 items-center justify-center px-6 hover:scale-[1.2] duration-75">
                        <p class="text-orange-800 font-averialibre text-2xl mr-2 ml-3">View Franchise Packages</p>
                        <div class="w-8 flex items-center justify-center">
                            <img class="object-cover h-3" src="/images/arrow.webp" alt="Logo">
                        </div>
                    </button>
                </a>
            </div>

        </div>

        <div class="w-full">
            <div class="absolute w-screen z-0 scale-[1.7] lg:-mt-56 md:-mt-48">
                <img class="object-cover animate-spin-slow" src="/images/cahaya.webp" alt="Logo">
            </div>
        </div>

        <!-- section - menu -->
        <div id="franchise-list" class="w-full justify-center z-10 py-12 bg-orange-500">
            <div class="grid grid-rows-3 grid-cols-1 gap-6 mb-12">

                <div class="flex flex-row gap-10 justify-center">
                    <div class="flex-col relative">
                        <div class="w-[854px] h-[171px] relative">
                            <div
                                class="w-[854px] h-48 left-0 top-0 absolute bg-orange-200 rounded-[15px] border-4 border-orange-600">
                            </div>
                            <<div class="hover:scale-[1.2] duration-75 w-[184px] -mt-2 left-[38rem] top-20 bottom-20 absolute">
                                <div
                                    class=" w-[184px] h-[39px] left-0 top-0 absolute bg-[#E16F25] rounded-[53.44px] border-2 border-orange-700">
                                    <button id="open-btn"
                                        class="open-btn w-[183px] h-[34px] left-[1px] top-[2px] absolute text-center text-white text-2xl font-normal font-averialibre">
                                        See Details
                                    </button>
                                </div>
                            </div>
                            <div
                                class="left-[24px] top-[17px] absolute text-black text-[32px] font-normal font-averialibre">
                                Package 1</div>
                            <img class="w-[141px] h-40 left-4 top-8 absolute scale-x-[-1] " src="/images/ikan.webp" />
                            <div
                                class="w-[464px] h-[131px] left-48 top-[40px] absolute text-black text-2xl font-normal font-averialibre">
                                <li>details</li>
                                <li>details</li>
                                <li>details</li>
                                <li>details</li>
                            </div>

                        </div>
                    </div>

                    <div class="flex-col">
                        <img class="w-full h-48 rounded-[15px] shadow border-4 border-orange-600"
                            src="https://via.placeholder.com/328x171" />
                    </div>
                </div>

                <div class="flex flex-row gap-10 justify-center">

                    <div class="flex-col">
                        <img class="w-full h-48 rounded-[15px] shadow border-4 border-orange-600"
                            src="https://via.placeholder.com/328x171" />
                    </div>

                    <div class="flex-col relative">
                        <div class="w-[854px] h-[171px] relative">
                            <div
                                class="w-[854px] h-48 left-0 top-0 absolute bg-orange-200 rounded-[15px] border-4 border-orange-600">
                            </div>
                            <div
                                class="hover:scale-[1.2] duration-75 w-[184px] -mt-2 left-[38rem] top-20 bottom-20 absolute">
                                <div
                                    class=" w-[184px] h-[39px] left-0 top-0 absolute bg-[#E16F25] rounded-[53.44px] border-2 border-orange-700">
                                    <button id="open-btn2"
                                        class="open-btn w-[183px] h-[34px] left-[1px] top-[2px] absolute text-center text-white text-2xl font-normal font-averialibre">
                                        See Details
                                    </button>
                                </div>
                            </div>
                            <div
                                class="left-[24px] top-[17px] absolute text-black text-[32px] font-normal font-averialibre">
                                Package 2</div>
                            <img class="w-[141px] h-40 left-4 top-8 absolute " src="/images/ikan.webp" />
                            <div
                                class="w-[464px] h-[131px] left-48 top-[40px] absolute text-black text-2xl font-normal font-averialibre">
                                <li>details</li>
                                <li>details</li>
                                <li>details</li>
                                <li>details</li>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="flex flex-row gap-10 justify-center">
                    <div class="flex-col relative">
                        <div class="w-[854px] h-[171px] relative">
                            <div
                                class="w-[854px] h-48 left-0 top-0 absolute bg-orange-200 rounded-[15px] border-4 border-orange-600">
                            </div>
                            <div
                                class="hover:scale-[1.2] duration-75 w-[184px] -mt-2 left-[38rem] top-20 bottom-20 absolute">
                                <div
                                    class=" w-[184px] h-[39px] left-0 top-0 absolute bg-[#E16F25] rounded-[53.44px] border-2 border-orange-700">
                                    <button id="open-btn3"
                                        class="open-btn w-[183px] h-[34px] left-[1px] top-[2px] absolute text-center text-white text-2xl font-normal font-averialibre">
                                        See Details
                                    </button>
                                </div>
                            </div>
                            <div
                                class="left-[24px] top-[17px] absolute text-black text-[32px] font-normal font-averialibre">
                                Package 3</div>
                            <img class="w-[141px] h-40 left-4 top-8 absolute scale-x-[-1]" src="/images/ikan.webp" />
                            <div
                                class="w-[464px] h-[131px] left-48 top-[40px] absolute text-black text-2xl font-normal font-averialibre">
                                <li>details</li>
                                <li>details</li>
                                <li>details</li>
                                <li>details</li>
                            </div>

                        </div>
                    </div>

                    <div class="flex-col">
                        <img class="w-full h-48 rounded-[15px] shadow border-4 border-orange-600"
                            src="https://via.placeholder.com/328x171" />
                    </div>
                </div>



            </div>


            <button onclick="openForm()" href=""
                class="mx-auto mb-20 flex h-16 w-[90%] md:w-72 rounded-full border-2 border-yellow-800 bg-orange-400 items-center justify-center mt-3 hover:scale-[1.2] duration-75">
                <p class="text-white font-averialibre text-3xl mx-5">Contact Us</p>
            </button>



            <!-- footer -->
            <div class="w-full flex flex-col -mb-12 z-10 px-5 md:px-3 md:pl-7 py-7"
                style="background-image: url('/images/background-menu.webp');">
                <p class="text-orange-800 font-averialibre text-3xl md:text-4xl mb-3">Mamappang - Best In Town</p>
                <p class="text-orange-800 font-averialibre text-lg md:text-xl w-full md:w-[70%] text-justify mb-6">
                    mammapang is Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                    esse
                    cillum dolore eu fugiat nulla pariatur. </p>
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

    </div>

    <!-- Modal -->
    <div class="fixed hidden h-full z-10 inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto  w-full" id="modal">
        <div class="top-16 mx-auto w-[600px] h-[600px] border-orange-300 shadow-xl rounded-xl bg-[#E16F25] relative">
            <button onclick="closeModal()"
                class="absolute top-4 right-8 text-white text-4xl font-bold focus:outline-none">
                &times;
            </button>
            <div class="transform translate-y-10 ml-16 ">
                <div class="text-yellow-800 text-5xl mt-20 font-black font-averialibre">
                    Package 1
                </div>
                <div></div>
                <div class="text-yellow-800 text-2xl mt-2 font-black font-averialibre">Rp.999.999,00</div>
                <div class="flex flex-row gap-8">
                    <div class="flex-col  font-averialibre text-yellow-800 text-2xl font-black mt-8 mr-36 mb-16">
                        <li>capek</li>
                        <li>capek</li>
                        <li>gatel</li>
                        <li>makan</li>
                        <li>capek</li>
                        <li>capek</li>
                        <li>gatel</li>
                        <li>makan</li>
                    </div>
                    <div class="flex-col">
                        <img class="rounded-2xl" src="/images/lelah.webp" alt="">
                    </div>
                </div>
            </div>

            <div class="font-averialibre text-xl mt-8 ml-[21rem]">
                Ada Pertanyaan?
            </div>
            <div class="mt-4 flex justify-center items-center space-x-8">
                <div>
                    <button id="franchise-btn" onclick="openFranchiseFormModal()"
                        class="h-12 w-full md:w-48 text-white font-averialibre text-2xl rounded-full border-2 border-yellow-800 bg-orange-400 items-center justify-center hover:scale-[1.125] duration-75">
                        Jadi Franchise
                    </button>

                </div>
                <div>
                    <button id="contact-btn"
                        class="h-12 w-full md:w-48 text-white font-averialibre text-2xl rounded-full border-2 border-yellow-800 bg-orange-400 items-center justify-center hover:scale-[1.125] duration-75">
                        Contact Us
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }

        let modal = document.getElementById('modal');
        let btn = document.getElementById('open-btn');
        let button = document.getElementById('ok-btn');

        btn.onclick = function() {
            modal.style.display = 'block';
        };

        button.onclick = function() {
            modal.style.display = 'none';
        };

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <!-- Modal2 -->
    <div class="fixed hidden h-full z-10 inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto  w-full" id="modal2">
        <div class="top-16 mx-auto w-[600px] h-[600px] border-orange-300 shadow-xl rounded-xl bg-[#E16F25] relative">
            <button onclick="closeModal2()"
                class="absolute top-4 right-8 text-white text-4xl font-bold focus:outline-none">
                &times;
            </button>
            <div class="transform translate-y-10 ml-16 ">
                <div class="text-yellow-800 text-5xl mt-20 font-black font-averialibre">
                    Package 2
                </div>
                <div></div>
                <div class="text-yellow-800 text-2xl mt-2 font-black font-averialibre">Rp.999.999,00</div>
                <div class="flex flex-row gap-8">
                    <div class="flex-col  font-averialibre text-yellow-800 text-2xl font-black mt-8 mr-36 mb-16">
                        <li>capek</li>
                        <li>capek</li>
                        <li>gatel</li>
                        <li>makan</li>
                        <li>capek</li>
                        <li>capek</li>
                        <li>gatel</li>
                        <li>makan</li>
                    </div>
                    <div class="flex-col">
                        <img class="rounded-2xl" src="/images/lelah.webp" alt="">
                    </div>
                </div>
            </div>

            <div class="font-averialibre text-xl mt-8 ml-[21rem]">
                Ada Pertanyaan?
            </div>
            <div class="mt-4 flex justify-center items-center space-x-8">
                <div>
                    <button id="franchise-btn2" onclick="openFranchiseFormModal()"
                        class="h-12 w-full md:w-48 text-white font-averialibre text-2xl rounded-full border-2 border-yellow-800 bg-orange-400 items-center justify-center hover:scale-[1.125] duration-75">
                        Jadi Franchise
                    </button>
                </div>
                <div>
                    <button id="contact-btn2"
                        class="h-12 w-full md:w-48 text-white font-averialibre text-2xl rounded-full border-2 border-yellow-800 bg-orange-400 items-center justify-center hover:scale-[1.125] duration-75">
                        Contact Us
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function closeModal2() {
            document.getElementById('modal2').style.display = 'none';
        }

        let modal2 = document.getElementById('modal2');
        let btn2 = document.getElementById('open-btn2');
        let button2 = document.getElementById('ok-btn2');

        btn2.onclick = function() {
            modal2.style.display = 'block';
        };

        button2.onclick = function() {
            modal2.style.display = 'none';
        };

        window.onclick = function(event) {
            if (event.target == modal2) {
                modal2.style.display = "none";
            }
        }
    </script>

    <!-- Modal3 -->
    <div class="fixed hidden h-full z-10 inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto  w-full" id="modal3">
        <div class="top-16 mx-auto w-[600px] h-[600px] border-orange-300 shadow-xl rounded-xl bg-[#E16F25] relative">
            <button onclick="closeModal3()"
                class="absolute top-4 right-8 text-white text-4xl font-bold focus:outline-none">
                &times;
            </button>
            <div class="transform translate-y-10 ml-16 ">
                <div class="text-yellow-800 text-5xl mt-20 font-black font-averialibre">
                    Package 3
                </div>
                <div></div>
                <div class="text-yellow-800 text-2xl mt-2 font-black font-averialibre">Rp.999.999,00</div>
                <div class="flex flex-row gap-8">
                    <div class="flex-col  font-averialibre text-yellow-800 text-2xl font-black mt-8 mr-36 mb-16">
                        <li>capek</li>
                        <li>capek</li>
                        <li>gatel</li>
                        <li>makan</li>
                        <li>capek</li>
                        <li>capek</li>
                        <li>gatel</li>
                        <li>makan</li>
                    </div>
                    <div class="flex-col">
                        <img class="rounded-2xl" src="/images/lelah.webp" alt="">
                    </div>
                </div>
            </div>

            <div class="font-averialibre text-xl mt-8 ml-[21rem]">
                Ada Pertanyaan?
            </div>
            <div class="mt-4 flex justify-center items-center space-x-8">
                <div>
                    <button id="franchise-btn3" onclick="openFranchiseFormModal()"
                        class="h-12 w-full md:w-48 text-white font-averialibre text-2xl rounded-full border-2 border-yellow-800 bg-orange-400 items-center justify-center hover:scale-[1.125] duration-75">
                        Jadi Franchise
                    </button>
                </div>
                <div>
                    <button id="contact-btn3"
                        class="h-12 w-full md:w-48 text-white font-averialibre text-2xl rounded-full border-2 border-yellow-800 bg-orange-400 items-center justify-center hover:scale-[1.125] duration-75">
                        Contact Us
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function closeModal3() {
            document.getElementById('modal3').style.display = 'none';
        }

        let modal3 = document.getElementById('modal3');
        let btn3 = document.getElementById('open-btn3');
        let button3 = document.getElementById('ok-btn3');

        btn3.onclick = function() {
            modal3.style.display = 'block';
        };

        button3.onclick = function() {
            modal3.style.display = 'none';
        };

        window.onclick = function(event) {
            if (event.target == modal3) {
                modal3.style.display = "none";
            }
        }
    </script>


    <!-- Modal Franchise Form -->
    <div class="fixed hidden h-full z-10 inset-0 bg-gray-600 bg-opacity-50 w-full" id="modalFranchiseForm">
        <div class="w-[650px] h-[910px] mx-auto my-4 relative bg-[#e16f25] rounded-[28px] shadow">

            <button onclick="closeFranchiseFormModal()"
                class="absolute top-4 right-8 text-white text-4xl font-bold focus:outline-none">
                &times;
            </button>

            <div class="left-[206px] top-[30px] absolute text-yellow-800 text-4xl font-normal font-averialibre">
                Franchise Form
            </div>

            <div
                class="translate-y-24 mx-auto w-[550px] h-[56px] bg-orange-700 rounded-tl-[14.98px] rounded-tr-[14.98px]">
                <div class="text-[#945E3D] ml-4 translate-y-2 text-3xl font-normal font-averialibre">
                    Choose Package
                </div>
            </div>

            <div class="w-[550px] h-[335px] mx-auto mt-24 bg-[#F1A03C] rounded-bl-[14.98px] rounded-br-[14.98px]">
                <div class="flex flex-row translate-y-4">
                    <div id="package1" onclick="selectPackage('package1')"
                        class="hover:scale-[1.1] duration-75 flex-col w-[240px] h-[140px] ml-7 bg-[#B9480F] rounded-[14.98px]">
                        <div
                            class="text-[#945E3D] translate-x-12 translate-y-12 text-3xl items-center font-bolder font-averialibre">
                            Package 1
                        </div>
                    </div>

                    <div id="package2" onclick="selectPackage('package2')"
                        class="hover:scale-[1.1] duration-75 flex-col w-[240px] h-[140px] ml-4 bg-[#B9480F] rounded-[14.98px]">
                        <div
                            class="text-[#945E3D] translate-x-12 translate-y-12 text-3xl items-center font-normal font-averialibre">
                            Package 2
                        </div>
                    </div>
                </div>

                <div class="flex flex-row translate-y-8">
                    <div id="package3" onclick="selectPackage('package3')"
                        class="hover:scale-[1.1] duration-75 flex-col w-[240px] h-[140px] ml-7 bg-[#B9480F] rounded-[14.98px]">
                        <div
                            class="text-[#945E3D] translate-x-12 translate-y-12 text-3xl items-center font-normal font-averialibre">
                            Package 3
                        </div>
                    </div>

                    <div id="package4" onclick="selectPackage('package4')"
                        class="hover:scale-[1.1] duration-75 flex-col w-[240px] h-[140px] ml-4 bg-[#B9480F] rounded-[14.98px]">
                        <div
                            class="text-[#945E3D] translate-x-12 translate-y-12 text-3xl items-center font-normal font-averialibre">
                            Package 4
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex flex-col md:flex-row">
                <label for="alamt-pribadi"
                    class="block ml-12 text-2xl font-averialibre text-white">Alamat</br>(Pribadi)</label>
                <input type="text" id="alamat-pribadi" name="alamat-pribadi"
                    class="w-[56%] ml-24 mt-1 h-20 bg-[#FAC774] rounded-2xl border-solid border-2 border-[#992300]">
            </div>

            <div class="mt-6 flex flex-col md:flex-row ">
                <label for="alamat-franchise"
                    class="ml-12 mr-1.5 text-2xl font-averialibre text-white">Alamat</br>(Franchise)</label>
                <input type="text" id="alamat-franchise" name="alamat-franchise"
                    class="w-[56%] ml-16 h-20 mt-1 bg-[#FAC774] rounded-2xl border-solid border-2 border-[#992300]">
            </div>

            <div class="mt-6 flex flex-col md:flex-row ">
                <label for="Keterangan" class="ml-12 mr-1 text-2xl font-averialibre text-white">Keterangan</label>
                <textarea type="text" id="keterangan" name="keterangan"
                    class="md:w-[56%] ml-16 mt-1 bg-[#FAC774] rounded-2xl border-solid border-2 border-[#992300] max-h-20 h-14"> </textarea>
            </div>

            <button id="book-franchise"
                class="mx-12 mt-6 w-[85%] h-14 bg-[#f1a03c] text-[#992300] font-black font-averialibre text-2xl rounded-2xl border-2 border-orange-700 hover:scale-[1.1] duration-75"
                onclick="openReminderModal()">
                Book Franchise
            </button>
        </div>

    </div>

    {{-- <script>
        function openFranchiseFormModal() {
            document.getElementById('modalFranchiseForm').style.display = 'block';
        }

        function closeFranchiseFormModal() {
            document.getElementById('modalFranchiseForm').style.display = 'none';
        }

        function selectPackage(packageId) {
            // Reset border for all packages
            document.getElementById('package1').style.border = 'none';
            document.getElementById('package2').style.border = 'none';
            document.getElementById('package3').style.border = 'none';
            document.getElementById('package4').style.border = 'none';

            // Add white border to the selected package
            document.getElementById(packageId).style.border = '4px solid white';
        }
    </script> --}}

    <!-- Modal Reminder Notification -->
    <div class="fixed hidden h-full z-10 inset-0 bg-gray-600 bg-opacity-50 w-full" id="reminder">
        <div
            class="w-[450px] h-[335px] mx-auto my-60 relative bg-[#b9480f] border-[2px] border-solid border-[#5C3623] rounded-[10px] shadow">
            <div class="mx-[12.85rem] translate-y-6 text-5xl text-white">
                ⓘ
            </div>
            <div class="mx-8 mt-10 text-xl text-white text-center font-averialibre">
                Perlu diingat bahwa pengajuan franchise membutuhkan follow up dari tim Mamappang sebelum dapat diproses
                lebih lanjut.
            </div>
            <button id="reminder-btn"
                class="mx-9 mt-6 w-[85%] h-14 bg-[#f1a03c] text-[#992300] font-black font-averialibre text-2xl rounded-2xl border-2 border-orange-700 hover:scale-[1.1] duration-75"
                onclick="sendFranchiseRequest()">
                Kirim Pengajuan Franchise
            </button>
        </div>
    </div>

    {{-- <script>
        function openReminderModal() {
            document.getElementById('reminder').style.display = 'block';
        }

        function sendFranchiseRequest() {
            // Add logic to handle the franchise request submission here
            // For now, let's just close the modal
            closeReminderModal();
        }

        function closeReminderModal() {
            document.getElementById('reminder').style.display = 'none';
        }
    </script> --}}

    <!-- Modal Request Sent Notification -->
    <div class="fixed hidden h-full z-10 inset-0 bg-gray-600 bg-opacity-50 w-full" id="notification">
        <div
            class="w-[450px] h-[335px] mx-auto my-60 relative bg-[#b9480f] border-[2px] border-solid border-[#5C3623] rounded-[10px] shadow">
            <div class="w-[12%] mx-[12.4rem] mt-6 ">
                <img src="/images/done.webp" alt="">
            </div>
            <div class="mx-8 mt-3 text-xl text-white text-center font-averialibre">
                REQUEST SENT!
                <br>
                <br>
                Check your email or my order page for further updates!
            </div>
            <button id="check-order-btn"
                class="mx-[2.85rem] mt-10 w-[80%] h-14 bg-[#f1a03c] text-[#992300] font-black font-averialibre text-2xl rounded-2xl border-2 border-orange-700 hover:scale-[1.1] duration-75"
                onclick="checkMyOrder()">
                Check My Order
            </button>
        </div>
    </div>

    {{-- <script>
        function openNotificationModal() {
            document.getElementById('notification').style.display = 'block';
        }

        function sendFranchiseRequest() {
            // Add logic to handle the franchise request submission here
            // For now, let's just open the notification modal
            openNotificationModal();
        }

        function checkMyOrder() {
            // Add logic to handle the "Check My Order" button click event
            // For now, let's just close the notification modal
            closeNotificationModal();
        }

        function closeNotificationModal() {
            document.getElementById('notification').style.display = 'none';
        }
    </script> --}}

    <script>
        function openFranchiseFormModal() {
            document.getElementById('modalFranchiseForm').style.display = 'block';
        }

        function closeFranchiseFormModal() {
            document.getElementById('modalFranchiseForm').style.display = 'none';
        }

        function selectPackage(packageId) {
            // Reset border for all packages
            document.getElementById('package1').style.border = 'none';
            document.getElementById('package2').style.border = 'none';
            document.getElementById('package3').style.border = 'none';
            document.getElementById('package4').style.border = 'none';

            // Add white border to the selected package
            document.getElementById(packageId).style.border = '4px solid white';
        }

        function openReminderModal() {
            document.getElementById('reminder').style.display = 'block';
        }

        function sendFranchiseRequest() {
            // Add logic to handle the franchise request submission here
            // For now, let's just close the modal and open the notification modal
            closeFranchiseFormModal();
            closeReminderModal();
            openNotificationModal();
        }

        function closeReminderModal() {
            document.getElementById('reminder').style.display = 'none';
        }

        function checkMyOrder() {
            // Add logic to handle the "Check My Order" button click event
            // For now, let's just close the notification modal and the reminder modal
            closeNotificationModal();
            closeReminderModal();
        }

        function openNotificationModal() {
            document.getElementById('notification').style.display = 'block';
        }

        function sendNotification() {
            // Add logic to handle the franchise request submission here
            // For now, let's just open the notification modal
            openNotificationModal();
        }

        function closeNotificationModal() {
            document.getElementById('notification').style.display = 'none';
        }

        // Add this function to close all modals and redirect to home
        function closeAllModals() {
            document.getElementById('notification').style.display = 'none';
            document.getElementById('reminder').style.display = 'none';
            document.getElementById('modalFranchiseForm').style.display = 'none';
            // Redirect to the home page
            window.location.href = 'home.html'; // Replace 'home.html' with your actual home page URL
        }
    </script>



</body>
