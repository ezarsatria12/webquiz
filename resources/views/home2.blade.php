@extends('partials.index')

@section('container')
<div class="bg-white lg:flex lg:px-20 ">
    <section>
    <div class="container flex flexjustify-between">
        <div class="flex flex-col  items-center w-full lg:flex-row lg:w-1/2">
            <div class="max-w-lg ">
                <p class="text-xl tracking-wide text-white text-black lg:text-3xl lg:text-4xl font-inter font-semibold">
                    Anak kecil</p>
                    <br>
                    <div class="backdrop-filter backdrop-blur-lg md:backdrop-filter-none bg-green-111">
  <!-- ... -->
                </div>
                <p class=" text-black opacity-60 font-poppins">Lorem ipsum, dolor sit amet consectetur
                    adipisicing elit. Aut quia asperiores alias vero magnam recusandae adipisci ad vitae
                    laudantium quod rem voluptatem eos accusantium cumque.</p>
                <div class="mt-6">
                    <a href="#"
                        class="inline-block px-3 py-2 font-semibold text-center text-white transition-colors duration-200 transform bg-green-111 rounded-md hover:text-green-700">
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
<section class="flex flex-col justify-center mx-auto container relative w-screen bg-contain bg-white lg:flex lg:px-20">
    <div class="text-center w-3/4">
        <a class="font-extrabold text-4xl">Fitur utama kami</a>
        <br></br>
        <a>Lorem ipsum dolor sit amet consectetur.
          Diam cursus lacus tincidunt fermentum pulvinar nunc sollicitudin scelerisque. Mauris ullamcorper nascetur suspendisse elit vulputate lorem dolor.
          Adipiscing orci et erat eu placerat commodo. Arcu in nec id nibh interdum.</a>
    </div>
    <div class="flex flex-row justify-between">
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
              <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
              </p>
            </div>
        </div>
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
              <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
              </p>
            </div>
        </div>
    </div>
</section>

@endsection