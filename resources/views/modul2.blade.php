@extends('partials.index')

@section('container')
<section class=" pt-20 pb-10 sm:pt-[120px] sm:pb-20">
    <div class="container m-auto px-3 sm:w-[1440px] h-[1024px] space-y-[32px] ">
        <div class="container mx-auto flex flex-wrap sm:w-full justify-between  font-medium text-3xl">
            <h1>Daftar modul</h1>
            <a href="#">
                <img class="w-8 h-8 bg-blend-color-burn hover:ring-1 hover:ring-green-111" src="Pictures/plus.png" alt="whatsapp">
        </a>
    </div>
        <div class=" h-fit flex flex-row space-x-[32px] sm:text-[20px] w-[1280px] ">
            <a class="hover:text-green-111 focus:text-green-111" href="#    ">Terbaru</a>
            <a class="hover:text-green-111 focus:text-green-111" href="#">Puisi</a>
            <a class="hover:text-green-111 focus:text-green-111" href="#">Pantun</a>
            </div>
            <!-- card section -->
                <div class="container mx-auto ">
                    <div class="h-fit mx-auto flex flex-wrap  ">
                    <div class="container w-[400px] h-[430px] mx-[24px]">
                <!-- card 1 -->
                <div class="bg-gray-50 container my-[15px] relative
                shadow-boxjawaban rounded-lg space-y-[15px] sm:w-[400px] h-[430px]">
                    <a href="#card1">
                        <div class="container m-auto justify-center flex sm:w-[348px] h-[185px] ">
                            <img class="mx-auto my-[15px] border-2 sm:w-[348px] h-fit" src="pictures/template.png" alt="thumbnail-modul">
                        </div>
                    <div class="container flex-col flex mx-auto space-y-[24px] sm:w-[352px] h-[128px]">
                        <p class="sm:text-2xl">Judul Modul</p>
                        <p class="">Deskripsi modul</p>
                </div>
                    <div class="container mx-auto flex justify-end sm:w-[352px] h-[32px]">
                        <img class="sm:w-[32px] h-[32px]" src="pictures/go.png" alt="">
                </div>
            </div>
            <div class="bg-gray-50 container my-[15px] relative
                shadow-boxjawaban rounded-lg space-y-[15px] sm:w-[400px] h-[430px]">
                    <a href="#card1">
                        <div class="container m-auto justify-center flex sm:w-[348px] h-[185px] ">
                            <img class="mx-auto my-[15px] border-2 sm:w-[348px] h-fit" src="pictures/template.png" alt="thumbnail-modul">
                        </div>
                    <div class="container flex-col flex mx-auto space-y-[24px] sm:w-[352px] h-[128px]">
                        <p class="sm:text-2xl">Judul Modul</p>
                        <p class="">Deskripsi modul</p>
                </div>
                    <div class="container mx-auto flex justify-end sm:w-[352px] h-[32px]">
                        <img class="sm:w-[32px] h-[32px]" src="pictures/go.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection