@extends('partials.index')

@section('container')
<section>
    <div class="container space-y-5 m-auto px-3 sm:w-[1440px] sm:h-[1024px] sm:space-y-16">
        <div class="container h-fit space-y-5 justify-start flex flex-col m-auto sm:w-[1280px] lg:h-[64px] lg:flex-row sm:space-y-0 sm:space-x-20">
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
                    <img class="w-[60px] h-[60px] hover:scale-105" src="pictures/Pilganda.png" alt="pilgan"></button>
                    <button class="" href="">
                    <img class="w-[60px] h-[60px] hover:scale-105" src="pictures/essay.png" alt="pilgan"></button>
                    <button class="" href="">
                    <img class="w-[60px] h-[60px] hover:scale-105" src="pictures/drag.png" alt="pilgan"></button>
                </div>
        </div>
        <div class="container flex flex-row w-full sm:w-[1280px] h-[38px] justify-end">
            <button>
                <img class="w-[130px] h-[38px] hover:scale-105" src="pictures/simpan.png" alt="">
            </button>
        </div>
    </div>
</div>
</section>
@endsection