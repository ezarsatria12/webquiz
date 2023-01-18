@extends('partials.index')

@section('container')
<section>
<div class="bg-white ">
    <div class="container px-6 py-4 mx-auto lg:flex lg:h-[800px] lg:py-20 ">
        <div class="flex flex-col justify-center items-center w-full lg:flex-row lg:w-1/2">
            <div class="max-w-lg">
                <p class="text-xl tracking-wide md:text-3xl lg:text-4xl font-inter font-semibold">
                    aasdasdl</p>
                    <br>
                    <div class="backdrop-filter backdrop-blur-lg md:backdrop-filter-none bg-green-111">
<!-- ... -->
                </div>
                <p class="mt-4 font-poppins">Lorem ipsum, dolor sit amet consectetur
                    adipisicing elit. Aut quia asperiores alias vero magnam recusandae adipisci ad vitae
                    laudantium quod rem voluptatem eos accusantium cumque.</p>
                <div class="mt-6">
                    <a href="#"
                        class="inline-block px-3 py-2 font-semibold text-center text-white transition-colors duration-200 transform 
                        bg-green-111 rounded-md hover:text-green-700">
                        Read More</a>
                </div>
            </div>
        </div>
        <div class="flex  self-center  w-full mt-2 lg:h-96 lg:w-1/2">
            <img class="object-cover w-full max-w-2xllg:h-full"
                src="pictures/gambar-hero.png" alt="anak-kecil">
        </div>
    </div>
</div>
</section>
<section class="flex justify-center mx-auto container relative w-screen bg-contain bg-white">
<div class="text-center w-3/4">
    <a class="font-inter font-extrabold text-4xl">Fitur utama kami</a>
    <br></br>
    <a>Lorem ipsum dolor sit amet consectetur.
        Diam cursus lacus tincidunt fermentum pulvinar nunc sollicitudin scelerisque.
        Mauris ullamcorper nascetur suspendisse elit vulputate lorem dolor.
        Adipiscing orci et erat eu placerat commodo. Arcu in nec id nibh interdum.</a>
        </div>
        
    </div>
</section>
<!-- ... -->
<section>
    <div class="container gap-[60px] px-6 py-4 mx-auto lg:flex lg:h-[800px] lg:py-20 ">
        <div class="flex flex-col justify-center items-center w-full lg:flex-row lg:w-1/2">
            <div class="max-w-lg space-y-[24px]">
                <img class="object-cover w-[40px] max-w-2xllg:h-full"
                src="pictures/puzzle.png" alt="anak-kecil">
                <h1 class="text-3xl font-medium">Quiz</h1>
                <p class="pb-[50px] sm:mt-4 font-poppins">Lorem ipsum, dolor sit amet consectetur
                    adipisicing elit. Aut quia asperiores alias vero magnam recusandae adipisci ad vitae
                    laudantium quod rem voluptatem eos accusantium cumquea.</p>
            </div>
        </div>
<!-- ... -->
        <div class="flex flex-col justify-center items-center w-full lg:flex-row lg:w-1/2">
            <div class="max-w-lg space-y-[24px]">
                <img class="object-cover w-[40px] max-w-2xllg:h-full"
                src="pictures/buku.png" alt="anak-kecil">
                <h1 class="text-3xl font-medium">Modul</h1>
                <p class="pb-[50px] sm:mt-4 font-poppins">Lorem ipsum, dolor sit amet consectetur
                    adipisicing elit. Aut quia asperiores alias vero magnam recusandae adipisci ad vitae
                    laudantium quod rem voluptatem eos accusantium cumque.</p>
            </div>
        </div>
    </div>
</section>
@endsection