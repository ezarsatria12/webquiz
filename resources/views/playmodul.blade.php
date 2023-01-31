<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class=" bg-black sm:w-[1440px] sm:h-[1024px] m-auto">
    <!-- play video -->
    <div class="w-full mx-auto bg-gray-400 px-14 my-20 flex flex-col gap-5">
        <div class="w-[50px] h-[50px] mt-[20px] hover:brightness-90">
            <a href="#back">
                <img src="pictures/backmodul.png" alt="">
            </a>
        </div>
        <div class="w-full bg-black">
            <video id="video" class="w-full">
                <source id="video" src="pictures/example.mp4" type="video/mp4">
                Your browser does not support HTML video.
            </video>
        </div>
        <div class="flex flex-row justify-start w-full h-fit gap-5">
            <button onclick="playPause()" class="flex">
                <img class="w-[50px] h-[50px] hover:brightness-90" id="play" src="pictures/play.png" alt="">
            </button>
            <!-- video slider -->
            <input type="range" id="slider" min="0" max="100" value="0" step="1" oninput="Setvideo(this.value)"
                onchange="Setvideo(this.value)">
            <!-- duration -->
            <div class="text-xl my-auto">
                <span id="time-elapsed"></span>
                <span>/</span>
                <span id="time-duration"></span>
            </div>

            <button onclick="enableMute()" type="button" class="flex flex-row gap-5">
                <img class="w-[50px] h-[50px] hover:brightness-90" id="sound" src="pictures/soundon.png" alt="">
            </button>
            <input class="my-auto" id="vol-control" type="range" min="0" max="100" step="1"
                oninput="SetVolume(this.value)" onchange="SetVolume(this.value)"></input>

            <button onclick="openFullscreen();">
                <img class="w-[50px] h-[50px] hover:brightness-90" id="play" src="pictures/fullscreen.png" alt="">
            </button>

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

    video.onloadedmetadata = function() {
        var minutesDuration = Math.floor(v ideo.duration / 60);
        var secondsDuration = Math.floor(video.duration - minutesDuration * 60);
        timeDuration.innerHTML = minutesDuration + ":" + secondsDuration.toString().padStart(2, '0');
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
            image.src = "pictures/soundoff.png";
        } else {
            video.muted = false;
            image.src = "pictures/soundon.png";
        }
    }


    function enableMute() {
        var image = document.getElementById("sound");
        if (!video.muted) {
            video.muted = true;
            slidervolume.value = 0;
            if (image.src.match("pictures/soundon.png")) {
                image.src = "pictures/soundoff.png";
            }
        } else {
            video.muted = false;
            slidervolume.value = 10;
            video.volume = 0.1;
            if (image.src.match("pictures/soundoff.png")) {
                image.src = "pictures/soundon.png";
            }
        }
    }

    function playPause() {
        var image = document.getElementById("play");
        if (video.paused) {
            video.play();
            if (image.src.match("pictures/play.png")) {
                image.src = "pictures/pause.png";
            }
        } else {
            video.pause();
            if (image.src.match("pictures/pause.png")) {
                image.src = "pictures/play.png";
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
    }
    </script>
</body>

</html>