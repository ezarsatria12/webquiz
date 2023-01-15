<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/modul.css')}}">
</head>

<body>
    @include('.nav')
<main>
<section class="hidden">
    <div class="self-center sm:flex-col container justify-between">
        <a class="flex flex-col text-5xl">Hello</a>
</div>
</section>
<section class="flex-row  sm:h-full self-start between pt-8 bg-contain w-screen flex justify-between px-20 py-8 bg-white space-x-10">
    <div class="self-center sm:flex-col container justify-between">
        <h1 class="flex flex-col text-5xl">Hello</h1>
        <a class="container block text-xs sm:text-xl">Lorem ipsum dolor sit amet consectetur.
          Diam cursus lacus tincidunt fermentum pulvinar nunc sollicitudin scelerisque. Mauris ullamcorper nascetur suspendisse elit vulputate lorem dolor.
          Adipiscing orci et erat eu placerat commodo. Arcu in nec id nibh interdum.</a>
        <div class="p-6">
          <a class="bg-green-111 rounded m-auto px-4 py-2 hover:text-gray-300 focus:text-gray-200 active:text-green-600
          font-medium text-white" href="#">About Us</a>
        </div>
      </div>
      <div class="container w-screen">
      <img class="sm:h-full w-full bg-blend-color-burn" src="Pictures/gambar-hero.png" alt="whatsapp" href="#home">
      </div>
</section>
<section class="flex justify-center mx-auto container relative w-screen bg-contain bg-white">
  <div class="text-center w-2/4">
    <a class="font-extrabold text-4xl">Fitur utama kami</a>
    <br></br>
      <a>Lorem ipsum dolor sit amet consectetur.
          Diam cursus lacus tincidunt fermentum pulvinar nunc sollicitudin scelerisque. Mauris ullamcorper nascetur suspendisse elit vulputate lorem dolor.
          Adipiscing orci et erat eu placerat commodo. Arcu in nec id nibh interdum.</a>
        </div>
</section>
<section class="flex m-auto container relative w-screen bg-contain bg-white">
  <div>
    <a>Quiz</a>
  </div>

  </section>
</main>
      @include('.footer')
      <main class="">
        @yield('container')
</main>
</body>
</html>