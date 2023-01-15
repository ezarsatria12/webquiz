<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body>
    @include('.nav')
<main>
    <section>
        <div class="container w-screen justify-between mx-20 font-medium text-3xl">
            <h1>Daftar Modul </h1>
            <img class="w-8 h-8 sm: bg-blend-color-burn" src="Pictures/plus.png" alt="whatsapp" href="#home">
        </div>
        
    </section>
<section>
<!-- ====== Cards Section Start -->
<section class=" mx-20 pt-20 pb-10 lg:pt-[120px] lg:pb-20">
  <div class="container mx-auto ">
    <div class="px-5 mx-4 flex flex-wrap  ">
      <div class="mx-auto px-5  rounded md:w-1/2 xl:w-1/3 ">
        <div class="p-5 mb-10 overflow-hidden rounded-lg shadow-2xl">
          <img
            src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-01.jpg"
            alt="image"
            class=" w-full"
          />
          <div class="text-start pt-5 px-3 sm: md: xl:">
            <h3>
              <a
                href="javascript:void(0)"
                class="text-dark hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]"
              >
                Judul Quiz
              </a>
            </h3>
            <p class="text-body-color mb-7 text-base leading-relaxed">
              Lorem ipsum dolor sit amet pretium consectetur adipiscing elit.
              Lorem consectetur adipiscing elit.
            </p>
            <a
              href="javascript:void(0)"
              class="text-body-color hover:border-primary hover:bg-primary inline-block rounded-full border border-[#E5E7EB] py-2 px-7 text-base font-medium transition hover:text-white"
            >
              View Details
            </a>
          </div>
        </div>
      </div>
      <div class="px-5  rounded w-full md:w-1/2 xl:w-1/3 ">
        <div class="p-5 mb-10 overflow-hidden rounded-lg shadow-2xl">
          <img
            src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-02.jpg"
            alt="image"
            class="w-full"
          />
         <div class="p-8 text-start sm:p-9 md:p-7 xl:p-9">
            <h3>
              <a
                href="javascript:void(0)"
                class="text-dark hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]"
              >
                Judul Quiz
              </a>
            </h3>
            <p class="text-body-color mb-7 text-base leading-relaxed">
              Lorem ipsum dolor sit amet pretium consectetur adipiscing elit.
              Lorem consectetur adipiscing elit.
            </p>
          </div>
        </div>
      </div>
      <div class="px-5  rounded w-full md:w-1/2 xl:w-1/3 ">
        <div class="p-5 mb-10 overflow-hidden rounded-lg shadow-2xl">
          <img
            src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-03.jpg"
            alt="image"
            class="w-full"
          />
          <div class="p-8 text-start sm:p-9 md:p-7 xl:p-9">
            <h3>
              <a
                href="javascript:void(0)"
                class="text-dark hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]"
              >
                Judul Quiz
              </a>
            </h3>
            <p class="text-body-color mb-7 text-base leading-relaxed">
              Lorem ipsum dolor sit amet pretium consectetur adipiscing elit.
              Lorem consectetur adipiscing elit.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== Cards Section End -->
</section>
</main>
      @include('.footer')
      <main class="">
        @yield('container')
</main>
</body>
</html>