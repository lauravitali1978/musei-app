<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Catalogo Musei') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100">

    {{-- Header --}}
    <header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="h4 mb-0">🖼️ Catalogo Musei</h1>
            <nav>
                <a href="{{ route('register') }}" class="text-white me-3">Registrati</a>
                <a href="{{ route('login') }}" class="text-white me-3">Login</a>
                <a href="#" class="btn btn-outline-light btn-sm">Accedi</a>
            </nav>
        </div>
    </header>

    {{-- Contenuto dinamico --}}
    <main class="flex-grow-1">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-light text-center text-muted py-3 mt-auto">
        <div class="container">
            &copy; {{ date('Y') }} Catalogo Musei. Tutti i diritti riservati.
        </div>
    </footer>

</body>
</html>
