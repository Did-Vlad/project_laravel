<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'EMS')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<nav>
    <a href="/">EMS</a>

    <div>
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
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer>
    <p>© {{ date('Y') }} Employee Management System</p>
</footer>

</body>
</html>