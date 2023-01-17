<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Essay</title>
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
        <div class="container m-[10px] w-[1280px] h-[320px] flex flex-col space-y-[20px]">
    <textarea class="bg-gray-100 h-full w-full rounded-[10px] form-control block px-3 py-1.5 text-2xl font-normal text-gray-700
        bg-clip-padding border border-solid outline outline-gray-400 transition ease-in-outm-0
        focus:text-gray-700 focus:bg-white focus:outline-green-111 focus:outline-4"
        id="exampleFormControlTextarea1"rows="3"placeholder="Masukkan Jawaban Disini">
    </textarea>
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