<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Tiêu đề mặc định')</title>
</head>
<body>
    <header class="header">
        <h1>Đây là header</h1>
        <nav>
            <a href="/greet/Laravel">Trang Chào</a> |
            <a href="/about">Giới Thiệu</a>
        </nav>
    </header>

    <main>
        @include('components.alert')
        @yield('content')
    </main>

    <footer class="footer">
        <p>Đây là footer</p>
    </footer>
</body>
</html>
