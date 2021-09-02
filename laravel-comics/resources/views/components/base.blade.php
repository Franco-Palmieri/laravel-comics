<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
</head>
<body>
    <nav>
        @include('components.nav')
    </nav>
    <header>
        @include('components.header')
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        @include('components.footer')
    </footer>
</body>
</html>