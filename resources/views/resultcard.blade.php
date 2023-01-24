<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/modul.css')}}">
</head>
<body>
<div class="justify-center flex m-auto my-[150px] w-full h-fit">
	<div class="bg-white space-y-5 flex flex-col shadow-md border border-gray-200 rounded-lg mx-10 w-full h-fit sm:w-[491px] p-4 sm:p-6 lg:p-8">
			<h3 class="pb-[20px] sm:pb-[50px] font-medium text-center text-xl sm:text-4xl text-gray-900">Summary</h3>
        <!-- progress bar -->
        <div>
            <progress class="w-full rounded-lg " id="p1" value="0" max="100"></progress>
            <div class="flex flex-col py-[5px] sm:py-[10px]">
                <p id="demo" class="py-[5px] sm:py-[10px] text-lg  sm:text-2xl">Menghitung</p>
                </div>
                <!-- correct -->
                
    <div class="flex flex-col py-[5px] sm:py-[10px]">
        <div class="flex flex-row py-[5px] sm:py-[10px]">
            <div class="flex w-[40px] h-[40px] text-white text-2xl text-center">
                <p id="correct" class="bg-green-111 rounded-lg sm:rounded-xl m-auto px-2 sm:px-3 w-fit h-fit text-white text-xl sm:text-2xl text-center"><p>
                </div>
                <p id="correcta" class="w-full my-auto ml-5 text-lg sm:text-2xl"><p>
            </div>
            <!-- wrong -->
                <div class="flex flex-row py-[5px] sm:py-[10px]">
                    <div class="flex w-[40px] h-[40px] text-white text-2xl text-center">
                        <p id="wrong" class="bg-red-redFF6767  rounded-lg sm:rounded-xl m-auto px-2 sm:px-3 w-fit h-fit text-white text-xl sm:text-2xl text-center"><p>
                    </div>
                    <p id="wronga" class="w-full my-auto ml-5 text-lg sm:text-2xl"><p>
                </div>
            </div>
            <!-- keterangan passed/failed -->
        <div id="result" value="100" class="flex flex-col space-y-5 text-xl sm:text-2xl text-center py-5"></div>
            <!-- button -->
        <div class="flex flex-col space-y-5 content-end py-5">
            <div>
                <button id="cobalagi" class="w-full h-fit border rounded-xl hover:border-green-111 hover:shadow-md border-green-111 text-2xl text-green-111"></button>
            </div>
            <div>
                <button id="lanjut" class="w-full h-fit border hover:shadow-md rounded-xl bg-green-111 text-2xl text-white"></button>
            </div>
        </div>
    </div>
</div>
        <script>
            window.onload = function() {
                var pos = 0;
                var soal1 = 20;
                var soal2 = 10
                var result = pos + soal1 + soal2; //point nilai soal
                //our box element
                var bar = document.getElementById('p1');
                var t = setInterval(move, 50);
                function move() {
                    // 100 = buat ngatur persen berhentinya max 100
                    if(pos >= result) {
                        clearInterval(t);
                        //benar salah
                        document.getElementById('demo').innerHTML = "Skor :"
                        document.getElementById('correct').innerHTML = "5"
                        document.getElementById('correcta').innerHTML = "Correct Answer"
                        document.getElementById('wrong').innerHTML = "5"
                        document.getElementById('wronga').innerHTML = "Wrong Answer"
                        if(result >= 50) {
                        document.getElementById('result').innerHTML = "Passed"
                        document.getElementById('lanjut').innerHTML = "Kembali"
                        }
                        else {
                        document.getElementById('result').innerHTML = "failed"
                        document.getElementById('cobalagi').innerHTML = "Try again"
                        document.getElementById('lanjut').innerHTML = "Kembali"
                    }

                    }
                    else {
                        pos += 1;
                        bar.value= pos;
                    }
                }
            };
        </script>
        <style>
            #progress-bar{
                transition: width 0.2s ease-out;
                border-radius: 7px;
            }
            .progress::-webkit-progress-bar {
            background-color: yellow;
            border-radius: 7px;
            }
        </style>
	</div>
</div>
</body>
</html>
