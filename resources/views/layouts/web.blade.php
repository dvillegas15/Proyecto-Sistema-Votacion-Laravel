<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Sistema de Votaciones</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <header class="shadow-lg">
            <div class="bg-light py-1"></div>
            <nav class="bg-blue-800 py-2">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/user.png') }}" class="h-8 mx-auto">
                </a>

            </nav>
        </header>
        <main class="py-10">
            <div class="container mx-auto px-4">
                @yield('content')
            </div>
        </main>
        <footer class="py-4 text-center">
            @auth
            <a href="url('dashboard')" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
            <a href="{{ url('login') }}" class="text-sm text-gray-700 underline">Login</a>
            <a href="{{ url('register') }}" class="text-sm text-gray-700 underline">Registerd</a>

            @endif

        </footer>
    </body>
</html>