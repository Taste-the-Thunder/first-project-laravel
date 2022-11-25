<!DOCTYPE html>
<html lang="en">
<head>
    @stack('title')
</head>
<body>
    <h1>Header 1</h1>
    <a href="/">Home</a>
    <a href="/register">Register</a>
        @yield('main-section')
    <h1>Footer</h1>
</body>
</html>
