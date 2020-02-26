<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <title>Magazine Meire</title>
    </head>
    <body>
        <div id="app">
            <header-component></header-component>
            <div class="container-fluid">
                <div class="py-2"></div>
                <h1>Mailling</h1>
                <menu-component></menu-component>
                @yield('conteudo')
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>    
    </body>
</html>
