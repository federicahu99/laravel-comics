<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <title>DC COMICS</title>
    </head>
    <body>

    <!-- header -->
    @include('includes.header')
    <!-- main -->
    @yield('content')
    <!-- footer -->
    @include('includes.footer')
    </body>
</html>