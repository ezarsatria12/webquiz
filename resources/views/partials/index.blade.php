<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <script src="{{ asset('/js/app.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/modul.css')}}">
      </head>
    <body>
        @include('partials.nav2')
            <main class="content">
                @yield('container')   
            </main>
        @include('partials.foot')    
    </body>
</html>