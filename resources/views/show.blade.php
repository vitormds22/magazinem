<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visão Geral</title>
</head>
<body>
    <div>Nome: {{$cliente->nome}}</div>
    <div>E-mail: {{$cliente->email}}</div>
    <div>Telefone: {{$cliente->telefone}}</div>
    <div>Data de Nascimento: {{$cliente->data_nasc}}</div>
</body>
</html>