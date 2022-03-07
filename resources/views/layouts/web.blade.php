<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de programación Web</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<header class="shadow-lg">
    <div class="bg-blue-900 py-1"></div>
    <nav class="bg-blue-800 py-2"><a href="{{route('home')}}">
            <img src="{{asset('images/isotipo-platzi.png')}}" class="h-8 mx-auto" alt="">
        </a></nav>
</header>
<main>
    <div class="py-10">
        <div class="container mx-auto px-4">
            @yield('content')

        </div>
    </div>
</main>
<footer class="py-4 text-center">
@auth()
        <a href="{{url('dashboard')}}" class="text-sm text-gray-700 underline"> Dashboard</a>
    @else
        <a href="{{url('login')}}" class="text-sm text-gray-700 underline"> Login</a>
        <a href="{{url('register')}}" class="ml-4 text-sm text-gray-700 underline"> Register</a>

    @endif
</footer>
</body>
</html>
