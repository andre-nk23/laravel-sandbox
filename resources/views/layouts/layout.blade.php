<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="/css/main.css">
    </head>
    <header>
        
        {{-- <p> {{ $member->user }}</p> --}}
    </header>

    <body>
        @yield('content')
    </body>

    <footer>
        Restricted database of The Korean National Police Agency (경찰청)
    </footer>
</html>
