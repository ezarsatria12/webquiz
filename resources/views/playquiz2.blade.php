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
    <form action="{{ route('submitQuiz', $quiz->id) }}">
        @foreach ($quizz as $item)
        @if ()
        @elseif ()
        @elseif ()
        @endif

        @endforeach
    </form>
    <!-- essay end -->
</body>

</html>