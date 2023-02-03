<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/modul.css')}}">
</head>

<body>
    <div class="justify-center flex px-5 mx-auto my-[150px] w-full h-fit">
        <div class="bg-white space-y-0 flex flex-col shadow-md border border-gray-200
            rounded-lg mx-10 w-full h-fit sm:w-[491px] p-4 sm:p-6 lg:p-8">
            <h3 class="pb-[20px] sm:pb-[50px] font-medium text-center text-xl sm:text-4xl text-gray-900">Summary</h3>
            <!-- progress bar -->
            <div class="block">
                <progress class="progress-bar" id="p1" value="0" max="100"></progress>
            </div>
            <div class="flex flex-col pb-[5px] sm:pb-[10px]">
                <p id="demo" class="py-[5px] sm:py-[10px] text-lg  sm:text-2xl">Menghitung</p>
            </div>

            <style>
                .progress-bar { 
                    width: 427px;
                    max-width: calc(100% - 1px);
                    height: 30px;
                    border: 2px solid #6bb36b;
                    border-radius: 10px;
                    position: relative;
                    overflow: hidden;
                    background: #D9D9D9;
                }

                progress::-webkit-progress-bar {
                    background-color: #D9D9D9;
                    border-radius: 2px;
                }

                progress::-webkit-progress-value {
                    background-color: #7FB77E;
                    box-shadow: 1px 1px 1px 1px rgba(107, 179, 107, 1);
                    border-radius: 2px;
                }
            </style>
            <!-- correct -->

            <div class="flex flex-col py-[5px] sm:py-[10px]">
                <div class="flex flex-row py-[5px] sm:py-[10px]">
                    <div class="flex w-[40px] h-[40px] text-white text-2xl text-center">
                        <p id="correct"
                            class="bg-green-111 rounded-lg sm:rounded-xl m-auto px-2 sm:px-3 w-fit h-fit text-white text-xl sm:text-2xl text-center">
                        <p>
                    </div>
                    <p id="correcta" class="w-full my-auto ml-5 text-lg sm:text-2xl">
                    <p>
                </div>
                <!-- wrong -->
                <div class="flex flex-row py-[5px] sm:py-[10px]">
                    <div class="flex w-[40px] h-[40px] text-white text-2xl text-center">
                        <p id="wrong"
                            class="bg-red-redFF6767  rounded-lg sm:rounded-xl m-auto px-2 sm:px-3 w-fit h-fit text-white text-xl sm:text-2xl text-center">
                        <p>
                    </div>
                    <p id="wronga" class="w-full my-auto ml-5 text-lg sm:text-2xl">
                    <p>
                </div>
            </div>
            <!-- keterangan passed/failed -->
            <div id="result" value="100" class="flex flex-col text-xl sm:text-2xl text-center py-3 sm:py-5"></div>
            <!-- button -->
            <div class="flex flex-col space-y-3 sm:space-y-5 content-end py-0 sm:py-5">
                <div>
                    <form action="{{route('usersaveplay',$quiz)}}">
                    <button id="cobalagi" 
                        class="hidden w-full h-fit border rounded-xl hover:border-green-111 hover:shadow-md border-green-111 py-1 text-xl sm:text-2xl text-green-111">Coba
                        lagi</button>
                        </form>
                </div>
                <div>
                    <form action="{{route('quizguest.index')}}">
                    <button id="lanjut"
                        class="hidden w-full h-fit border hover:shadow-md rounded-xl bg-green-111 py-1 text-xl sm:text-2xl text-white">Kembali</button>
                    </form>
                </div>
            </div>
            <script>
                window.onload = function() {
                var pos = 0;
                var soal1 = {{$poin}};
                var result = pos + soal1; //point nilai soal
                //our box element
                var bar = document.getElementById('p1');
                var t = setInterval(move, 50);


                function move() {
                    var next = document.getElementById('lanjut')
                    var retry = document.getElementById('cobalagi')
                    // 100 = buat ngatur persen berhentinya max 100
                    if (pos >= result) {
                        clearInterval(t);
                        //benar salah
                        document.getElementById('demo').innerHTML = "Skor : " + result
                        document.getElementById('correct').innerHTML = {{$bener}}
                        document.getElementById('correcta').innerHTML = "Correct Answer"
                        document.getElementById('wrong').innerHTML = {{$salah}}
                        document.getElementById('wronga').innerHTML = "Wrong Answer"
                        if (result >= 50) {
                            document.getElementById('result').innerHTML = "Passed"
                            next.style.display = "block";
                        } else {
                            document.getElementById('result').innerHTML = "failed"
                            retry.style.display = "block";
                            next.style.display = "block";

                        }

                    } else {
                        pos += 1;
                        bar.value = pos;
                    }
                }
            };
            </script>
        </div>
    </div>
</body>

</html>