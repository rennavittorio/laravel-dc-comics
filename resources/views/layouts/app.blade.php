<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>dc-comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="body d-flex flex-column justify-content-between">

    @include('partials.header')

    <main class="main py-5">

        <div class="container">
            
            @yield('content')

        </div>

    </main>

    @include('partials.footer')

</body>

</html>