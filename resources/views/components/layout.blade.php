<!DOCTYPE html>
<html>
<head>
    <title>My Laravel App</title>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>

    <hr>

    {{ $slot }}
</body>
</html>