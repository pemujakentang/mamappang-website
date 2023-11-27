
<body>
<x-app-layout>
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
        <livewire:layout.admin-nav />
        <div class="flex-auto min-h-screen bg-[#FFDBA3] pt-20 md:pt-0">
            <!-- Dummy Content on the Right Sidebar -->
            <div class="md:ml-64 p-8 ">
                <div class="flex md:flex-row flex-col items-center w-full md:justify-between">
                    <div
                        class="col-span-2 lg:col-span-1 text-3xl lg:text-5xl tracking-wide truncate font-averialibre text-orange-800">
                        Order Status</div>
                </div>
                <div
                    class="p-4 lg:p-8 grid grid-cols-1 lg:grid-cols-2 gap-4 border border-solid border-[#F1A03C] rounded-2xl bg-[#b9480f] overflow-y-auto">
                    <!-- Dummy data, replace with dynamic data in a real application -->
                    <div class="bg-[#f1a03c] border-solid border-4 border-[#F1A03C] p-4 lg:p-6 rounded-2xl mb-4">
                        <!-- Item 1 -->
                        <div class="flex justify-between items-center mb-8 lg:mb-16">
                            <div class="flex items-center">
                                <span class="ml-2 font-averialibre text-orange-800 text-4xl lg:text-5xl uppercase"
                                    style="-webkit-text-stroke: 1px rgba(255,255,255,0.8);">ODR 1</span>
                            </div>
                            <span class="ml-2 font-averialibre text-orange-800 text-4xl lg:text-5xl uppercase"
                                style="-webkit-text-stroke: 1px rgba(255,255,255,0.8);">Pending</span>
                        </div>

                        <!-- Item 2 -->
                        <div class="flex justify-between items-center">
                            <div class="flex flex-col items-start">
                                <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Nama: John
                                    Thor</span>
                                <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Request: John
                                    Doe</span>
                                <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Payment Status:
                                    Lorem Ipsum</span>
                            </div>
                            <a href="#"
                                class="ml-2 font-averialibre text-orange-800 text-xl lg:text-3xl underline flex justify-between items-center bg-[#FAC774] border-solid border-4 border-[#ad713e] p-2 rounded-2xl max-w-[1100px]"
                                onclick="toggleModal()">View Details</a>
                        </div>
                    </div>
                    <!-- Dummy data, replace with dynamic data in a real application -->
                    <div class="bg-[#f1a03c] border-solid border-4 border-[#F1A03C] p-4 lg:p-6 rounded-2xl mb-4">
                        <!-- Item 1 -->
                        <div class="flex justify-between items-center mb-8 lg:mb-16">
                            <div class="flex items-center">
                                <span class="ml-2 font-averialibre text-orange-800 text-4xl lg:text-5xl uppercase"
                                    style="-webkit-text-stroke: 1px rgba(255,255,255,0.8);">ODR 1</span>
                            </div>
                            <span class="ml-2 font-averialibre text-orange-800 text-4xl lg:text-5xl uppercase"
                                style="-webkit-text-stroke: 1px rgba(255,255,255,0.8);">Pending</span>
                        </div>

                        <!-- Item 2 -->
                        <div class="flex justify-between items-center">
                            <div class="flex flex-col items-start">
                                <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Nama: John
                                    Thor</span>
                                <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Request: John
                                    Doe</span>
                                <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Payment Status:
                                    Lorem Ipsum</span>
                            </div>
                            <a href="#"
                                class="ml-2 font-averialibre text-orange-800 text-xl lg:text-3xl underline flex justify-between items-center bg-[#FAC774] border-solid border-4 border-[#ad713e] p-2 rounded-2xl max-w-[1100px]"
                                onclick="toggleModal()">View Details</a>
                        </div>
                    </div> <!-- Dummy data, replace with dynamic data in a real application -->
                    <div class="bg-[#f1a03c] border-solid border-4 border-[#F1A03C] p-4 lg:p-6 rounded-2xl mb-4">
                        <!-- Item 1 -->
                        <div class="flex justify-between items-center mb-8 lg:mb-16">
                            <div class="flex items-center">
                                <span class="ml-2 font-averialibre text-orange-800 text-4xl lg:text-5xl uppercase"
                                    style="-webkit-text-stroke: 1px rgba(255,255,255,0.8);">ODR 1</span>
                            </div>
                            <span class="ml-2 font-averialibre text-orange-800 text-4xl lg:text-5xl uppercase"
                                style="-webkit-text-stroke: 1px rgba(255,255,255,0.8);">Pending</span>
                        </div>

                        <!-- Item 2 -->
                        <div class="flex justify-between items-center">
                            <div class="flex flex-col items-start">
                                <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Nama: John
                                    Thor</span>
                                <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Request: John
                                    Doe</span>
                                <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Payment Status:
                                    Lorem Ipsum</span>
                            </div>
                            <a href="#"
                                class="ml-2 font-averialibre text-orange-800 text-xl lg:text-3xl underline flex justify-between items-center bg-[#FAC774] border-solid border-4 border-[#ad713e] p-2 rounded-2xl max-w-[1100px]"
                                onclick="toggleModal()">View Details</a>
                        </div>
                    </div> <!-- Dummy data, replace with dynamic data in a real application -->
                    <div class="bg-[#f1a03c] border-solid border-4 border-[#F1A03C] p-4 lg:p-6 rounded-2xl mb-4">
                        <!-- Item 1 -->
                        <div class="flex justify-between items-center mb-8 lg:mb-16">
                            <div class="flex items-center">
                                <span class="ml-2 font-averialibre text-orange-800 text-4xl lg:text-5xl uppercase"
                                    style="-webkit-text-stroke: 1px rgba(255,255,255,0.8);">ODR 1</span>
                            </div>
                            <span class="ml-2 font-averialibre text-orange-800 text-4xl lg:text-5xl uppercase"
                                style="-webkit-text-stroke: 1px rgba(255,255,255,0.8);">Pending</span>
                        </div>

                        <!-- Item 2 -->
                        <div class="flex justify-between items-center">
                            <div class="flex flex-col items-start">
                                <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Nama: John
                                    Thor</span>
                                <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Request: John
                                    Doe</span>
                                <span class="ml-2 font-averialibre text-orange-800 text-lg lg:text-2xl">Payment Status:
                                    Lorem Ipsum</span>
                            </div>
                            <a href="#"
                                class="ml-2 font-averialibre text-orange-800 text-xl lg:text-3xl underline flex justify-between items-center bg-[#FAC774] border-solid border-4 border-[#ad713e] p-2 rounded-2xl max-w-[1100px]"
                                onclick="toggleModal()">View Details</a>
                        </div>
                    </div>
                    <!-- Add more items as needed -->
                </div>
            </div>
        </div>

    </div>

    <!-- Modal container using plain JavaScript -->
    <div id="modal" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 hidden overflow-y-auto">
        <div
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#b9480f] text-orange-800 p-4 rounded-2xl border border-solid border-[#F1A03C] max-w-[90%] lg:max-w-[500px]">
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
                    <div id="blueSection"
                        class="font-averialibre w-full h-auto bg-[#945e3d] flex justify-start items-start">
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
                        <div id="greenSectionContent" font-averialibre
                            class="flex-1 flex items-center justify-between">
                            <p id="questionText" class="text-orange-800 text-justify">Terima Pesanan?</p>
                            <div id="buttonContainer" class="flex justify-between items-center mt-2">
                                <button onclick="replaceContent('terima')"
                                    class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#f1a03c] text-[#b9480f] rounded-full h-[35px] w-[100px] border border-[#b9480f]">Terima</button>
                                <button onclick="replaceContent('tidak')"
                                    class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#fded87] text-[#b9480f] rounded-full h-[35px] w-[100px] border border-[#b9480f]">Tidak</button>
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
                <button onclick="toggleModal()"
                    class="font-averialibre text-orange-800 text-3xl flex items-center justify-center bg-[#FAC774] text-[#b9480f] rounded-full h-[50px] w-full">Close</button>
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
            <button onclick="resetContent()" class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#f1a03c] text-[#b9480f] rounded-full h-[35px] w-[40%] border border-[#b9480f]">Cancel</button>
            <button onclick="next()" class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#fded87] text-[#b9480f] rounded-full h-[35px] w-[40%] border border-[#b9480f]">Save</button>
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
    <button onclick="resetContent()" class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#f1a03c] text-[#b9480f] rounded-full h-[35px] w-[40%] border border-[#b9480f]">Cancel</button>
    <button onclick="toggleModal()" class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#fded87] text-[#b9480f] rounded-full h-[35px] w-[40%] border border-[#b9480f]">Save</button>
</div>
        `;
            }
        }

        function next() {
            const replacementContent = document.getElementById('replacementContent');
            replacementContent.classList.add('hidden');
            const modal = document.getElementById('modal');
            modal.classList.toggle('hidden');

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
            // inii
            bottomButtons.innerHTML = `
        <div id="greenSectionContent" class="flex-1 flex items-center justify-between">
            <button onclick="toggleModal()" class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#f1a03c] text-[#b9480f] rounded-full h-[35px] w-[40%] border border-[#b9480f]">Cancel</button>
            <button onclick="toggleModal()" class="font-averialibre text-orange-800 text-2xl flex items-center justify-center bg-[#fded87] text-[#b9480f] rounded-full h-[35px] w-[40%] border border-[#b9480f]">Save</button>
        </div>
    `;
        }

        window.onload = function() {
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
    </x-app-layout>
</body>
