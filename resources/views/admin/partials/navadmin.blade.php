<nav class="top-0 w-screen sm:sticky">
    <div class="flex justify-between flex-row  bg-white lg:px-20 lg:py-auto sm:px-2 sm:py-3">
        <!--nav button-->
        <div class="sm:flex text-grey-fade m-auto ">
            <a class="mr-5  font-inter font-medium hover:text-green-111 focus:text-green-111 active:text-green-700" href="/home">Home</a>
            <a class="ml-5 font-inter font-medium hover:text-green-111 focus:text-green-111 active:text-green-700 {{ Request::is('profile') ? 'text-green-700' : ''}}" href="/profile">Profile</a>
            <a class="mx-5 font-inter font-medium hover:text-green-111 focus:text-green-111 active:text-green-700 {{ Request::is('quiz') ? 'text-green-700' : ''}}" href="/quis">Quiz</a>
            <a class="mx-5 font-inter font-medium hover:text-green-111 focus:text-green-111 active:text-green-700 {{ Request::is('module') ? 'text-green-700' : ''}}" href="/module">Modul</a>
        </div>
        <!--button sign in-->
        @if(Auth::check())
        <form action="/module" method="GET">
            @csrf 
            <button class=" px-4 py-2  font-inter font-medium text-black ">
                {{ Auth::user()->name}}
            </button>
        </form>
        @else
        <form action="/login">
            @csrf 
            <button class="bg-green-111 px-4 py-2 rounded font-inter font-medium text-white hover:shadow-lg">
                Sign In
            </button>
        </form>
        @endif
        </div>
    </div>
</nav>