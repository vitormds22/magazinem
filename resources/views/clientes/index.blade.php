@extends('layouts.app')

@section('conteudo')
<div class="container-fluid">
    <div class="py-2"></div>
    <div class="alert alert-success" role="alert" style="display: {{session('msg') === 'Cliente cadastrado' ? 'block' : 'none'}}">
        {{session('msg')}}
    </div>    
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col">Data de nascimento</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{$cliente->id}}</td>
                    <td>{{$cliente->nome}}</td>
                    <td>{{$cliente->email}}</td>
                    <td>{{$cliente->telefone}}</td>
                    <td>{{$cliente->data_nasc}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop