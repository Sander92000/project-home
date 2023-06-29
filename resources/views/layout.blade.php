<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Project Home</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <header class="bg-teal-900 h-20 text-center">
        <h1 class="text-4xl text-white py-4">Project Home</h1>
    </header>

    <nav class="text-center">
        <a href="/">Home</a>
    </nav>

    <div class="min-h-screen bg-white rounded mx-auto max-w-80">
        @yield('content')
    </div>

    <footer class="h-6 text-center">
        <p>Made by me</p>
    </footer>
</body>

</html>
