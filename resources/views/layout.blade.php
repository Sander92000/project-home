<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-300">
    <header class="bg-teal-900 h-20 text-center">
        <h1 class="text-4xl text-white py-4">Project Home</h1>
    </header>

    @yield('nav')

    <div class="container min-h-screen mx-auto">
        <div class="bg-white rounded max-w-6xl p-4 my-8">
            @yield('content')
        </div>
    </div>

    <footer class="bg-white text-center">
        <p>Made by me</p>
    </footer>
</body>
@yield('js')

</html>
