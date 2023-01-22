<div>
    <div>
        <!-- button insert -->
        <div name="dragndrop" class="container m-auto white w-full sm:w-[1440px] space-y-5">
            </p>
            <div id="file" class="flex flex-col">
                <p><input type="file" name="image" id="file-modul" onchange="loadFile(event)" style="display: none;">
                </p>
                <p><label for="file-modul" style="cursor: pointer;">
                        <img class="w-[60px] h-[60px] hover:scale-105" src="pictures/Insert file.png" alt="pilgan">
                    </label></p>
                <p><img id="filemodul" class="w-[300px] h-[200px]" /></p>
                <script>
                    var loadFile = function(event) {
                        var image = document.getElementById('filemodul');
                        image.src = URL.createObjectURL(event.target.files[0]);
                    };
                </script>
            </div>
            <!-- soal -->
            <div class="flex flex-col gap-5">
                <!-- opsi + -->
                <div class="flex flex-row justify-between">
                    <p>Soal 1</p>
                    <!-- button hapus -->
                    <button>
                        <img src="pictures/trashcan.png" class="w-[15px] h-[20px] sm:w-[20px] sm:h-[25px]"
                            alt="">
                    </button>
                </div>
                <textarea required class="outline-green-111 rounded border-2 p-2 w-full sm:w-[1280px] border-gray-200 resize-none"
                    name="Title" id="Title" rows="1" placeholder="Masukkan Soal"></textarea>
                <textarea required class="outline-green-111 rounded border-2 p-2 w-full sm:w-[1280px] border-gray-200 resize-none"
                    name="Title" id="Title" rows="1" placeholder="Masukkan Jawaban"></textarea>
                <!-- opsi end -->
                <!-- opsi + -->
                <div class="flex flex-row justify-between">
                    <p>Soal 1</p>
                    <!-- button hapus -->
                    <button>
                        <img src="pictures/trashcan.png" class="w-[15px] h-[20px] sm:w-[20px] sm:h-[25px]"
                            alt="">
                    </button>
                </div>
                <textarea required class="outline-green-111 rounded border-2 p-2 w-full sm:w-[1280px] border-gray-200 resize-none"
                    name="Title" id="Title" rows="1" placeholder="Masukkan Soal"></textarea>
                <textarea required class="outline-green-111 rounded border-2 p-2 w-full sm:w-[1280px] border-gray-200 resize-none"
                    name="Title" id="Title" rows="1" placeholder="Masukkan Jawaban"></textarea>
                <!-- opsi end -->
                <!-- tombol tambah opsi -->
                <div>
                    <button 
                        class="hidden  sm:flex hover:scale-105 bg-green-111 hover:bg-white hover:text-green-111 px-4 py-2
                    rounded font-inter font-medium text-white hover:shadow-lg">
                        Tambahkan Opsi
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
