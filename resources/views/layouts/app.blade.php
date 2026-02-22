<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">EMS</a>

        <div>
            <a class="nav-link d-inline text-white" href="/">Головна</a>
            <a class="nav-link d-inline text-white" href="/employees">Співробітники</a>
            <a class="nav-link d-inline text-white" href="/projects">Проєкти</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<footer class="bg-dark text-white text-center p-3 mt-5">
    © {{ date('Y') }} Employee Management System
</footer>

</body>
</html>