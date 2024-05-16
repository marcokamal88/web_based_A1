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

            <select onchange="location = this.value;">
                <option value="{{ route('/', ['lang' => 'en']) }}" @if(app()->getLocale() == 'en')
                    selected @endif>English</option>
                <option value="{{ route('/', ['lang' => 'ar']) }}" @if(app()->getLocale() == 'ar')
                    selected @endif>arabic</option>
                <!-- Add more language options as needed... -->
            </select>

        </nav>
    </header>
    @yield('content')
    @yield('footer')

</body>

</html>