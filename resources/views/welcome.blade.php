<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Meu App')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <header class="p-4 bg-blue-600 text-white">
        <h1>Meu CRM</h1>
    </header>

    <main class="p-6">
        @yield('content')
    </main>

    <footer class="p-4 text-center text-gray-500">
        &copy; {{ date('Y') }} - Todos os direitos reservados
    </footer>
</body>
</html>