<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="container sm:w-full sm:h-[1024px] m-auto">
    <div class="container h-fit w-full sm:h-[960px] px-3 pt-[32px] flex flex-col space-y-[10px]">
        <div class="w-[50px] h-[50px]">
            <a href="#back">
                <img src="pictures/back button.png" alt="">
            </a>
        </div>
        <!-- soal -->
        <div class="container flex-col sm:w-[1280px] space-y-[10px] sm:space-x-[20px] flex sm:flex-row">
            <h1 class="text-2xl flex sm:text-4xl sm:m-[10px] sm:w-full ">Lorem ipsum dolorbcx sit amet pretium
                consectetur adipiscing elit.
                Lorem consectetur adipiscing elit
            </h1>
        </div>
        <!-- button jawaban -->
        <div class="flex flex-row sm:flex-wrap space-x-3 sm:space-x-0">
            <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"
                class="container sm:w-[1280px] w-[150px] h-fit sm:h-[320px] flex flex-col sm:flex-row">
                <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)" draggable="true"
                    ondragstart="drag(event)" id="drag1" class="bg-[#ED6A5E] hover:scale-105 hover:brightness-125 rounded-[10px] shadow-boxjawaban w-[150px] h-[150px] sm:h-[300px] 
            sm:w-[300px] m-[10px]">
                    A
                </div>
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
                </script>
                <a href="#B">
                    <button
                        class="bg-[#A5F1E9] hover:scale-105 hover:brightness-125 rounded-[10px] shadow-boxjawaban w-[150px] h-[150px] sm:h-[300px] sm:w-[300px] m-[10px]">
                        B
                    </button>
                </a>
                <a href="#C">
                    <button
                        class="bg-[#FFF6BF] hover:scale-105 hover:brightness-125 rounded-[10px] shadow-boxjawaban w-[150px] h-[150px] sm:h-[300px] sm:w-[300px] m-[10px]">
                        C
                    </button>
                </a>
                <a href="#D">
                    <button
                        class="bg-[#7FB77E] hover:scale-105 hover:brightness-125 rounded-[10px] shadow-boxjawaban w-[150px] h-[150px] sm:h-[300px] sm:w-[300px] m-[10px]">
                        D
                    </button>
                </a>
            </div>
            <!-- drop -->
            <div class="container sm:w-[1280px] w-[150px] h-fit sm:h-[320px] flex flex-col sm:flex-row">
                <a href="#A">
                    <button
                        class="bg-[#ED6A5E] hover:scale-105 hover:brightness-125 rounded-[10px] shadow-boxjawaban w-[150px] h-[150px] sm:h-[300px] sm:w-[300px] m-[10px]">
                        A
                    </button>
                </a>
                <a href="#B">
                    <button
                        class="bg-[#A5F1E9] hover:scale-105 hover:brightness-125 rounded-[10px] shadow-boxjawaban w-[150px] h-[150px] sm:h-[300px] sm:w-[300px] m-[10px]">
                        B
                    </button>
                </a>
                <a href="#C">
                    <button
                        class="bg-[#FFF6BF] hover:scale-105 hover:brightness-125 rounded-[10px] shadow-boxjawaban w-[150px] h-[150px] sm:h-[300px] sm:w-[300px] m-[10px]">
                        C
                    </button>
                </a>
                <a href="#D">
                    <button
                        class="bg-[#7FB77E] hover:scale-105 hover:brightness-125 rounded-[10px] shadow-boxjawaban w-[150px] h-[150px] sm:h-[300px] sm:w-[300px] m-[10px]">
                        D
                    </button>
                </a>
            </div>
        </div>
        <!-- next/prev button -->
        <div class="container justify-end w-[325px] sm:w-[1280px] sm:h-[104px] flex flex-row">
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
</body>

</html>