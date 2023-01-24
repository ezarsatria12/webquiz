<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script><link rel="stylesheet" type="text/css" href="{{ URL::asset('css/modul.css')}}">
        @livewireStyles
    </head>
    <body>
        @include('admin.partials.nav2')
            <main class="content">
                @yield('container')   
            </main>
        @include('admin.partials.foot')    
    </body>
    @livewireScripts
</html>