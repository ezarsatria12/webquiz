<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/modul.css')}}">
</head>

<body>
    <div class="justify-center flex  mx-5 my-[150px] h-full">
        <div class="bg-white shadow-md border border-gray-200 rounded-lg w-full sm:w-[491px] h-fit p-4 sm:p-6">
            <form class="space-y-2 sm:space-y-6" action="{{route('authenticate')}}" method="POST"
                onsubmit="return validatePassword()">
                @csrf
                <h3 class="pb-[20px] text-xl sm:text-3xl font-medium text-center text-gray-900">Sign in</h3>
                <div>
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
                        password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••"
                        class="bg-gray-50 border outline-green-111
          border-gray-300 text-gray-900 text-xs sm:text-sm rounded-lg focus:ring-green-111 focus:border-green-111 block w-full p-2.5" required="">
                    <input type="checkbox" onclick="myFunction()" class="my-auto"> Show Password
                    <script>
                    function validatePassword() {
                        var password = document.getElementById("password").value;
                        if (password.length < 8) {
                            alert("Password must be at least 8 characters long");
                            return false;
                        }
                        return true;
                    }
                    </script>
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
                    <br><br>
                    <!--  -->
                    <a href="#" class="hidden text-sm text-blue-700 hover:underline ">Lost Password?</a>
                    <!-- button -->
                    <button type="submit" class="w-full text-white bg-green-111 hover:brightness-75
            focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5
            text-center">Login to your account</button>
                    <br>
                    Not registered?
                    <a href="/register" class=" text-sm font-medium text-blue-700 hover:underline">Create account</a>
                </div>
            </form>
            <p class="text-center text-xl py-2">or</p>
            <form action="/auth/google/redirect">
                <button type="submit" class="w-full border text-black bg-white hover:brightness-75
                            focus:ring-4 font-medium text-2xl rounded-lg px-5 py-2 font-poppins
                            text-center flex flex-row">
                    <img src="{{ URL('pictures/google.png') }}" class="w-2 h-2 sm:w-[30px] sm:h-[30px] m-auto" alt="">
                    <p class="text-center w-full m-auto text-sm sm:text-sm font-poppins pr-8">Login With Google</p>
                </button>
            </form>
        </div>
        </p>
    </div>
</body>

</html>