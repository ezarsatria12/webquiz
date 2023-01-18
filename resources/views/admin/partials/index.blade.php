<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/modul.css')}}">
      </head>
    <body>
        @include('admin.partials.navadmin')
            <main class="content">
                @yield('container')   
            </main>
        @include('admin.partials.foot')    
    </body>
</html>