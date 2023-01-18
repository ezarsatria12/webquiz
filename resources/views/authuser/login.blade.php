<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/modul.css')}}">
</head>
<body>
    <section class="flex justify-center">
        <div class="max-w-sm rounded overflow-hidden shadow-lg flex justify-center flex-col">
            <h2>login</h2>
            <form action="" class="flex flex-col">
                <label for="name">User Name</label>
                <input type="text" id="name" name="name" placeholder="Name">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="@gmail.com">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="password">
                <button type="submit" class="btn btn-primary">
                    login
                </button>
            </form>
            <h2>or</h2>
            <div class="px-6 py-4">
              <a href="/auth/google/redirect">loginn gugel</a>
            <form action="/auth/google/redirect">
              <button>
                <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-webinar-optimizing-for-success-google-business-webinar-13.png" alt="" class="w-8 h-8">
                <h1>Login With Google</h1>
              </button>
            </form>
        </div>
    </section>
</body>
</html>