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
    <div class="swiper-container">
        <div class=" container h-fit sm:w-[1280px] sm:h-[960px] px-3 pt-[32px] flex flex-col space-y-[50px]">
            <div class="w-[50px] h-[50px]">
                <a href="#back">
                    <img src="pictures/back button.png" alt="">
                </a>
            </div>
            <!-- soal -->
            <div
                class="container flex-col sm:w-[1280px] sm:h-[426px] space-y-[10px] sm:space-x-[20px] flex sm:flex-row">
                <img class="rounded-[10px] h-fit w-[340px] sm:w-[400px] sm:h-[400px] sm:m-[10px]"
                    src="pictures/template.png" alt="asd">
                <h1 class="text-2xl flex sm:text-4xl sm:m-[10px] sm:w-full ">Lorem ipsum dolor sit amet pretium
                    consectetur
                    adipiscing elit.
                    Lorem consectetur adipiscing elit
                </h1>
            </div>
            <!-- button jawaban -->
            <div class="container sm:w-[1280px] sm:h-[320px] gap-3 m-auto flex flex-wrap sm:flex-row">
                <!-- opsi benar -->
                <button for="opsi-1"
                    class="flex focus:brightness-75 hover:scale-110 hover:brightness-75 bg-red-redFF6767 py-[20px] text-start shadow-boxjawaban sm:h-[300px] h-[150px] w-[150px] sm:w-[300px] rounded focus:text-black ml-2 text-sm font-medium text-gray-900">
                    <span class="text-2xl m-auto focus:brightness-50">Jawaban benar</span>
                    <input class="hidden" id="opsi-1" type="radio" value="10" name="opsi">
                    <br>
                </button>
                <!-- opsi salah -->
                <button for="opsi-2"
                    class="flex focus:brightness-75 hover:scale-110 hover:brightness-75 bg-red-redFF6767 py-[20px] text-start shadow-boxjawaban sm:h-[300px] h-[150px] w-[150px] sm:w-[300px] rounded focus:text-black ml-2 text-sm font-medium text-gray-900">
                    <span class="text-2xl m-auto focus:brightness-50">Jawaban salah</span>
                    <input class="hidden" id="opsi-2" type="radio" value="0" name="opsi">
                    <br>
                </button>
                <button for="opsi-3"
                    class="flex focus:brightness-75 hover:scale-110 hover:brightness-75 bg-red-redFF6767 py-[20px] text-start shadow-boxjawaban sm:h-[300px] h-[150px] w-[150px] sm:w-[300px] rounded focus:text-black ml-2 text-sm font-medium text-gray-900">
                    <span class="text-2xl m-auto focus:brightness-50">Jawaban salah</span>
                    <input class="hidden" id="opsi-3" type="radio" value="0" name="opsi">
                    <br>
                </button>
                <button for="opsi-4 " value="10" id="opsi-4" name="opsi"
                    class="flex focus:brightness-75 hover:scale-110 hover:brightness-75 bg-red-redFF6767 py-[20px] text-start shadow-boxjawaban sm:h-[300px] h-[150px] w-[150px] sm:w-[300px] rounded focus:text-black ml-2 text-sm font-medium text-gray-900">
                    <input class="hidden" type="radio">
                    <span class="text-2xl m-auto focus:brightness-50">Jawaban salah</span>
                    <br>
                </button>
            </div>
            <!-- next/prev button -->
            <div class="container justify-end w-[335px] sm:w-[1280px] sm:h-[104px] flex flex-row">
                <a class="hover:brightness-110 hover:scale-105 justify-center mx-[20px] w-[60px] h-[60px] sm:w-[80px] sm:h-[80px]"
                    href="#prev">
                    <img src="pictures/prev.png" alt="">
                </a>
                <a class="hover:brightness-110 hover:scale-105 justify-center w-[60px] h-[60px] sm:w-[80px] sm:h-[80px]"
                    href="#next">
                    <button class="submit-button" onclick="checkAnswers()">
                        <img src="pictures/next.png" alt="">
                    </button>
                </a>
            </div>
        </div>
        <!-- pilgan end -->
        <!-- dnd -->
        <div class="container h-fit sm:w-[1280px] sm:h-[960px] px-3 pt-[32px] flex flex-col space-y-[20px]">
            <div class="w-[50px] h-[50px]">
                <a href="#back">
                    <img src="pictures/back button.png" alt="">
                </a>
            </div>
            <div class="container flex-row w-full sm:h-[426px] space-y-[10px] sm:space-x-[20px] flex sm:flex-row">
                <!-- soal -->
                <div class="container bg-gray-300 p-10 shadow-card rounded-xl flex-col flex w-full h-fit gap-10">
                    <div class="text-lg flex sm:text-xl sm:m-[10px] w-full justify-between ">
                        <h1 class="text-2xl sm:text-4xl">Lorem ipsum dolor sit amet</h1>
                        <div id="drop1"
                            class="bg-white outline-2 m-[10px] flex border-black border-2 w-[200px] h-[40px]"
                            ondrop="drop(event)" ondragover="allowDrop(event)">
                        </div>
                    </div>
                    <div class="text-lg flex sm:text-xl sm:m-[10px] w-full justify-between ">
                        <h1 class="text-2xl sm:text-4xl">Lorem ipsum dolor sit amet</h1>
                        <div id="drop1"
                            class="bg-white outline-2 m-[10px] flex border-black border-2 w-[200px] h-[40px]"
                            ondrop="drop(event)" ondragover="allowDrop(event)">
                        </div>
                    </div>
                    <div class="text-lg flex sm:text-xl sm:m-[10px] w-full justify-between ">
                        <h1 class="text-2xl sm:text-4xl">Lorem ipsum dolor sit amet</h1>
                        <div id="drop1"
                            class="bg-white outline-2 m-[10px] flex border-black border-2 w-[200px] h-[40px]"
                            ondrop="drop(event)" ondragover="allowDrop(event)">
                        </div>
                    </div>
                </div>
            </div>
            <!-- area jawaban -->
            <div class="container justify-center  mx-auto sm:w-[400px] h-fit flex flex-wrap gap-5">

                <div id="drag1" ondrop="drop(event)" ondragover="allowDrop(event)" draggable="true"
                    ondragstart="drag(event)" id="drag1" class="bg-slate-200 w-fit h-fit px-4 py-1 shadow-card">
                    1
                </div>
                <div id="drag2" ondrop="drop(event)" ondragover="allowDrop(event)" draggable="true"
                    ondragstart="drag(event)" id="drag1" class="bg-slate-200 w-fit h-fit px-4 py-1 shadow-card">
                    2
                </div>
                <div id="drag3" ondrop="drop(event)" ondragover="allowDrop(event)" draggable="true"
                    ondragstart="drag(event)" id="drag1" class="bg-slate-200 w-fit h-fit px-4 py-1 shadow-card">
                    3
                </div>
                <div id="drag4" ondrop="drop(event)" ondragover="allowDrop(event)" draggable="true"
                    ondragstart="drag(event)" id="drag1" class="bg-slate-200 w-fit h-fit px-4 py-1 shadow-card">
                    4
                </div>
                <div id="drag5" ondrop="drop(event)" ondragover="allowDrop(event)" draggable="true"
                    ondragstart="drag(event)" id="drag1" class="bg-slate-200 w-fit h-fit px-4 py-1 shadow-card">
                    5
                </div>
                <div id="drag6" ondrop="drop(event)" ondragover="allowDrop(event)" draggable="true"
                    ondragstart="drag(event)" id="drag1" class="bg-slate-200 w-fit h-fit px-4 py-1 shadow-card">
                    6
                </div>
            </div>

            <!-- dnd 1 js -->
            <script>
            function allowDrop(ev) {
                ev.preventDefault();
            }

            function drag(ev) {
                ev.dataTransfer.setData("text", ev.target.id);
            }

            function drop(ev) {
                ev.preventDefault();
                var data = ev.dataTransfer.getData("text");
                ev.target.appendChild(document.getElementById(data));
            }

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
        <br>
        <!-- next/prev button -->
        <div class="container justify-end w-full sm:w-[1280px] sm:h-[104px] flex flex-col">
            <div class="flex flex-row justify-end rounded-md px-[120px] py-[20px]">
                <form id="yourFormId">
                    <button class="justify-end rounded-sm self-center flex flex-row shadow-card px-3 py-1"
                        id="otra">Reset</button>
                </form>
            </div>
            <div class="container justify-end self-end w-full sm:w-[1280px] sm:h-[104px] flex flex-row">
                <a class="hover:brightness-110 hover:scale-105 justify-center mx-[20px] w-[60px] h-[60px] sm:w-[80px] sm:h-[80px]"
                    href="#prev">
                    <img src="pictures/prev.png" alt="">
                </a>
                <a class="hover:brightness-110 hover:scale-105 justify-center w-[60px] h-[60px] sm:w-[80px] sm:h-[80px]"
                    href="#next">
                    <button class="submit-button" onclick="checkAnswers()">
                        <img src="pictures/next.png" alt="">
                    </button>
                </a>
            </div>
        </div>
        <script>
        var swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
        </script>

        <!-- dnd end -->
        <!-- essay -->
        <div class="container h-fit sm:w-[1280px] sm:h-[960px] px-3 pt-[32px] flex flex-col space-y-[20px]">
            <div class="w-[50px] h-[50px]">
                <a href="#back">
                    <img src="pictures/back button.png" alt="">
                </a>
            </div>
            <!-- soal -->
            <div
                class="container flex-col sm:w-[1280px] sm:h-[426px] space-y-[10px] sm:space-x-[20px] flex sm:flex-row">
                <img class="rounded-[10px] h-fit w-[340px] sm:w-[400px] sm:h-[400px] sm:m-[10px]"
                    src="pictures/template.png" alt="asd">
                <h1 class="text-2xl flex sm:text-4xl sm:m-[10px] sm:w-full ">Lorem ipsum dolor sit amet pretium
                    consectetur
                    adipiscing elit.
                    Lorem consectetur adipiscing elit
                </h1>
            </div>
            <!-- button jawaban -->
            <div class="container sm:w-[1280px] sm:h-[320px] flex flex-col space-y-[20px]">
                <textarea class="bg-gray-100 h-full w-full rounded-[10px] form-control block px-3 py-1.5 text-2xl font-normal text-gray-700
        bg-clip-padding border border-solid outline outline-gray-400 transition ease-in-outm-0
        focus:text-gray-700 focus:bg-white focus:outline-green-111 focus:outline-4" id="exampleFormControlTextarea1"
                    rows="4" placeholder="Masukkan Jawaban Disini">
    </textarea>
            </div>
            <!-- next/prev button -->
            <div class="container justify-end w-full sm:w-[1280px] sm:h-[104px] flex flex-row">
                <a class="hover:brightness-110 hover:scale-105 justify-center mx-[20px] w-[60px] h-[60px] sm:w-[80px] sm:h-[80px]"
                    href="#prev">
                    <img src="pictures/prev.png" alt="">
                </a>
                <a class="hover:brightness-110 hover:scale-105 justify-center w-[60px] h-[60px] sm:w-[80px] sm:h-[80px]"
                    href="#next">
                    <img src="pictures/next.png" alt="">
                </a>
            </div>
        </div>
    </div>
    <script>
    var swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    </script>
    <!-- essay end -->
</body>

</html>