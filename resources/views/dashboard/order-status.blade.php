<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://unpkg.com/simplebar@5.3.0/dist/simplebar.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @vite('resources/css/app.css')
    <title>Order Status</title>
</head>

<body class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
    <!-- component -->
    <div id="header" x-data="{ isOpen: false }" class="fixed rounded-b-2xl border-x-2 border-b-2 border-orange-300  bg-orange-700  justify-center z-40 w-[100%] md:hidden flex items-center flex-col">

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
                    <a class="text-orange-700 font-averialibre cursor-pointer text-2xl" href="{{ route('order-status') }}">Order Status</a>
                    <a class="text-orange-700 font-averialibre cursor-pointer text-2xl" href="{{ route('franchise-status') }}">Franchise Status</a>
                    <a class="text-orange-700 font-averialibre cursor-pointer text-2xl" href="{{ route('menu-edit') }}">Menu Edit</a>
                    <a class="text-orange-700 font-averialibre cursor-pointer text-2xl" href="{{ route('franchise-edit') }}">Franchise Edit</a>
                    <a class="text-orange-700 font-averialibre cursor-pointer text-2xl" href="/">Log Out</a>
                </div>
            </div>
        
        </div>
        
        </div>
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
        <div class="fixed hidden md:flex flex-col top-0 left-0 w-64 bg-[#E16F25] h-full">
            <div class="flex items-center justify-center h-14 mb-4 mt-4 ">
                <img class="object-cover h-16" src="/images/logo.webp" alt="Logo">
            </div>
            <div class="flex items-center justify-center h-14">
                <button href="" class="bg-orange-300 rounded-3xl border-[2.037px] border-solid border-yellow-800 flex items-center">
                    <div class="w-7 flex items-center justify-center mx-1 mt-1 mb-1">
                        <img class="object-cover invert" src="/images/avatar.webp" alt="Logo">
                    </div>
                    <p class="text-orange-800 font-averialibre text-2md mx-3 hover:text-[#F1A03C] ">Log in / Sign Up</p>
                </button>
            </div>
            <div class="overflow-y-auto overflow-x-hidden flex-grow">
                <ul class="flex flex-col py-4 space-y-1 bg-[#F1A03C]">
                    <li>
                        <a href="{{ route('dashboard') }}" class="relative flex flex-row items-center h-11 focus:outline-none border-l-4 border-transparent pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <!-- <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg> -->
                            </span>
                            <span class="ml-2 text-2md tracking-wide truncate font-averialibre {{ Request::is('dashboard') ? 'text-white font-bold' : 'text-orange-800' }}">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('order-status') }}" class="relative flex flex-row items-center h-11 focus:outline-none border-l-4 border-transparent pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <!-- <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg> -->
                            </span>
                            <span class="ml-2 text-2md tracking-wide truncate font-averialibre {{ Request::is('dashboard/order-status') ? 'text-white font-bold' : 'text-orange-800' }}">Order Status</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('franchise-status') }}" class="relative flex flex-row items-center h-11 focus:outline-none  border-l-4 border-transparent pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <!-- <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                </svg> -->
                            </span>
                            <span class="ml-2 text-2md tracking-wide truncate font-averialibre {{ Request::is('dashboard/franchise-status') ? 'text-white font-bold' : 'text-orange-800' }}">Franchise Status</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('menu-edit') }}" class="relative flex flex-row items-center h-11 focus:outline-none  border-l-4 border-transparent pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <!-- <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                </svg> -->
                            </span>
                            <span class="ml-2 text-2md tracking-wide truncate font-averialibre {{ Request::is('dashboard/menu-edit') ? 'text-white font-bold' : 'text-orange-800' }}">Menu Edit</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('franchise-edit') }}" class="relative flex flex-row items-center h-11 focus:outline-none  border-l-4 border-transparent pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <!-- <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                </svg> -->
                            </span>
                            <span class="ml-2 text-2md tracking-wide truncate font-averialibre {{ Request::is('dashboard/franchise-edit') ? 'text-white font-bold' : 'text-orange-800' }}">Franchise Edit</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none border-l-4 border-transparent pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <!-- <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                </svg> -->
                            </span>
                            <span class="ml-2 text-2md tracking-wide truncate font-averialibre text-orange-800">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex-auto min-h-screen bg-[#FFDBA3] pt-20 md:pt-0">
            <!-- Dummy Content on the Right Sidebar -->
            <div class="md:ml-64 p-8 ">
                <div class="flex md:flex-row flex-col items-center w-full md:justify-between">
                    <div class="col-span-2 lg:col-span-1 text-3xl lg:text-5xl tracking-wide truncate font-averialibre text-orange-800">Order Status</div>
                </div>
                <div class="p-4 lg:p-8 grid grid-cols-1 lg:grid-cols-2 gap-4 border border-solid border-[#F1A03C] rounded-2xl bg-[#b9480f] overflow-y-auto">
                     <!-- Dummy data, replace with dynamic data in a real application -->
                            <div class="bg-[#f1a03c] border-solid border-4 border-[#F1A03C] p-4 lg:p-6 rounded-2xl mb-4">
                                <!-- Item 1 -->
                                <div class="flex justify-between items-center mb-8 lg:mb-16">
                                    <div class="flex items-center">
                                        <span class="ml-2 font-averialibre text-orange-800 text-4xl lg:text-5xl uppercase" style="-webkit-text-stroke: 1px rgba(255,255,255,0.8);">ODR 1</span>
                                    </div>
                                    <span class="ml-2 font-averialibre text-orange-800 text-4xl lg:text-5xl uppercase" style="-webkit-text-stroke: 1px rgba(255,255,255,0.8);">Pending</span>
                                </div>
                    
                        <!-- Item 2 -->
                        <div class="flex justify-between items-center">
                            <div class="flex flex-col items-start">
                                <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Nama: John Thor</span>
                                <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Request: John Doe</span>
                                <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Payment Status: Lorem Ipsum</span>
                            </div>
                            <a href="#" class="ml-2 font-averialibre text-orange-800 text-xl lg:text-3xl underline flex justify-between items-center bg-[#FAC774] border-solid border-4 border-[#ad713e] p-2 rounded-2xl max-w-[1100px]" onclick="toggleModal()">View Details</a>
                        </div>
                    </div>
                     <!-- Dummy data, replace with dynamic data in a real application -->
                     <div class="bg-[#f1a03c] border-solid border-4 border-[#F1A03C] p-4 lg:p-6 rounded-2xl mb-4">
                        <!-- Item 1 -->
                        <div class="flex justify-between items-center mb-8 lg:mb-16">
                            <div class="flex items-center">
                                <span class="ml-2 font-averialibre text-orange-800 text-4xl lg:text-5xl uppercase" style="-webkit-text-stroke: 1px rgba(255,255,255,0.8);">ODR 1</span>
                            </div>
                            <span class="ml-2 font-averialibre text-orange-800 text-4xl lg:text-5xl uppercase" style="-webkit-text-stroke: 1px rgba(255,255,255,0.8);">Pending</span>
                        </div>
            
                <!-- Item 2 -->
                <div class="flex justify-between items-center">
                    <div class="flex flex-col items-start">
                        <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Nama: John Thor</span>
                        <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Request: John Doe</span>
                        <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Payment Status: Lorem Ipsum</span>
                    </div>
                    <a href="#" class="ml-2 font-averialibre text-orange-800 text-xl lg:text-3xl underline flex justify-between items-center bg-[#FAC774] border-solid border-4 border-[#ad713e] p-2 rounded-2xl max-w-[1100px]" onclick="toggleModal()">View Details</a>
                </div>
            </div>                     <!-- Dummy data, replace with dynamic data in a real application -->
            <div class="bg-[#f1a03c] border-solid border-4 border-[#F1A03C] p-4 lg:p-6 rounded-2xl mb-4">
                <!-- Item 1 -->
                <div class="flex justify-between items-center mb-8 lg:mb-16">
                    <div class="flex items-center">
                        <span class="ml-2 font-averialibre text-orange-800 text-4xl lg:text-5xl uppercase" style="-webkit-text-stroke: 1px rgba(255,255,255,0.8);">ODR 1</span>
                    </div>
                    <span class="ml-2 font-averialibre text-orange-800 text-4xl lg:text-5xl uppercase" style="-webkit-text-stroke: 1px rgba(255,255,255,0.8);">Pending</span>
                </div>
    
        <!-- Item 2 -->
        <div class="flex justify-between items-center">
            <div class="flex flex-col items-start">
                <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Nama: John Thor</span>
                <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Request: John Doe</span>
                <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Payment Status: Lorem Ipsum</span>
            </div>
            <a href="#" class="ml-2 font-averialibre text-orange-800 text-xl lg:text-3xl underline flex justify-between items-center bg-[#FAC774] border-solid border-4 border-[#ad713e] p-2 rounded-2xl max-w-[1100px]" onclick="toggleModal()">View Details</a>
        </div>
    </div>                     <!-- Dummy data, replace with dynamic data in a real application -->
    <div class="bg-[#f1a03c] border-solid border-4 border-[#F1A03C] p-4 lg:p-6 rounded-2xl mb-4">
        <!-- Item 1 -->
        <div class="flex justify-between items-center mb-8 lg:mb-16">
            <div class="flex items-center">
                <span class="ml-2 font-averialibre text-orange-800 text-4xl lg:text-5xl uppercase" style="-webkit-text-stroke: 1px rgba(255,255,255,0.8);">ODR 1</span>
            </div>
            <span class="ml-2 font-averialibre text-orange-800 text-4xl lg:text-5xl uppercase" style="-webkit-text-stroke: 1px rgba(255,255,255,0.8);">Pending</span>
        </div>

<!-- Item 2 -->
<div class="flex justify-between items-center">
    <div class="flex flex-col items-start">
        <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Nama: John Thor</span>
        <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Request: John Doe</span>
        <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Payment Status: Lorem Ipsum</span>
    </div>
    <a href="#" class="ml-2 font-averialibre text-orange-800 text-xl lg:text-3xl underline flex justify-between items-center bg-[#FAC774] border-solid border-4 border-[#ad713e] p-2 rounded-2xl max-w-[1100px]" onclick="toggleModal()">View Details</a>
</div>
</div>
                        <!-- Add more items as needed -->
                    </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

<!-- Modal container using plain JavaScript -->
<div id="modal" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 hidden overflow-y-auto">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#b9480f] text-orange-800 p-4 rounded-2xl border border-solid border-[#F1A03C] max-w-[90%] lg:max-w-[500px]">
         <div class="flex justify-between items-center mb-4">
            <span class="ml-2 font-averialibre text-[#FAC774] text-4xl ">Order #1</span>
            <span class="mr-2 font-averialibre text-[#FAC774] text-4xl self-end">Pending</span>
        </div>
        <div class="flex justify-center items-center rounded-2xl ">
            <div class="flex flex-col w-[400px]">
                <div class="w-full h-auto bg-[#5c3623] rounded-t-lg flex justify-center items-center">
                    <div class="font-averialibre text-[#fac774] text-left p-2">
                        <p class="text-lg font-bold">39 Bungeoppang</p>
                        <div class="flex flex-wrap">
                            <span class="mr-4">• 5 Vanilla</span>
                            <span class="mr-4">• 10 Chocolate</span>
                            <span class="mr-4">• 10 Taro</span>
                            <span class="mr-4">• 10 Oreo</span>
                            <span>• 4 Classic</span>
                        </div>
                    </div>
                </div>
                <div id="blueSection" class="font-averialibre w-full h-auto bg-[#945e3d] flex justify-start items-start">
                <!-- Content for the Blue section -->
                <div id="blueSectionContent" font-averialibre class="text-[#fac774] text-left p-2">
                        <p><span class="font-bold">Nama:</span> Alex</p>
                        <p><span class="font-bold">No:</span> 0988274883</p>
                        <p><span class="font-bold">Alamat:</span> Jl Scientia Boulevard</p>
                        <p><span class="font-bold">Tanggal Pemesanan:</span> 02-12-1999</p>
                        <p><span class="font-bold">Harga Sementara:</span> 320,000</p>
                    </div>
                </div>
                <div id="greenSection" class="font-averialibre w-full h-auto bg-[#fac774] rounded-b-lg p-4">
                    <!-- Content for the green section -->
                    <div id="greenSectionContent" font-averialibre class="flex-1 flex items-center justify-between">
                        <p id="questionText" class="text-orange-800 text-justify">Terima Pesanan?</p>
                        <div id="buttonContainer" class="flex justify-between items-center mt-2">
                            <button onclick="replaceContent('terima')" class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#f1a03c] text-[#b9480f] rounded-full h-[35px] w-[100px] border border-[#b9480f]">Terima</button>
                            <button onclick="replaceContent('tidak')" class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#fded87] text-[#b9480f] rounded-full h-[35px] w-[100px] border border-[#b9480f]">Tidak</button>
                        </div>
                    </div>
                    <div id="replacementContent" class="hidden">
                        <!-- Content will be replaced based on button clicks -->
                    </div>
                </div>  
            </div>
        </div>
        <div id="bottomButtons" class="flex items-center justify-center mt-4">
            <!-- The close button -->
            <button onclick="toggleModal()" class="font-averialibre text-orange-800 text-3xl flex items-center justify-center bg-[#FAC774] text-[#b9480f] rounded-full h-[50px] w-full">Close</button>
        </div>
    </div>
</div>




<script>
    let defaultContent = document.getElementById('greenSectionContent').innerHTML;

function replaceContent(action) {
    const questionText = document.getElementById('questionText');
    const buttonContainer = document.getElementById('buttonContainer');
    const replacementContent = document.getElementById('replacementContent');
    const bottomButtons = document.getElementById('bottomButtons');

    questionText.classList.add('hidden'); // Hide the question text

    if (action === 'terima') {
        buttonContainer.classList.add('hidden');
        replacementContent.classList.remove('hidden');
        bottomButtons.innerHTML = `
            <button onclick="resetContent()" class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#f1a03c] text-[#b9480f] rounded-full h-[35px] w-[175px] border border-[#b9480f]">Cancel</button>
            <button onclick="saveTidak()" class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#fded87] text-[#b9480f] rounded-full h-[35px] w-[175px] border border-[#b9480f]">Save</button>
        `;
        replacementContent.innerHTML = `
        <div id="greenSectionContent" font-averialibre class="flex-1 flex items-center justify-between">
            <p class="text-orange-800">Ongkos Kirim (RP):</p>
            <div class="flex items-center mt-2">
                <input type="number" class="border border-[#b9480f] text-orange-800 bg-[#fded87] rounded-full h-[35px] w-auto text-center" placeholder="Input amount">
            </div>
        </div>

        `;
        bottomButtons.innerHTML = `
    <div id="greenSectionContent" class="flex-1 flex items-center justify-between">
    <button onclick="resetContent()" class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#f1a03c] text-[#b9480f] rounded-full h-[35px] w-[175px] border border-[#b9480f]">Cancel</button>
    <button onclick="next()" class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#fded87] text-[#b9480f] rounded-full h-[35px] w-[175px] border border-[#b9480f]">Save</button>
</div>
        `;
    } else if (action === 'tidak') {
        buttonContainer.classList.add('hidden');
        replacementContent.classList.remove('hidden');
        replacementContent.innerHTML = `
        <div id="greenSectionContent" class="flex-1 flex items-center justify-between">
    <p class="text-orange-800">Alasan Tidak Diterima:</p>
    <div class="flex items-center mt-2">
        <textarea id="reasonInput" class="border border-[#b9480f] text-orange-800 bg-[#fded87] rounded h-[35px] min-h-[35px] min-w-[150px] text-center" placeholder="Reason" oninput="adjustTextAreaHeight(this)"></textarea>
    </div>
</div>
        `;
        bottomButtons.innerHTML = `
    <div id="greenSectionContent" class="flex-1 flex items-center justify-between">
    <button onclick="resetContent()" class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#f1a03c] text-[#b9480f] rounded-full h-[35px] w-[175px] border border-[#b9480f]">Cancel</button>
    <button onclick="toggleModal()" class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#fded87] text-[#b9480f] rounded-full h-[35px] w-[175px] border border-[#b9480f]">Save</button>
</div>
        `;
    } 
}

function next() {
    const replacementContent = document.getElementById('replacementContent');
    replacementContent.classList.add('hidden');

    const blueSectionContent = `
    <div id="combinedSectionContent" class="font-averialibre w-full h-auto bg-[#fac774] flex flex-col p-4">
    <div id="greenSectionContent" class="flex-1 flex items-center justify-between">
        <p class="text-orange-800 text-lg">Courier Name</p>
        <div class="flex items-center mt-2">
            <input type="text" class="border border-[#b9480f] text-orange-800 bg-[#fded87] rounded-full h-[35px] w-auto text-center" placeholder="Name">
        </div>
    </div>
    <div id="greenSectionContent" class="flex-1 flex items-center justify-between">
        <p class="text-orange-800 text-lg">Courier Phone Number</p>
        <div class="flex items-center mt-2">
            <input type="number" class="border border-[#b9480f] text-orange-800 bg-[#fded87] rounded-full h-[35px] w-auto text-center" placeholder="Phone Number">
        </div>
    </div>
    <div id="greenSectionContent" class="flex-1 flex items-center justify-between">
        <p class="text-orange-800 text-lg">Plate Number</p>
        <div class="flex items-center mt-2">
            <input type="text" class="border border-[#b9480f] text-orange-800 bg-[#fded87] rounded-full h-[35px] w-auto text-center" placeholder="Plate Number">
        </div>
    </div>
    <div id="greenSectionContent" class="flex-1 flex items-center justify-between">
        <p class="text-orange-800 text-lg">Tracking Link</p>
        <div class="flex items-center mt-2">
            <input type="text" class="border border-[#b9480f] text-orange-800 bg-[#fded87] rounded-full h-[35px] w-auto text-center" placeholder="Link">
        </div>
    </div>
    <!-- Add more similar div elements for additional pairs -->
</div>


    `;

    const blueSection = document.getElementById('blueSection');
    blueSection.innerHTML = blueSectionContent;

    const bottomButtons = document.getElementById('bottomButtons');
    bottomButtons.innerHTML = `
        <div id="greenSectionContent" class="flex-1 flex items-center justify-between">
            <button onclick="resetContentData()" class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#f1a03c] text-[#b9480f] rounded-full h-[35px] w-[175px] border border-[#b9480f]">Cancel</button>
            <button onclick="toggleModal()" class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#fded87] text-[#b9480f] rounded-full h-[35px] w-[175px] border border-[#b9480f]">Save</button>
        </div>
    `;
}

window.onload = function () {
    defaultGreenContent = document.getElementById('greenSection').innerHTML;
    defaultBlueContent = document.getElementById('blueSection').innerHTML;
};

function resetContentData() {
    const greenSection = document.getElementById('greenSection');
    const blueSection = document.getElementById('blueSection');
    const bottomButtons = document.getElementById('bottomButtons');

    greenSection.innerHTML = defaultGreenContent;
    blueSection.innerHTML = defaultBlueContent;

    bottomButtons.innerHTML = `
        <button onclick="toggleModal()" class="font-averialibre text-orange-800 text-3xl flex items-center justify-center bg-[#FAC774] text-[#b9480f] rounded-full h-[50px] w-full">Close</button>
    `;
}

function resetContent() {
    const questionText = document.getElementById('questionText');
    const buttonContainer = document.getElementById('buttonContainer');
    const replacementContent = document.getElementById('replacementContent');
    const bottomButtons = document.getElementById('bottomButtons');

    questionText.classList.remove('hidden'); // Show the question text
    buttonContainer.classList.remove('hidden');
    replacementContent.classList.add('hidden');
    document.getElementById('greenSectionContent').innerHTML = defaultContent;

    bottomButtons.innerHTML = `
        <button onclick="toggleModal()" class="font-averialibre text-orange-800 text-3xl flex items-center justify-center bg-[#FAC774] text-[#b9480f] rounded-full h-[50px] w-full">Close</button>
    `;
}

function toggleModal() {
    const modal = document.getElementById('modal');
    modal.classList.toggle('hidden');
}

function adjustInputWidth(input) {
    const textLength = input.value.length;
    const minWidth = 75; // Minimum width for the input
    const maxWidth = auto; // Maximum width for the input

    // Calculate the width based on the text length
    const width = Math.min(maxWidth, Math.max(minWidth, textLength * 8)); // Adjust multiplier as needed

    input.style.width = `${width}px`;
}

function adjustTextAreaHeight(textarea) {
    textarea.style.height = 'auto'; // Reset the height to auto
    textarea.style.height = `${textarea.scrollHeight}px`; // Set the height to the scroll height
}

</script>
</body>

</html>
