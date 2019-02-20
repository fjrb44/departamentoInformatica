<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>@yield('titulo', 'Dto Informática')</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


        <link rel="stylesheet" href="/css/app.css" />
        {{-- <link rel="stylesheet" href="/css/styles.css" /> --}}
    </head>

    <body>
        <header>@include('parcial.header')</header>
        <div class="container-fluid">@yield('contenido')</div>
        <footer>@include('parcial.footer')</footer>

        <script src="js/app.js"></script>
        @yield('js_extra')
    </body>
</html>
