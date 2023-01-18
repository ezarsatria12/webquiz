@extends('partials.index')

@section('container')
<section>
    <div class="container resize-none m-auto w-1440px] h-[1024px] space-y-20">
        <div class="container m-auto w-[1280px] h-[64px] flex flex-row justify-start space-x-20">
            <div name="Title" class=" w-[630px] space-y-3">
                <p class="">Modul Title</p>
                <textarea required class="outline-green-111 rounded border-2 p-2 border-gray-200 resize-none" name="Title" id="Title" cols="80" rows="2" 
                placeholder="Masukkan Judul Modul"></textarea>
        </div>
            <div name="Title" class="space-y-3 w-full">
                <p class="">Kategori</p>
                <select id="Kategori" name="Kategori" required class="select-none text-black-primary invalid:text-gray-400 focus:outline-green-111 rounded border-2 border-gray-200 box-border w-full h-10 p-2 ">
                    <option value="" disabled selected>Pilih Kategori</option>
                    <option value="mudah">Mudah</option>
                    <option value="sedang">Sedang</option>
                    <option value="sulit">Sulit</option>
            </select>
        </div>
    </div>
    <div class="m-auto w-[1280px] h-[676px] flex flex-col justify-start space-y-10">
        <div name="Title" class="space-y-3">
                <p class="">Modul Description</p>
                <textarea class="outline-green-111 rounded border-2 p-2 border-gray-200 resize-none" name="Title" id="Title" cols="80" rows="6" 
                placeholder="Masukkan Judul Modul"></textarea>
        </div>
        <div name="add" class="space-y-3">
                <p class="">Add File</p>
                <div class="flex flex-row">
                    <button class="" href="#">
                    <img class="w-[60px] h-[60px] hover:scale-105" src="pictures/Insert pict.png" alt="pilgan"></button>
                    <button class="" href="">
                    <img class="w-[60px] h-[60px] hover:scale-105" src="pictures/Insert audio.png" alt="pilgan"></button>
                    <button class="" href="">
                    <img class="w-[60px] h-[60px] hover:scale-105" src="pictures/Insert mp4.png" alt="pilgan"></button>
                    <button class="" href="">
                    <img class="w-[60px] h-[60px] hover:scale-105" src="pictures/Insert file.png" alt="pilgan"></button>
                </div>
        </div>
        <div class="container flex flex-row w-[1280px] h-[38px] justify-end">
            <button>
                <img class="w-[130px] h-[38px] hover:scale-105" src="pictures/simpan.png" alt="">
            </button>
        </div>
    </div>
</div>
</section>
@endsection