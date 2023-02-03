<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="container bg-white sm:bg-white sm:w-[1440px] sm:h-[1024px] m-auto">
    <div class="my-auto self-center text-2xl text-center sm:hidden block">
       <p class="m-auto text-white text-center pt-72 pb-5">Please rotate your phone</p>
    <img src="{{ URL('pictures/rotate.gif') }}" class="m-auto w-[200px] h-[200px]" alt=""></div>
    <!-- pilgan -->
    <div class="hidden sm:block container h-fit sm:w-[1280px] sm:h-[960px] px-3 pt-[32px] flex-col space-y-[50px]">
        <div class="w-[50px] h-[50px]">
            <a href="#back">
                <img src="pictures/back button.png" alt="">
            </a>
        </div>
        <!-- soal -->
        <div class="container flex-col sm:w-[1280px] sm:h-[426px] space-y-[10px] sm:space-x-[20px] flex sm:flex-row">
            @if ($pilgans->media != null)
            @if(pathinfo($pilgans->media, PATHINFO_EXTENSION) == 'mp3'|| pathinfo($pilgans->media, PATHINFO_EXTENSION)
            == 'wav'|| pathinfo($pilgans->media, PATHINFO_EXTENSION) == 'ogg')
            <audio id="video" class="rounded-[10px] h-fit w-[340px] sm:w-[400px] sm:h-[400px] sm:m-[10px]" controls>
                <source src="{{ asset('storage/'.$pilgans->media) }}" type="audio/ogg">
            </audio>
            @elseif(pathinfo($pilgans->media, PATHINFO_EXTENSION) == 'mp4'|| pathinfo($pilgans->media,
            PATHINFO_EXTENSION) == 'mov'|| pathinfo($pilgans->media, PATHINFO_EXTENSION) == 'mpg')
            <video id="video" class="rounded-[10px] h-fit w-[340px] sm:w-[400px] sm:h-[400px] sm:m-[10px]" controls>
                <source id="video" src="{{asset('storage/'.$pilgans->media) }}" type="video/mp4">
                Your browser does not support HTML video.
            </video>
            @elseif(pathinfo($pilgans->media, PATHINFO_EXTENSION) == 'jpg'|| pathinfo($pilgans->media,
            PATHINFO_EXTENSION) == 'png' || pathinfo($pilgans->media, PATHINFO_EXTENSION) == 'jpeg')
            <img class="rounded-[10px] h-fit w-[340px] sm:w-[400px] sm:h-[400px] sm:m-[10px]"
                src="{{asset('storage/'.$pilgans->media) }}" alt="asd" type="image">
            @endif
            @endif
            <h1 class="container bg-gray-300 p-5 rounded-xl text-2xl flex sm:text-4xl h-[400px] sm:m-[10px] sm:w-full ">{{$pilgans->question}}
            </h1>
        </div>
        <!-- button jawaban -->
        <!-- button jawaban -->
        <form action="{{ route('pilganvalid',[$quiz, $student,$pilgans->id])}}" method="POST">
            <div class="container sm:w-[1280px] sm:h-[320px] gap-3 m-auto flex flex-wrap sm:flex-row">
                @csrf
                <!-- opsi benar -->
                @foreach ($pilgans->mutichoisechoise as $opsi)
                <button id="box{{ $opsi->id }}" onload="getRandomColor()" for="opsi-1" name="pilgan" value="{{ $opsi->id }}"
                    class="flex focus:brightness-75 hover:scale-110 hover:brightness-75 py-[20px] text-start shadow-boxjawaban
                    sm:h-[300px] h-[150px] w-[150px] sm:w-[300px] rounded focus:text-black ml-2 text-sm font-medium text-white ">
                    <span class="text-2xl m-auto focus:brightness-50">{{$opsi->answer}}</span>
                    <input class="hidden" id="opsi-1" type="radio" value="10" name="pilgan" value="{{ $opsi->id }}">
                    <br>
                </button>
                <script>
                    function getRandomColor() {
                        var letters = "0123456789ABCDEF";
                        var color = "#";
                        for (var i = 0; i < 6; i++) {
                        color += letters[Math.floor(Math.random() * 16)];
                        }
                        return color;
                    }

                    var container = document.getElementById("box"+{{ $opsi->id }});
                    container.style.backgroundColor = getRandomColor();
                </script>
                @endforeach

            </div>
            <!-- next/prev button -->
        </form>
        @if(session('success'))
        <script>
        alert("{{ session('success') }}");
        window.location.href = "/next-question";
        </script>
        @endif
    </div>

</body>

</html>