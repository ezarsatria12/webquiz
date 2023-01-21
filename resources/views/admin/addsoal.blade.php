@extends('admin.partials.index')

@section('container')
<section>
    <div class="container space-y-5 m-auto px-3 sm:w-[1440px] h-full  sm:space-y-16">
        <div class="container h-fit space-y-5 justify-start flex flex-col m-auto sm:w-[1280px] sm:h-[64px] sm:flex-row sm:space-y-0 sm:space-x-20">
            <div name="Title" class="h-fit w-full sm:w-[630px] space-y-3">
                <p class="">Quiz Title</p>
                <textarea required class="outline-green-111 rounded border-2 p-2 w-full sm:w-[630px] border-gray-200 resize-none"
                name="Title" id="Title" rows="2" placeholder="Masukkan Judul Quiz"></textarea>
        </div>
            <div name="Title" class="h-fit w-full space-y-3 sm:w-1/2">
                <p class="">Kategori</p>
                <select id="Kategori" name="Kategori" required class="w-full sm:w-full select-none text-black-primary
                invalid:text-gray-400 focus:outline-green-111 rounded border-2 border-gray-200 box-border h-10 p-2 ">
                    <option value="" disabled selected>Pilih Kategori</option>
                    <option value="mudah">Mudah</option>
                    <option value="sedang">Sedang</option>
                    <option value="sulit">Sulit</option>
            </select>
        </div>
    </div>
    <div class="m-auto sm:w-[1280px] h-[676px] flex flex-col justify-start space-y-5">
        <div name="Title" class="space-y-3">
                <p class="">Quiz Description</p>
                <textarea class="w-full sm:w-[630px] outline-green-111 rounded border-2 p-2 border-gray-200 resize-none" 
                name="Title" id="Title" cols="80" rows="6" placeholder="Masukkan Judul Quiz"></textarea>
        </div>
        <div name="add" class="space-y-3 w-full sm:w-[630px]">
                <p class="">Add Question</p>
                <div class="flex flex-row">
                    <button class="" href="#">
                    <img class="w-[60px] h-[60px] hover:scale-105" src="{{ URL('pictures/Pilganda.png') }}" alt="pilgan"></button>
                    <button class="" href="">
                    <img class="w-[60px] h-[60px] hover:scale-105" src="{{ URL('pictures/essay.png') }}" alt="pilgan"></button>
                    <button class="" href="">
                    <img class="w-[60px] h-[60px] hover:scale-105" src="{{ URL('pictures/drag.png') }}" alt="pilgan"></button>
                </div>
                <div>
                <!-- soal -->
                <!-- pilgan -->
                <!-- button insert -->
                =================================PILGAN================================================
                <div name="pilgan" class="container m-auto white w-full sm:w-[1440px] space-y-5">
                    <div id="file" class="flex flex-col">
                    <p><input type="file" name="image" id="file-modul"
                    onchange="loadFile(event)" style="display: none;"></p>
                    <p><label for="file-modul" style="cursor: pointer;">
                    <img class="w-[60px] h-[60px] hover:scale-105" src="pictures/Insert file.png" alt="pilgan">
                    </label></p>
                    <p><img id="filemodul" class="w-[300px] h-[200px]"/></p>
                    <script>
                    var loadFile = function(event) {
                        var image = document.getElementById('filemodul');
                        image.src = URL.createObjectURL(event.target.files[0]);
                    };
                    </script>
                    </div>
                        <div class="flex flex-row justify-between">
                            <p>Soal 1</p>
                            <!-- button hapus -->
                            <button>
                                <img src="pictures/trashcan.png" class="w-[20px] h-[25px]" alt="">
                            </button>
                            </div>
                        <textarea required class="outline-green-111 rounded border-2 p-2 w-full sm:w-[1280px] 
                        border-gray-200 resize-none"
                        name="Title" id="Title" rows="1" placeholder="Masukkan Soal"></textarea>
                        <div class="space-y-5 w-full">
                            <!-- opsi -->
                            <div class="flex flex-col w-full space-y-3">
                                <p class="font-thin">Opsi 1</p>
                                <label class="inline-flex items-center w-full">
                                <input type="checkbox" class="accent-green-111 w-6 h-6 border-0 rounded-md focus:ring-0">
                                <span class="ml-2 w-[1280px]">
                                    <textarea required class="outline-green-111 rounded
                                    border-2 p-2 w-[300px] sm:w-full border-gray-200 resize-none"
                                    name="pilgan" id="pilgan" rows="1" placeholder="Masukkan jawaban"></textarea>
                                </span>
                                </label>
                            </div>
                            <!-- opsi end -->
                             <!-- opsi -->
                            <div class="flex flex-col w-full space-y-3">
                                <p class="font-thin">Opsi 2</p>
                                <label class="inline-flex items-center w-full">
                                <input type="checkbox" class="accent-green-111 w-6 h-6 border-0 rounded-md focus:ring-0">
                                <span class="ml-2 w-[1280px]">
                                    <textarea required class="outline-green-111 rounded
                                    border-2 p-2 w-[300px] sm:w-full border-gray-200 resize-none"
                                    name="pilgan" id="pilgan" rows="1" placeholder="Masukkan jawaban"></textarea>
                                </span>
                                </label>
                            </div>
                            <!-- opsi end -->
                             <!-- opsi 3 khusus + button hapus opsi -->
                            <div class="flex flex-col w-full space-y-3">
                                <div class="flex flex-row justify-between">
                                    <p>Opsi 3</p>
                                    <!-- button hapus -->
                                    <button>
                                        <img src="pictures/trashcan.png" class="w-[20px] h-[25px]" alt="">
                                    </button>
                                    </div>
                                <label class="inline-flex items-center w-full">
                                <input type="checkbox" class="accent-green-111 w-6 h-6 border-0 rounded-md focus:ring-0">
                                <span class="ml-2 w-[1280px]">
                                    <textarea required class="outline-green-111 rounded
                                    border-2 p-2 w-[300px] sm:w-full border-gray-200 resize-none"
                                    name="pilgan" id="pilgan" rows="1" placeholder="Masukkan jawaban"></textarea>
                                </span>
                                </label>
                            </div>
                            <!-- opsi end -->
                            
                            <!--button tambah opsi -->
                            <div>
                                <button class="hidden  sm:flex hover:scale-105 bg-green-111 hover:bg-white hover:text-green-111 px-4 py-2
                                rounded font-inter font-medium text-white hover:shadow-lg">
                                Tambahkan Opsi
                            </button>
                        </div>
                    </div>
                </div>
                ========================================ESSAY=============================================================
                <!-- essay -->
                <div>
                    <!-- button insert -->
                    <div name="essay" class="container m-auto white w-full sm:w-[1440px] space-y-5"></p>
                    <div id="file" class="flex flex-col">
                    <p><input type="file" name="image" id="file-modul"
                    onchange="loadFile(event)" style="display: none;"></p>
                    <p><label for="file-modul" style="cursor: pointer;">
                    <img class="w-[60px] h-[60px] hover:scale-105" src="pictures/Insert file.png" alt="pilgan">
                    </label></p>
                    <p><img id="filemodul" class="w-[300px] h-[200px]"/></p>
                    <script>
                    var loadFile = function(event) {
                        var image = document.getElementById('filemodul');
                        image.src = URL.createObjectURL(event.target.files[0]);
                    };
                    </script>
                    </div>
                    <!-- soal -->
                    <div class="flex flex-col gap-5" >
                        <div class="flex flex-row justify-between">
                            <p>Soal 1</p>
                            <!-- button hapus -->
                            <button>
                            <img src="pictures/trashcan.png" class="w-[15px] h-[20px] sm:w-[20px] sm:h-[25px]" alt="">
                        </button>
                        </div>
                    <textarea required class="outline-green-111 rounded border-2 p-2 w-full sm:w-[1280px] border-gray-200 resize-none"
                    name="Title" id="Title" rows="1" placeholder="Masukkan Soal"></textarea>
                <div class="space-y-5 w-full">
            </div>
        </div>
    </div>
