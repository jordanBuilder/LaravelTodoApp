<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>@yield('title') | Just Do It</title>
    <style>
        .border-left{
            border-left: 3px solid gray;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen">
    <div class="navbar bg-base-100 px-4 py-2 flex justify-between items-center shadow-md">
        <div class="flex-1">
          <a class="btn btn-ghost text-xl text-red-500 font-bold">JustDoIt</a>
        </div>
        <div class="flex border-left flex items-center">
          <ul class="px-1 flex content-evenly items-center">
            <li class="px-5"><a href="{{ route('login') }}">Se connecter</a></li>
            <li>
              <li class="btn bg-red-500 text-white font-semibold py-2 px-4 rounded-lg">
                <a href="{{route('register')}}">s'inscrire</a>

              </li>
            </li>
          </ul>
        </div>
    </div>
      @yield('welcome')
      @yield('content')
</body>
</html>
