<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        
        <link rel="stylesheet" href=" {{ asset('css/app.css') }}">
        <title>DC COMICS</title>
    </head>
    <body>

    <!-- header -->
    @include('includes.header')
    <!-- jumbotron -->
    @include('includes.jumbotron')
    <!-- main -->
    @yield('content')
    <!-- footer -->
    @include('includes.footer')
    </body>
</html>
