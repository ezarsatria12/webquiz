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
    <div class="container h-fit sm:w-[1280px] sm:h-[960px] px-3 pt-[32px] flex flex-col space-y-[50px]">
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
        <div class="container sm:w-[1280px] sm:h-[320px] gap-3 m-auto flex flex-wrap sm:flex-row">
            <!-- opsi benar -->
            <label for="opsi-1" class="focus-within:brightness-50 hover:scale-110 hover:brightness-75 bg-red-redFF6767 py-[20px] text-start shadow-boxjawaban sm:h-[300px] h-[150px] w-[150px] sm:w-[300px] flex rounded focus:text-black ml-2 text-sm font-medium text-gray-900">
                <input class="" id="opsi-1" type="radio" value="10" name="opsi" class="focus-within:brightness-50 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                <span class="text-2xl m-auto">Jawaban Betul</span>
            </label>
            <!-- opsi salah -->
            <label for="opsi-2" class="flex focus-within:brightness-50 hover:scale-110 hover:brightness-75 bg-red-redFF6767 py-[20px] text-start shadow-boxjawaban sm:h-[300px] h-[150px] w-[150px] sm:w-[300px] rounded focus:text-black ml-2 text-sm font-medium text-gray-900">
                <input class="" id="opsi-2" type="radio" value="0" name="opsi" class="mx-auto w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                <br>
                <span class="text-2xl m-auto focus:brightness-50">Jawaban salah</span>
            </label>
            <label for="opsi-3" class="flex focus-within:brightness-50 hover:scale-110 hover:brightness-75 bg-red-redFF6767 py-[20px] text-start shadow-boxjawaban sm:h-[300px] h-[150px] w-[150px] sm:w-[300px] rounded focus:text-black ml-2 text-sm font-medium text-gray-900">
                <input class="" id="opsi-3" type="radio" value="0" name="opsi" class="mx-auto w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                <br>
                <span class="text-2xl m-auto focus:brightness-50">Jawaban salah</span>
            </label>
            <label for="opsi-4" class="flex focus-within:brightness-50 hover:scale-110 hover:brightness-75 bg-red-redFF6767 py-[20px] text-start shadow-boxjawaban sm:h-[300px] h-[150px] w-[150px] sm:w-[300px] rounded focus:text-black ml-2 text-sm font-medium text-gray-900">
                <input class="" id="opsi-4" type="radio" value="0" name="opsi" class="mx-auto w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                <br>
                <span class="text-2xl m-auto focus:brightness-50">Jawaban salah</span>
            </label>
            </div>
        <!-- next/prev button -->
        <div class="container justify-end w-[335px] sm:w-[1280px] sm:h-[104px] flex flex-row">
            <a class="hover:brightness-110 hover:scale-105 justify-center mx-[20px] w-[60px] h-[60px] sm:w-[80px] sm:h-[80px]" href="#prev">
                <img src="pictures/prev.png" alt="">
                </a>
            <a class="hover:brightness-110 hover:scale-105 justify-center w-[60px] h-[60px] sm:w-[80px] sm:h-[80px]" href="#next">
                <button class="submit-button" onclick="checkAnswers()">
                <img src="pictures/next.png" alt="">
                </button>
                </a>
        </div>
        <script>
    function checkAnswers() {
        let score = 0;
        const answers = document.getElementsByTagName("input");
        for (let i = 0; i < answers.length; i++) {
            if (answers[i].checked) {
            score += parseInt(answers[i].value);
            }
        }
        alert("Your score is: " + score);
        }
</script>
    </div>
</body>
</html>