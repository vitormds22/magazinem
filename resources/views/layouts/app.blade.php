<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <title>Magazine Meire</title>
        <style>
            .navbar {
                color: #777070;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <header-component></header-component>
            <div class="container-fluid">
                <div class="py-2"></div>
                {{-- <h1>{{ $menu }}</h1> --}}
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link {{ url()->current() == route('clientes.index') ? 'active' : '' }}" href="/" title="Mailling">Mailling</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ url()->current() == route('clientes.create') ? 'active' : '' }}" href="/create" title="Cadastro">Adicionar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ url()->current() == '/relatorio' ? 'active' : '' }}" href="/relatorio" title="Relatórios">Relatórios</a>
                        </li>
                    </ul>
            </div>
                @yield('conteudo')
        </div>
        <script src="{{ asset('js/app.js') }}"></script>    
    </body>
</html>
