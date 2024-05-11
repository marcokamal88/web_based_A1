<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href=" \css\header.css">
</head>

<body>
    <header>
        <nav>
            <img id="img1" src="img/logo.png.webp" alt="Logo" />
            <ul id="menu">
                <li class="item"><a class="link" href="#">Home</a></li>
                <li class="item"><a class="link" href="#">Blog</a></li>
                <li class="item"><a class="link" href="#">Pages</a></li>
                <li class="item"><a class="link" href="#">contact</a></li>
            </ul>
            <div class="item">
                <a class="link" href="#">register</a>
                <a class="link" href="#">login</a>
            </div>
        </nav>
    </header>
    @yield('content')
    @yield('footer')

</body>

</html>