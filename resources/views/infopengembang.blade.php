@extends('partials.index')

@section('container')
<section>
    <div class="bg-white ">
        <div class="container px-6 py-4 mx-auto flex justify-between lg:h-[800px] h-full">
                <div class="container shadow-card p-5 rounded-md flex flex-col sm:flex-row w-full m-auto justify-between gap-5">
                <div class="m-auto w-full">
                    <img src="{{ URL('pictures/portrait.png') }}" class="w-[200px] h-[300px] sm:h-[600px] sm:w-[400px] rounded-md m-auto " alt="me">
                </div>
                    <div class="mx-auto flex flex-col w-full">
                    <p class="font-inter mx-auto text-4xl sm:text-6xl text-black">
                    Biodata</p>
                    <br>
                    <p class="font-inter text-2xl sm:text-3xl text-black">Sati, S.Pd.SD</p>
                    <br>
                    <p class="font-inter text-2xl sm:text-3xl text-black">Guru SDN Tambakreja 05 Cilacap Selatan </p>
                    <br>
                    <p class="font-inter text-2xl sm:text-3xl text-black">Dosen Pembimbing : Dr. Kuntoro, M.Hum</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<footer class="bottom-0 w-full hidden sm:block">
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