@extends('partials.index')

@section('container')
<section>
    <div class="container flex flex-col mt-[48px] gap-[48px]  m-auto px-3 sm:px-0 sm:w-[1280px] h-full">
        <div class="container gap-5 justify-start flex mx-auto sm:w-[1280px] h-fit flex-row sm:gap-10">
            <a href="#" class="hover:text-green-111 focus:text-green-111">
                Account
            </a>
            <a href="#" class="hover:text-green-111 focus:text-green-111">
                Quiz
            </a>
            <a href="#" class="hover:text-green-111 focus:text-green-111">
                Modul
            </a>
    </div>
    <div class="container flex flex-col">
        <h1 class="text-4xl">Bio</h1>
        <br>
        <div class="space-y-5 w-[75px] sm:w-[100px]">
        <div class="flex flex-row justify-between">
            <p>Nama<p>:</p><p><!-- Nama --></p>
            </div>
        <div class="flex flex-row justify-between">
            <p>Mapel<p>:</p><p><!-- mapel --></p>
            </div>
        <div class="flex flex-row justify-between">
            <p>Email<p>:</p><p><!-- email --></p>
            </div>
        </div>
    </div>
</div>
</section>
@endsection