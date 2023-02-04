<nav class="top-0">
    <!-- ini nav tanpa login -->
    <div class="px-8 py-6 flex flex-row justify-between bg-white ">
        <!--logo-->
        <a href="/home">
            <h3 class=" text-2xl lg:text-3xl font-medium block">SmartPantun</h3>
        </a>

        <!--nav button-->
        <div id="nav-content" class="hidden sm:flex text-xl gap-5 content-center text-grey-fade m-auto text-center">
            <a class="font-inter font-medium hover:text-green-111 focus:text-green-111 active:text-green-700"
                href="{{route('quizguest.index')}}">Quiz</a>
            <a class="font-inter font-medium hover:text-green-111 focus:text-green-111 active:text-green-700"
                href="/modul">Modul</a>
            <a class="font-inter font-medium hover:text-green-111 focus:text-green-111 active:text-green-700"
                href="/aboutus">About Us</a>
        </div>
        <!--button sign in-->

        @if(Auth::check())
        <div class="my-auto flex">
            <form action="/profile" class="flex m-auto">
                @csrf
                <button class="hidden sm:flex px-4 py-2 font-inter font-medium text-black ">
                    {{ Auth::user()->name}}
                </button>
            </form>
            @else
            <form action=" /login" class="my-auto">
                @csrf
                <button class="hidden sm:flex w-fit bg-green-111 hover:bg-white hover:text-green-111 px-4 py-2 rounded
            font-inter font-medium text-white hover:shadow-lg">
                    Sign In
                </button>
            </form>
        </div>
        @endif

        <!-- hamburger -->
        <img onclick="openNav()" src="pictures/hamburgerbutton.png" class="my-auto w-[32px] h-[32px] sm:hidden" alt="">
    </div>

    <div id="myNav" class="overlay" class="h-full w-0 fixed left-0 top-0 overflow-x-hidden z-1">
        <!-- hamburger nav menu -->
        <!-- Button to close the overlay navigation -->
        <div class="flex flex-col w-fit h-full">
            <div>
                <a href="# " class="absolute text-6xl flex self-end p-5 bg-white w-full" onclick="closeNav()">
                    <img src="pictures/back button.png" class="w-[32px] h-[32px] my-auto sm:hidden" alt="">
                    <h3 class=" text-3xl font-inter block">SmartPantun</h3>
                </a>
            </div>

            <!-- Overlay content -->

            <div class="text-grey-fade gap-5 h-full bg-white pt-10 text-4xl block relative flex-col mt-20 justify-start space-y-5"
                id="overlay-content">
                @if(Auth::check())
                <form action="/profile">
                    @csrf
                    <button class="mx-10 text-3xl py-4 font-inter font-medium text-black hover:text-green-111">
                        {{ Auth::user()->name}}
                    </button>
                </form>
                @else
                <form action="/login" class="my-auto">
                    @csrf
                    <button class="sm:hidden flex m-10 w-fit bg-green-111 hover:bg-white hover:text-green-111 px-4 py-2 rounded
            font-inter font-medium text-white hover:shadow-lg">
                        Sign In
                    </button>
                </form>
                @endif
                <a href="/home" class="self-start mx-10 hover:text-green-111 hover:px-5">Beranda</a>
                <a href="/aboutus" class="self-start mx-10 hover:text-green-111 hover:px-5">About Us</a>
                <a href="{{route('quizguest.index')}}" class="self-start mx-10 hover:text-green-111 hover:px-5">Quiz</a>
                <a href="/modul" class="self-start mx-10 hover:text-green-111 hover:px-5">Modul</a>

            </div>
        </div>
    </div>
    </div>


    <!-- Use any element to open/show the overlay navigation menu -->

    <script>
        /* Open */
    function openNav() {
        document.getElementById("myNav").style.height = "100%";
    }

    /* Close */
    function closeNav() {
        document.getElementById("myNav").style.height = "0%";
    }
    /* Open when someone clicks on the span element */
    function openNav() {
        document.getElementById("myNav").style.width = "80%";
    }

    /* Close when someone clicks on the "x" symbol inside the overlay */
    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
    </script>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        /* The Overlay (background) */
        .overlay {
            /* Height & width depends on how you want to reveal the overlay (see JS below) */
            height: 100%;
            width: 0;
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            background-color: rgba(0, 0, 0, 0.6);
            /* Black w/opacity */
            overflow-x: hidden;
            /* Disable horizontal scroll */
            transition: 0.5s;
            /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
        }
    </style>

</nav>