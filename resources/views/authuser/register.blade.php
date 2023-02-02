<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/modul.css')}}">
</head>

<body>
    <div class="justify-center flex m-auto my-[150px] w-full h-full">
        <div
            class="bg-white shadow-md mx-[20px] border w-full border-gray-200 rounded-lg sm:w-[491px] h-fit p-4 sm:p-6 lg:p-8">
            <form class="space-y-2 sm:space-y-4" action="/register" method="POST">
                <h3 class="pb-[30px] text-xl font-medium text-center text-gray-900">Register</h3>
                <div>
                    <!-- username -->
                    <label for="username" class="text-xs sm:text-sm font-medium text-gray-900 block mb-2">Your
                        Name</label>
                    <input type="username" name="name" id="name" class="bg-gray-50 border border-gray-300
                        text-gray-900 text-xs sm:text-sm rounded-lg focus:ring-green-111 
                        outline-green-111 focus:border-ring-green-111 block
                        w-full p-2.5" placeholder="Username" required="">
                </div>
                <div class="space-y-[8px]">
                    <!-- username -->
                    <label for="email" class="text-xs sm:text-sm font-medium text-gray-900 block mb-2">Your
                        email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300
                      text-gray-900 text-xs sm:text-sm rounded-lg focus:ring-green-111 
                      outline-green-111 focus:border-ring-green-111 block
                      w-full p-2.5" placeholder="Example@email.com" required="">
                </div>
                <div class="space-y-[8px]">
                    <!-- pass -->
                    <label for="password" class="text-xs sm:text-sm font-medium text-gray-900 block">Your
                        Password</label>
                    <input type="password" name="password" id="password" placeholder="Password"
                        class="bg-gray-50 border outline-green-111
                        border-gray-300 text-gray-900 text-xs sm:text-sm rounded-lg focus:ring-green-111 focus:border-green-111 block w-full p-2.5" required="">
                    <div class="flex flex-row w-full">
                        <input type="checkbox" onclick="myFunction()" class="my-auto">
                        <p class="px-3">Show Password</p>
                    </div>

                    <!--  -->
                    <script>
                    function myFunction() {
                        var x = document.getElementById("password");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                    </script>
                    <br>
                    <!-- button -->
                    <button type="submit" class="w-full text-white bg-green-111 hover:brightness-75
                        focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5
                        text-center">Create account</button>
                    <br>
            </form>
            <p class="text-center">or</p>
            <form action="/auth/google/redirect">
                <button type="submit" class="w-full text-black bg-white hover:brightness-75
                        focus:ring-4 font-medium text-2xl rounded-lg px-5 py-2
                        text-center flex flex-row">
                    <img src="{{ URL('pictures/google.png') }}" class="w-10 h-10" alt="">
                    <p class="text-center w-full">Login With Google</p>
                </button>
            </form>
        </div>
        </p>
    </div>
</body>

</html>