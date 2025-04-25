<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Horani</title>
</head>
<body>
    <header>
        <nav class="flex justify-between items-center w-full px-6">
            <h1>Horan <span style="color: var(--secondary-color);">I</span></h1>

            <div class="nav-links">
                <a href="{{ url('/') }}">Menu</a>
                <a href="{{ url('/') }}">About</a>
                <a href="{{ url('/') }}">Contact</a>
            </div>

            @if (Route::has('login'))
                <div class="flex items-center gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="...">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="...">Log in</a>
                    @endauth
                </div>
            @endif
        </nav>
    </header>
</body>
</html>
