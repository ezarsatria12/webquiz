<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="container sm:w-[1440px] sm:h-[1024px] m-auto">
    <!-- pilgan -->
    <div class="container h-fit sm:w-[1280px] sm:h-[960px] px-3 pt-[32px] flex flex-col space-y-[50px]">
        <div class="w-[50px] h-[50px]">
            <a href="#back">
                <img src="pictures/back button.png" alt="">
            </a>
        </div>
        <!-- soal -->
        <div class="container flex-col sm:w-[1280px] sm:h-[426px] space-y-[10px] sm:space-x-[20px] flex sm:flex-row">
            @if ($pilgans->media != null)
            @if(pathinfo($pilgans->media, PATHINFO_EXTENSION) == 'mp3'|| pathinfo($pilgans->media, PATHINFO_EXTENSION) == 'wav'|| pathinfo($pilgans->media, PATHINFO_EXTENSION) == 'ogg')
            <audio id="video" class="rounded-[10px] h-fit w-[340px] sm:w-[400px] sm:h-[400px] sm:m-[10px]" controls>
                <source src="{{ asset('storage/'.$pilgans->media) }}" type="audio/ogg">
            </audio>
            @elseif(pathinfo($pilgans->media, PATHINFO_EXTENSION) == 'mp4'|| pathinfo($pilgans->media, PATHINFO_EXTENSION) == 'mov'|| pathinfo($pilgans->media, PATHINFO_EXTENSION) == 'mpg')
            <video id="video" class="rounded-[10px] h-fit w-[340px] sm:w-[400px] sm:h-[400px] sm:m-[10px]" controls>
                <source id="video" src="{{asset('storage/'.$pilgans->media) }}" type="video/mp4">
                Your browser does not support HTML video.
            </video>
            @elseif(pathinfo($pilgans->media, PATHINFO_EXTENSION) == 'jpg'|| pathinfo($pilgans->media, PATHINFO_EXTENSION) == 'png' || pathinfo($pilgans->media, PATHINFO_EXTENSION) == 'jpeg')
            <img class="rounded-[10px] h-fit w-[340px] sm:w-[400px] sm:h-[400px] sm:m-[10px]"
                src="{{asset('storage/'.$pilgans->media) }}" alt="asd" type="image">
            @endif
            @endif
            <h1 class="text-2xl flex sm:text-4xl sm:m-[10px] sm:w-full ">{{$pilgans->question}}
            </h1>
        </div>
        <!-- button jawaban -->
        <!-- button jawaban -->
        <form action="{{ route('pilganvalid',[$quiz, $student,$pilgans->id])}}" method="POST">
        <div class="container sm:w-[1280px] sm:h-[320px] gap-3 m-auto flex flex-wrap sm:flex-row">
            @csrf
            <!-- opsi benar -->
            @foreach ($pilgans->mutichoisechoise as $opsi)
            <button for="opsi-1" name="pilgan" value="{{ $opsi->id }}"
                class="flex focus:brightness-75 hover:scale-110 hover:brightness-75 bg-red-redFF6767 py-[20px] text-start shadow-boxjawaban sm:h-[300px] h-[150px] w-[150px] sm:w-[300px] rounded focus:text-black ml-2 text-sm font-medium text-gray-900 ">
                <span class="text-2xl m-auto focus:brightness-50">{{$opsi->answer}}</span>
                <input class="hidden" id="opsi-1" type="radio" value="10"  name="pilgan" value="{{ $opsi->id }}">
                <br>
            </button>
            @endforeach
            
        </div>
        <!-- next/prev button -->
            <div class="container justify-end w-[335px] sm:w-[1280px] sm:h-[104px] flex flex-row">
                <a class="hover:brightness-110 hover:scale-105 justify-center mx-[20px] w-[60px] h-[60px] sm:w-[80px] sm:h-[80px]"
                    href="#prev">
                    <img src="{{ URL('pictures/prev.png') }}" alt="">
                </a>
                <a class="hover:brightness-110 hover:scale-105 justify-center w-[60px] h-[60px] sm:w-[80px] sm:h-[80px]"
                    href="#next">
                    <button class="submit-button" type="submit">
                        <img src="{{ URL('pictures/next.png') }}" alt="">
                    </button>
                </a>
            </div>
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