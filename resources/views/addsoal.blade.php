@extends('partials.index')

@section('container')
<section>
    <div class="m-auto w-1440px] h-[1024px] space-y-5">
        <div class="m-auto w-[1280px] h-[64px] flex flex-row justify-start">
            <div name="Title" class=" w-[630px] space-y-3">
                <p class="">Quiz Title</p>
                <textarea class="" name="Title" id="Title" cols="80" rows="2" placeholder="Masukkan Judul Quiz"></textarea>
        </div>
            <div name="Title" class="pl-[20px] space-y-3">
                <p class="">Kategori</p>
                <select id="Kategori" name="Kategori" class="w-full" plcaeholder="">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="fiat">Fiat</option>
                    <option value="audi">Audi</option>
            </select>
        </div>
    </div>
    <div class="m-auto w-[1280px] h-[676px] flex flex-col justify-start">
        <div name="Title" class="space-y-3">
                <p class="">Quiz Description</p>
                <textarea name="Title" id="Title" cols="80" rows="2" placeholder="Masukkan Judul Quiz"></textarea>
        </div>
        <div name="add" class="space-y-3">
                <p class="">Add Question</p>
                <div class="flex flex-row">
                    <a class="" href="">
                    <img class="w-[60px] h-[60px] hover:brightness-110" src="pictures/Pilganda.png" alt="pilgan"></a>
                    <a class="" href="">
                    <img class="w-[60px] h-[60px] hover:brightness-110" src="pictures/essay.png" alt="pilgan"></a>
                    <a class="" href="">
                    <img class="w-[60px] h-[60px] hover:brightness-110" src="pictures/drag.png" alt="pilgan"></a>
                </div>
        </div>
    </div>
</div>
</section>
@endsection