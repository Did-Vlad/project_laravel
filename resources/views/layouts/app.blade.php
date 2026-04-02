<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'EMS')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-dark bg-dark px-4">
    <a class="navbar-brand fw-bold" href="/">EMS</a>
    <div class="d-flex align-items-center gap-3">
        <a class="nav-link text-white" href="/employees">Співробітники</a>
        <a class="nav-link text-white" href="/projects">Проєкти</a>

        @auth
            <span class="text-white">{{ auth()->user()->name }}</span>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-light btn-sm">Вихід</button>
            </form>
        @endauth

        @guest
            <a class="btn btn-outline-light btn-sm" href="{{ route('login') }}">Увійти</a>
            <a class="btn btn-outline-light btn-sm" href="{{ route('register') }}">Реєстрація</a>
        @endguest
    </div>
</nav>

<main class="container mt-4">
    @yield('content')
</main>

<footer class="bg-dark text-white text-center py-3 mt-5">
    <p class="mb-0">© {{ date('Y') }} Employee Management System</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>