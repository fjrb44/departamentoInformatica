<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <title>@yield('titulo', 'Dto Informática')</title>

        <link rel="stylesheet" href="css/app.css" />
        <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
        <header>@include('parcial.header')</header>
        <div class="container-fluid">@yield('contenido')</div>
        <footer>@include('parcial.footer')</footer>

        <script src="js/app.js"></script>
    </body>
</html>
