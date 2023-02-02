<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/modul.css') }}">
</head>

<body>
    <div class="justify-center flex m-auto my-[150px] w-full h-full">
        <div
            class="bg-white shadow-md border border-gray-200 rounded-lg w-[300px] sm:w-[491px] h-fit p-4 sm:p-6 lg:p-8">
            <form class="space-y-2 sm:space-y-6" action="{{ route("usersave", $quiz) }}" method="POST">
                @csrf
                <h3 class="pb-[50px] text-xl font-medium text-center text-gray-900">Identitas</h3>
                <div>
                    <!-- username -->
                    <label for="name" class="text-xs sm:text-sm font-medium text-gray-900 block mb-2">Your
                        Name</label>
                    <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300
        text-gray-900 text-xs sm:text-sm rounded-lg focus:ring-green-111
        outline-green-111 focus:border-ring-green-111 block
        w-full p-2.5" placeholder="Name" required>
                </div>
                <div>
                    <!-- kelas -->
                    <label for="name" class="text-xs sm:text-sm font-medium text-gray-900 block mb-2">Your
                        Class</label>
                    <input type="name" name="class" id="name" class="bg-gray-50 border border-gray-300
        text-gray-900 text-xs sm:text-sm rounded-lg focus:ring-green-111
        outline-green-111 focus:border-ring-green-111 block
        w-full p-2.5" placeholder="Kelas" required>
                </div>
                <!--  -->
                <!-- button -->
                <br>
                <div class="sm:pt-20">
                    <button type="submit" class="w-full text-white bg-green-111 hover:brightness-75
                focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5
                text-center">Mulai
                        Mengerjakan</button>
                </div>
        </div>
        </form>
    </div>
    </p>
    </div>
</body>

</html>