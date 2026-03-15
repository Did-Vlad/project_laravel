<!DOCTYPE html>
<html lang="uk">
<head>
<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'EMS')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
</head>
</head>
<body>

<nav>
    <a href="/">EMS</a>
    <a href="/employees">Співробітники</a>
    <a href="/projects">Проєкти</a>

    @auth
        <span>{{ auth()->user()->name }}</span>
        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit">Вихід</button>
        </form>
    @endauth

    @guest
        <a href="{{ route('login') }}">Увійти</a>
        <a href="{{ route('register') }}">Реєстрація</a>
    @endguest
</nav>

<main>
    @yield('content')
</main>

<footer>
    <p>© {{ date('Y') }} Employee Management System</p>
</footer>

</body>
</html>