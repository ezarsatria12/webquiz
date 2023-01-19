@extends('admin.partials.index')

@section('container')
<main>
    <section>
        <div class="container p-6 mx-auto flex flex-wrap sm:w-full justify-between  font-medium text-3xl">
            <p>Profile</p>
        </div>
    </section>
    <section>
        <div class="">
            <div>
                <h2>Nama</h2>
                <h2>{{ Auth::user()->name}}</h2>
            </div>
            <div class="">
                <h2>Email</h2>
                <h2>{{ Auth::user()->email}}</h2>
            </div>
        </div>
        <form action="/logout" method="POST">
            @csrf 
            <button class="bg-green-111 px-4 py-2 rounded font-inter font-medium text-white hover:shadow-lg">
                logout
            </button>
        </form>
    </section>
<!-- ====== Page selection -->
@endsection