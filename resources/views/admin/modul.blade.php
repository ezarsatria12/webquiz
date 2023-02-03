@extends('admin.partials.index')

@section('container')
<main>
    <section>
        <div class="container p-6 mx-auto flex flex-wrap sm:w-full justify-between  font-medium text-3xl">
            <p>Daftar Modul</p>
            <div>
                <a href="/module/create"><img class="w-8 h-8 sm:bg-blend-color-burn hover:ring-1 hover:ring-green-111"
                        src="Pictures/plus.png" alt="whatsapp"></a>
            </div>
        </div>
    </section>
    <section>
        <!-- ====== Cards Section Start -->
        <section class=" pt-20 pb-10 lg:pt-[120px] lg:pb-20">
            <div class="container mx-auto ">
                <div class="h-fit px-1 mx-auto flex flex-wrap  ">
                    <div class="mx-auto my-auto px-5  rounded md:w-1/2 xl:w-1/3 ">
                        <!-- ====== Cards 1 -->
                        @foreach ($moduls as $modul)
                        @csrf
                        <div class="p-5 mb-10 overflow-hidden rounded-3xl shadow-2xl">
                            <img src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-01.jpg"
                                alt="image" class="rounded w-full" />
                            <div class="text-start pt-5 px-3 sm: md: xl:">
                                <h3>
                                    <a href="javascript:void(0)"
                                        class="text-dark hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]">
                                        {{ $modul->moduletitle }}
                                    </a>
                                </h3>
                                <p class="h-full text-body-color mb-7 text-base leading-relaxed">
                                    {{ $modul->moduledesc }}
                                </p>
                                <a href="javascript:void(0)" class="my-1 w-full h-fit text-center hover:border-green-111 inline-block rounded-full border-2 border-[#E5E7EB] py-2 px-7
              text-base font-medium transition hover:text-green-111">
                                    Edit
                                </a>
                                <a href="/setting" class="my-1 w-full h-fit bg-red-redFF6767 text-center hover:border-red-500 inline-block rounded-full border-2 border-[#E5E7EB] py-2 px-7
              text-base font-medium transition hover:text-white">
                                    Delete
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== Cards Section End -->
        <!-- ====== Page selection -->
        <section>
            <div>
                <div class="pb-10 flex m-auto flex-row space-x-2 justify-center" href="#home">
                    <a href="#"><img class="h-6 w-6 hover:ring-1 hover:ring-green-111"
                            src="Pictures/arrow-left-line.png" alt="whatsapp"></a>
                    <a class="hover:underline focus:underline" href="#">1</a>
                    <a class="hover:underline focus:underline" href="#">2</a>
                    <a class="hover:underline focus:underline" href="#">3</a>
                    <a>...</a>
                    <a href="#"><img class="h-6 w-6 hover:ring-1 hover:ring-green-111"
                            src="Pictures/arrow-right-line.png" alt="whatsapp"></a>
                </div>
            </div>
        </section>
        <!-- ====== Page selection -->
    </section>
</main>
@endsection