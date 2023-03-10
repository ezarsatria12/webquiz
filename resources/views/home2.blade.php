@extends('partials.index')

@section('container')
<section>
    <div class="bg-white ">
        <div class="container px-6 py-4 mx-auto lg:flex lg:h-[800px] lg:py-20 ">
            <div class="flex flex-col justify-center items-center w-full lg:flex-row lg:w-1/2">
                <div class="max-w-lg">
                    <p class="font-inter text-2xl pt-5 sm:pt-0 sm:text-4xl text-black tracking-wide">
                        "Get Rid From Sadness With Pantun" </p>
                    <p class="text-sm"></p>
                    <br>
                    <div class="backdrop-filter backdrop-blur-lg md:backdrop-filter-none bg-green-111">
                        <!-- ... -->
                    </div>
                    <p class="mt-4 font-poppins">SmartPantun adalah sebuah platform digital yang menyediakan sarana
                        belajar untuk pelajar yang ingin belajar pantun </p>
                    <div class="mt-6">
                        <button href="#" class="inline-block px-3 py-2 font-inter text-xs text-center text-white 
                    bg-green-111 rounded-md focus:shadow-card">
                            Read More</button>
                    </div>
                </div>
            </div>
            <div class="flex  self-center  w-full mt-2 lg:w-1/2">
                <img class="object-cover w-full max-w-2xl lg:h-full" src="{{ URL('pictures/gambarhero.png') }}" alt="anak-kecil">
            </div>
        </div>
    </div>
</section>
<section class="flex justify-center mx-auto">
    <div class="text-center w-3/4">
        <a class="font-inter text-2xl sm:text-4xl text-black">Fitur utama kami</a>
        <br></br>
        <a class="font-poppins text-xl text-grey-fade">Kami menyediakan kedua fitur utama kami yaitu quiz dan modul </a>
    </div>
    </div>
</section>
<!-- ... -->
<section>
    <div class="container gap-[60px] px-6 py-4 mx-auto lg:flex lg:h-[800px] lg:py-20 ">
        <div class="flex flex-col justify-center items-center w-full lg:flex-row lg:w-1/2">
            <div class="max-w-lg space-y-[24px]">
                <img class="object-cover w-[40px] max-w-2xllg:h-full" src="{{ URL('pictures/puzzle.png') }}" alt="anak-kecil">
                <h1 class="font-inter text-2xl text-black">Quiz</h1>
                <p class="pb-[50px] sm:mt-4 font-poppins text-xl text-grey-fade">Didalam fitur kuis pelajar bisa
                    menggunakan fitur ini untuk
                    mencari dan
                    mengerjakan sebuah kuis yang sudah disediakan
                </p>
            </div>
        </div>
        <!-- ... -->
        <div class="flex flex-col justify-center items-center w-full lg:flex-row lg:w-1/2">
            <div class="max-w-lg space-y-[24px]">
                <img class="object-cover w-[40px] max-w-2xllg:h-full" src="{{ URL('pictures/buku.png') }}" alt="anak-kecil">
                <h1 class="font-inter text-2xl text-black">Modul</h1>
                <p class="pb-[50px] sm:mt-4 font-poppins text-xl text-grey-fade">Di dalam fitur modul pelajar bisa
                    menggunakan fitur ini untuk
                    menambah wawasan
                    dengan cara membaca modul" pembelajaran yang disediakan
                </p>
            </div>
        </div>
    </div>
</section>
<footer class="bottom-0 w-full static">
    <div class="bg-green-111 h-fit bottom-0 text-white w-full h-full py-[80px] px-[50px] gap-5  mx-auto sm:px-[80px] sm:py-[55px] sm:h-[200px] flex flex-col sm:flex-row content-center sm:justify-between">
        <div class="flex flex-col">
            <span class="text-4xl font-medium">SmartPantun</span>
        </div>
        <div class="flex flex-col gap-3">
            <a href="/aboutus" class="text-xl hover:underline">About Us</a>
            <a href="/info" class="text-xl hover:underline">Info Pengembang</a>
        </div>
        <div class="flex flex-col gap-3 h-fit">
            <span class="text-2xl">Contact</span>
            <div class="flex flex-row w-full gap-2">
                <img src="{{ URL('pictures/mail.png') }}" class="w-[32px] h-[32px]" alt="">
                <span class="text-xl">smartpantun@gmail.com</span>
            </div>
            </div>
        </div>
    </div>
</footer>
@endsection