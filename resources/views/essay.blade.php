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
    <div class="container h-fit sm:w-[1280px] sm:h-[960px] px-3 pt-[32px] flex flex-col space-y-[20px]">
        <div class="w-[50px] h-[50px]">
            <a href="#back">
                <img src="pictures/back button.png" alt="">
                </a>
        </div>
        <!-- soal -->
        <div class="container flex-col sm:w-[1280px] sm:h-[426px] space-y-[10px] sm:space-x-[20px] flex sm:flex-row">
            <img class="rounded-[10px] h-fit w-[340px] sm:w-[400px] sm:h-[400px] sm:m-[10px]" src="pictures/template.png" alt="asd">
            <h1 class="text-2xl flex sm:text-4xl sm:m-[10px] sm:w-full ">Lorem ipsum dolor sit amet pretium consectetur adipiscing elit.
            Lorem consectetur adipiscing elit
        </h1>
        </div>
        <!-- button jawaban -->
        <div class="container sm:w-[1280px] sm:h-[320px] flex flex-col space-y-[20px]">
        <textarea class="bg-gray-100 h-full w-full rounded-[10px] form-control block px-3 py-1.5 text-2xl font-normal text-gray-700
        bg-clip-padding border border-solid outline outline-gray-400 transition ease-in-outm-0
        focus:text-gray-700 focus:bg-white focus:outline-green-111 focus:outline-4"
        id="exampleFormControlTextarea1"rows="4"placeholder="Masukkan Jawaban Disini">
    </textarea>
    </div>
        <!-- next/prev button -->
        <div class="container justify-end w-full sm:w-[1280px] sm:h-[104px] flex flex-row">
            <a class="hover:brightness-110 hover:scale-105 justify-center mx-[20px] w-[60px] h-[60px] sm:w-[80px] sm:h-[80px]" href="#prev">
                <img src="pictures/prev.png" alt="">
                </a>
            <a class="hover:brightness-110 hover:scale-105 justify-center w-[60px] h-[60px] sm:w-[80px] sm:h-[80px]" href="#next">
                <img src="pictures/next.png" alt="">
                </a>
        </div>
    </div>
</body>
</html>