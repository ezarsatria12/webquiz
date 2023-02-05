    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        @vite('resources/css/app.css')
    </head>

    <body class="container bg-black sm:bg-gray-800 sm:w-full sm:h-full m-auto sm:gap-10">
        <div class="my-auto self-center text-2xl text-center sm:hidden block">
    <<<<<<< Updated upstream
        <p class="m-auto text-white text-center pt-72 pb-5">Please rotate your phone</p>
        <img src="{{ URL('pictures/rotate.gif') }}" class="m-auto w-[200px] h-[200px]" alt=""></div>
        @if(pathinfo($modules->media, PATHINFO_EXTENSION) == 'mp3')
        <audio controls><source src="{{ asset('storage/'.$modules->media) }}" type="audio/ogg"></audio>
        @elseif(pathinfo($modules->media, PATHINFO_EXTENSION) == 'mp4')
        <div class="hidden sm:block w-full mx-auto bg-gray-400 px-14 my-20 flex-col gap-5">
            <div class="  w-[50px] h-[50px] mt-[20px] hover:brightness-90">
                <a href="/modul">
                    <img src="{{ URL('pictures/back button.png') }}" alt="">
                </a>
    =======
            <p class="m-auto text-white text-center pt-72 pb-5">Please rotate your phone</p>
            <img src="{{ URL('pictures/rotate.gif') }}" class="m-auto w-[200px] h-[200px]" alt="">
        </div>
        <br>
        <!-- back -->
        <a href="/modul" class="">
            <img src="{{ URL('pictures/back button.png') }}" class="w-[100px] h-[100px]" alt="">
        </a>

        @if (pathinfo($modules->media, PATHINFO_EXTENSION) == 'mp3' ||
                pathinfo($modules->media, PATHINFO_EXTENSION) == 'wav' ||
                pathinfo($modules->media, PATHINFO_EXTENSION) == 'ogg')
            <audio id="video" class="rounded-[10px] h-fit w-[340px] sm:w-[400px] sm:h-[400px] sm:m-[10px]" controls>
                <source src="{{ asset('storage/' . $modules->media) }}" type="audio/ogg">
            </audio>
        @elseif(pathinfo($modules->media, PATHINFO_EXTENSION) == 'mp4' ||
                pathinfo($modules->media, PATHINFO_EXTENSION) == 'mov' ||
                pathinfo($modules->media, PATHINFO_EXTENSION) == 'mpg')
            <div class="hidden sm:block w-full mx-auto bg-gray-400 px-14 my-20 flex-col gap-5">
                <div class="  w-[50px] h-[50px] mt-[20px] hover:brightness-90">
                    <a href="/modul">
                        <img src="{{ URL('pictures/back button.png') }}" alt="">
                    </a>
                </div>
                <div class="w-full bg-black">
                    <video id="video" class="w-full" controls>
                        <source id="video" src="{{ asset('storage/' . $modules->media) }}" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                </div>
                <div class="flex flex-row justify-between w-full h-fit gap-5">
                    <div class="flex flex-row my-auto gap-5">
                        <button onclick="playPause()" class="flex">
                            <img class="w-[50px] h-[50px] hover:brightness-90" id="play"
                                src="{{ URL('pictures/play.png') }}" alt="">
                        </button>
                        <!-- video slider -->
                        <input class="hidden" type="range" id="slider" min="0" max="100" value="0"
                            step="1" oninput="Setvideo(this.value)" onchange="Setvideo(this.value)">
                        <!-- duration -->
                        <div class="text-xl my-auto">
                            <span id="time-elapsed"></span>
                        </div>
                    </div>
                    <div class="flex flex-row my-auto gap-5">
                        <button onclick="enableMute()" type="button" class="flex flex-row gap-5">
                            <img class="w-[50px] h-[50px] hover:brightness-90" id="sound"
                                src="{{ URL('pictures/soundon.png') }}" alt="">
                        </button>
                        <input class="my-auto" id="vol-control" type="range" min="0" max="100" step="1"
                            oninput="SetVolume(this.value)" onchange="SetVolume(this.value)"></input>
                        <button onclick="openFullscreen();">
                            <img class="w-[50px] h-[50px] hover:brightness-90" id="play"
                                src="{{ URL('pictures/fullscreen.png') }}" alt="">
                        </button>
                    </div>
                </div>
    >>>>>>> Stashed changes
            </div>
            <div class="w-full bg-black">
                <video id="video" class="w-full" controls>
                    <source id="video" src="{{asset('storage/'. $modules->media) }}" type="video/mp4">
                    Your browser does not support HTML video.
                </video>
            </div>
            <div class="flex flex-row justify-between w-full h-fit gap-5">
                <div class="flex flex-row my-auto gap-5">
                    <button onclick="playPause()" class="flex">
                    <img class="w-[50px] h-[50px] hover:brightness-90" id="play" src="{{ URL('pictures/play.png') }}" alt="">
                </button>
                <!-- video slider -->
                <input class="hidden" type="range" id="slider" min="0" max="100" value="0" step="1" oninput="Setvideo(this.value)"
                    onchange="Setvideo(this.value)">
                <!-- duration -->
                <div class="text-xl my-auto">
                    <span id="time-elapsed"></span>
                </div>
                </div>
            <div class="flex flex-row my-auto gap-5">
            <button onclick="enableMute()" type="button" class="flex flex-row gap-5">
                    <img class="w-[50px] h-[50px] hover:brightness-90" id="sound" src="{{ URL('pictures/soundon.png') }}" alt="">
                </button>
                <input class="my-auto" id="vol-control" type="range" min="0" max="100" step="1" oninput="SetVolume(this.value)"
                    onchange="SetVolume(this.value)"></input>
                <button onclick="openFullscreen();">
                    <img class="w-[50px] h-[50px] hover:brightness-90" id="play" src="{{ URL('pictures/fullscreen.png') }}" alt="">
                </button></div>
            </div>
        </div>
        <script>
            var video = document.getElementById("video");
            var slider = document.getElementById("slider");
            var slidervolume = document.getElementById("vol-control");
            var timeElapsed = document.getElementById("time-elapsed");
            var timeDuration = document.getElementById("time-duration");
        
            video.ontimeupdate = function() {
                var minutesElapsed = Math.floor(video.currentTime / 60);
                var secondsElapsed = Math.floor(video.currentTime - minutesElapsed * 60);
                timeElapsed.innerHTML = minutesElapsed + ":" + secondsElapsed.toString().padStart(2, '0');
            };
            slider.addEventListener("input", function() {
                video.currentTime = (video.duration * slider.value) / 100;
            });
        
            video.addEventListener("timeupdate", function() {
                slider.value = (video.currentTime * 100) / video.duration;
            });
        
            window.SetVolume = function(val) {
                var image = document.getElementById("sound");
                console.log('Before: ' + video.volume);
                video.volume = val / 100;
                console.log('After: ' + video.volume);
                if (video.volume == 0) {
                    video.muted = true;
                    image.src = "{{ URL('pictures/soundoff.png') }}";
                } else {
                    video.muted = false;
                    image.src = "{{ URL('pictures/soundon.png') }}";
                }
            }
        
        
            function enableMute() {
                var image = document.getElementById("sound");
                if (!video.muted) {
                    video.muted = true;
                    slidervolume.value = 0;
                    if (image.src.match("{{ URL('pictures/soundon.png') }}")) {
                        image.src = "{{ URL('pictures/soundoff.png') }}";
                    }
                } else {
                    video.muted = false;
                    slidervolume.value = 10;
                    video.volume = 0.1;
                    if (image.src.match("{{ URL('pictures/soundoff.png') }}")) {
                        image.src = "{{ URL('pictures/soundon.png') }}";
                    }
                }
            }
        
            function playPause() {
                var image = document.getElementById("play");
                if (video.paused) {
                    video.play();
                    if (image.src.match("{{ URL('pictures/play.png') }}")) {
                        image.src = "{{ URL('pictures/pause.png') }}";
                    }
                } else {
                    video.pause();
                    if (image.src.match("{{ URL('pictures/pause.png') }}")) {
                        image.src = "{{ URL('pictures/play.png') }}";
                    }
                }
            }
        
            function openFullscreen() {
                if (video.requestFullscreen) {
                    video.requestFullscreen();
                } else if (myVideo.webkitRequestFullscreen) {
                    /* Safari */
                    video.webkitRequestFullscreen();
                } else if (myVideo.msRequestFullscreen) {
                    /* IE11 */
                    video.msRequestFullscreen();
                }

            </script>
        @elseif(pathinfo($modules->media, PATHINFO_EXTENSION) == 'jpg' ||
                pathinfo($modules->media, PATHINFO_EXTENSION) == 'png' ||
                pathinfo($modules->media, PATHINFO_EXTENSION) == 'jpeg')
                <div class="hidden sm:block w-full mx-auto px-14 my-20 flex-col gap-5">
                    <img class="rounded-[10px] mx-auto h-fit w-fit "
                src="{{ asset('storage/'.$modules->media) }}" alt="asd" type="image">
                </div>
            
        @elseif(pathinfo($modules->media, PATHINFO_EXTENSION) == 'pdf' ||
        pathinfo($modules->media, PATHINFO_EXTENSION) == 'pptx')
            <embed src="{{ asset('storage/'.$modules->media)}}'#toolbar=0'" width="100%" height="500px" alt="pdf" type="pdf">
        @endif
        @endif

        <div class="hidden sm:block w-full mx-auto h-fit rounded-[10px] justify-center pb-20 pt-5  bg-gray-400 px-20 my-20 flex-col gap-5">
            <p class="text-xl  font-poppins  text-white">lorem</p>
        </div>
        <br>
        <!-- play video -->
        <audio src=""></audio>
    </body>

    </html>