</div>
<!-- drag n drop -->
=========================================================DRAGNDROP====================================================
<div>
    <!-- button insert -->
        <div name="dragndrop" class="container m-auto white w-full sm:w-[1440px] space-y-5"></p>
            <div id="file" class="flex flex-col">
                <p><input type="file" name="image" id="file-modul"
                onchange="loadFile(event)" style="display: none;"></p>
                <p><label for="file-modul" style="cursor: pointer;">
                <img class="w-[60px] h-[60px] hover:scale-105" src="pictures/Insert file.png" alt="pilgan">
                </label></p>
                <p><img id="filemodul" class="w-[300px] h-[200px]"/></p>
                <script>
                var loadFile = function(event) {
                    var image = document.getElementById('filemodul');
                    image.src = URL.createObjectURL(event.target.files[0]);
                };
                </script>
                </div>
                <!-- soal -->
                <div class="flex flex-col gap-5" >
                    <!-- opsi + -->
                    <div class="flex flex-row justify-between">
                        <p>Soal 1</p>
                        <!-- button hapus -->
                    <button>
                        <img src="pictures/trashcan.png" class="w-[15px] h-[20px] sm:w-[20px] sm:h-[25px]" alt="">
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
                        <img src="pictures/trashcan.png" class="w-[15px] h-[20px] sm:w-[20px] sm:h-[25px]" alt="">
                    </button>
                    </div>
                <textarea required class="outline-green-111 rounded border-2 p-2 w-full sm:w-[1280px] border-gray-200 resize-none"
                name="Title" id="Title" rows="1" placeholder="Masukkan Soal"></textarea>
                <textarea required class="outline-green-111 rounded border-2 p-2 w-full sm:w-[1280px] border-gray-200 resize-none"
                name="Title" id="Title" rows="1" placeholder="Masukkan Jawaban"></textarea>
                <!-- opsi end -->
                <!-- tombol tambah opsi -->
                <div>
                    <button class="hidden  sm:flex hover:scale-105 bg-green-111 hover:bg-white hover:text-green-111 px-4 py-2
                    rounded font-inter font-medium text-white hover:shadow-lg">
                    Tambahkan Opsi
                </button>
            </div>
        </div>
    </div>
</div>
        <!-- button simpan -->
        <div class="container flex flex-row w-full sm:w-[1280px] h-[38px] justify-end">
            <button>
                <a href="">
                    <img class="w-[130px] h-[38px] hover:scale-105" src="{{ URL('Pictures/simpan.png') }}" alt="">
                </a>
            </button>
        </div>
    </div>
</div>
</section>
@endsection