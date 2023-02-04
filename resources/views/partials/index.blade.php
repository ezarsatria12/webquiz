<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="{{ asset('/js/app.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/modul.css')}}">
</head>
<main class="content w-full h-full">
<body class="flex flex-col bg-white">
    @include('partials.nav2')
    
        @yield('container')
    
    @include('partials.foot')
</body>
</main>

</html>