<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="container sm:w-[1440px] h-[1024px] m-auto">
    <div class="container w-[1280px] h-[960px] pt-[32px] flex flex-col space-y-[20px]">
        <div class="w-[50px] h-[50px]">
            <a href="#back">
                <img src="pictures/back button.png" alt="">
                </a>
        </div>
        <!-- soal -->
        <div class="container w-[1280px] h-[426px] space-x-[20px] flex flex-row">
            <img class="h-[400px] w-[400px] m-[10px]" src="pictures/template.png" alt="asd">
            <h1 class="text-4xl m-[10px] w-full">Lorem ipsum dolor sit amet pretium consectetur adipiscing elit.
            Lorem consectetur adipiscing elit.Lorem ipsum dolor sit amet pretium consectetur adipiscing elit.
            Lorem consectetur adipiscing elit.
        </h1>
        </div>
        <!-- button jawaban -->
        <div class="container w-[1280px] h-[320px] m-auto flex flex-row">
            <a href="#A">
            <button class="bg-[#ED6A5E] hover:brightness-125 rounded-[10px] shadow-boxjawaban h-[300px] w-[300px] m-[10px]">
                A
            </button>
            </a>
            <a href="#B">
            <button class="bg-[#A5F1E9] hover:brightness-125 rounded-[10px] shadow-boxjawaban h-[300px] w-[300px] m-[10px]">
                B
            </button>
            </a>
            <a href="#C">
            <button class="bg-[#FFF6BF] hover:brightness-125 rounded-[10px] shadow-boxjawaban h-[300px] w-[300px] m-[10px]">
                C
            </button>
            </a>
            <a href="#D"><button class="bg-[#7FB77E] hover:brightness-125 rounded-[10px] shadow-boxjawaban h-[300px] w-[300px] m-[10px]">
                D
            </button>
            </a>
        </div>
        <!-- next/prev button -->
        <div class="container justify-end w-[1280px] h-[104px] flex flex-row">
            <a class="hover:brightness-110  justify-center mx-[20px] w-[80px] h-[80px]" href="#prev">
                <img src="pictures/prev.png" alt="">
                </a>
            <a class="hover:brightness-110 justify-center mr-[20px] w-[80px] h-[80px]" href="#next">
                <img src="pictures/next.png" alt="">
                </a>
        </div>
    </div>
</body>
</html>