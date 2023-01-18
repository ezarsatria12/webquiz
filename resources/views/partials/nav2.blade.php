<nav class="top-0 w-screen sm:sticky">
    <div class="px-8 py-6 flex flex-row justify-between bg-white px10 lg:px-20 lg:py-auto">
        <!--logo-->
        <a href="/home">
        <h3 class=" text-2xl lg:text-3xl font-medium ">LOGO</h3>
        </a>
        <!--nav button-->
        <div id="nav-content"class="hidden lg:flex  content-center text-grey-fade m-auto text-center">
            <a class="mr-5  font-inter font-medium hover:text-green-111 focus:text-green-111 active:text-green-700" href="#about us">About Us</a>
            <a class="mx-5 font-inter font-medium hover:text-green-111 focus:text-green-111 active:text-green-700" href="/quiz">Quiz</a>
            <a class="mx-5 font-inter font-medium hover:text-green-111 focus:text-green-111 active:text-green-700" href="/modul">Modul</a>
            <a class="ml-5 font-inter font-medium hover:text-green-111 focus:text-green-111 active:text-green-700" href="/coba">Help</a>
            </div>
        <!--button sign in-->
        @if(Auth::check())
        <form action="/module">
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
            <button class="hidden lg:flex bg-green-111 px-4 py-2 rounded font-inter font-medium text-white hover:shadow-lg">
                Sign In
            </button>
        </form>
        @endif
        <div id="nav-toggle" class="w-[32px] h-[32px] my-auto lg:hidden">
                <a href="">
                    <img src="pictures/hamburgerbutton.png" alt="menu">
                    </a>
            </div>
            <script>
            //Javascript to toggle the menu
            document.getElementById('nav-toggle').onclick = function(){
                document.getElementById("nav-content").classList.toggle("hidden");
            }
        </script>
        </div>
    </div>
</nav>