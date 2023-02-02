@extends('admin.partials.index')

@section('container')
<section>
    <div class="mx-auto sm:px-20 px-10 flex flex-col gap-5">
        <div class="container flex flex-col mx-auto ">
            <h1 class="text-3xl">Bio</h1>
            <br>
            <div class="space-y-5 w-full sm:w-1/2 flex-col flex">
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