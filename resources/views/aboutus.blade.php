@extends('partials.index')

@section('container')
<section>
    <div class="bg-white ">
        <div class="container px-6 py-4 mx-auto flex justify-between lg:h-[800px] h-full">
                <div class="container shadow-card p-5 rounded-md flex flex-col sm:flex-col gap-10 w-full m-auto justify-between">
                <div class="m-auto w-full">
                    <h1 class="text-4xl text-center font-inter">SMARTPANTUN</h1>
                    </div>
                    <div class="mx-auto flex flex-col w-full">
                    <p class="font-inter mx-auto text-xs sm:text-xl px-5 text-black">
                        &nbsp;&nbsp;&nbsp;Di SmartPantun, kami percaya pada kekuatan pengetahuan untuk mengubah kehidupan.
                        Itulah mengapa kami menciptakan platform pendidikan inovatif yang menggabungkan
                        pembelajaran tradisional dengan teknologi modern. Platform kami menyediakan Modul 
                        dan Kuis, agar memberi siswa pengalaman belajar yang komprehensif dan menarik yang 
                        membantu mereka mencapai potensi penuh mereka.</p>
                        <br>
                        
                    <p class="font-inter mx-auto text-xs sm:text-xl px-5 text-black">
                        &nbsp;&nbsp;&nbsp;Dengan Modul, siswa dapat mengakses perpustakaan modul pendidikan berkualitas tinggi
                        yang mencakup berbagai materi pantun. Modul kami bersifat bebas anda bisa membuat modul
                        untuk berbagi pengetahuan anda ataupun membuka modul yang dibagikan oleh orang lain,serta
                        menampilkan konten multimedia yang menarik, aktivitas interaktif, dan contoh dunia nyata.</p>
                        <br>
                    <p class="font-inter mx-auto text-xs sm:text-xl px-5 text-black">
                        &nbsp;&nbsp;&nbsp;Dan dengan fitur Kuis kami, siswa dapat menguji pengetahuan mereka dan memperkuat pemahaman
                        mereka tentang materi. Kuis kami dirancang agar menantang dan menyenangkan, dan memberikan
                        umpan balik langsung untuk membantu siswa mengidentifikasi area di mana mereka perlu
                        memfokuskan studi mereka.</p>
                        <br>
                    <p class="font-inter mx-auto text-xs sm:text-xl px-5 text-black">
                        &nbsp;&nbsp;&nbsp;Di SmartPantun, kami berkomitmen untuk menjadikan pendidikan dapat diakses dan terjangkau
                        oleh semua orang. Platform kami tersedia 24/7, dan dapat diakses dari mana saja dengan koneksi
                        internet. Kami percaya bahwa kombinasi aksesibilitas dan keterjangkauan ini akan membantu mendobrak
                        hambatan pendidikan dan memungkinkan lebih banyak orang untuk mencapai impian mereka.</p>
                        <br>
                    <p class="font-inter mx-auto text-xs sm:text-xl px-5 text-black">
                        &nbsp;&nbsp;&nbsp;Jadi walaupun Anda seorang siswa, guru, atau seseorang yang sedang belajar, kami mengundang Anda 
                        untuk bergabung dengan kami dalam misi kami untuk mengembangkan pendidikan dengan fasilitas ini.</p>
                        <br>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
</section>
<footer class="bottom-0 w-full hidden xl:block">
    <div class="bg-green-111 h-fit bottom-0 text-white w-full py-[80px] px-[50px] gap-5  mx-auto sm:px-[80px] sm:py-[55px] sm:h-[200px] flex flex-col sm:flex-row content-center sm:justify-between">
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