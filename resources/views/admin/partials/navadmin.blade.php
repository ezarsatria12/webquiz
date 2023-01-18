<nav class="top-0 w-screen sm:sticky">
    <div class="flex justify-between flex-row  bg-white lg:px-20 lg:py-auto sm:px-2 sm:py-3">
        <!--nav button-->
        <div class="sm:flex text-grey-fade m-auto ">
            <a class="mr-5  font-inter font-medium hover:text-green-111 focus:text-green-111 active:text-green-700" href="#about us">Home</a>
            <a class="ml-5 font-inter font-medium hover:text-green-111 focus:text-green-111 active:text-green-700" href="/coba">Profile</a>
            <a class="mx-5 font-inter font-medium hover:text-green-111 focus:text-green-111 active:text-green-700" href="/quiz">Quiz</a>
            <a class="mx-5 font-inter font-medium hover:text-green-111 focus:text-green-111 active:text-green-700" href="/modul">Modul</a>
        </div>
        <!--button sign in-->
        @if(Auth::check())
        <form action="/module" method="GET">
            @csrf 
            <button class="bg-green-111 px-4 py-2 rounded font-inter font-medium text-white hover:shadow-lg">
                hello
            </button>
        </form>
        <form action="/logout" method="POST">
            @csrf 
            <button class="bg-green-111 px-4 py-2 rounded font-inter font-medium text-white hover:shadow-lg">
                logout
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