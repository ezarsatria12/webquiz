@extends('admin.partials.index')

@section('container')
    <section>
        <div class="container flex flex-col mt-[48px] gap-[48px]  m-auto px-3 sm:px-0 sm:w-[1280px] h-full">
            <div class="container flex flex-col">
                <h1 class="text-4xl">Bio</h1>
                <br>
                <div class="space-y-5 w-[75px] sm:w-1/2 flex-col flex">
                    <div class="flex flex-row w-full gap-5 justify-between">
                        <p>Nama
                        <p>:</p>
                        <p class="w-full">
                            {{ Auth::user()->name}}
                        </p>
                    </div>
                    <div class="flex flex-row w-full gap-5 justify-between">
                        <p>Email
                        <p>:</p>
                        <p class="w-full">
                            {{ Auth::user()->email}}
                        </p>
                    </div>
                </div>
            </div>
            <form action="/logout" method="POST">
                @csrf
                <button class="bg-green-111 px-4 py-2 rounded font-inter font-medium text-white hover:shadow-lg">
                    logout
                </button>
            </form>
        </div>
    </section>
@endsection
