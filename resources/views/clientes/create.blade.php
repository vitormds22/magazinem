@extends('layouts.app')

@section('conteudo')
<form action="/store" method='POST'>
    @csrf
    <div class="py-4"></div>
    <div class="d-flex justify-content-center">
        <div class="form-group col-md-4">
            <div>
                <h2 style="margin: 0 auto;">Dados cadastrais</h2>
            </div>
            <div class="form-row">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite o nome da cliente">
            </div>
            
            <div class="py-2"></div>

            <div class="form-row">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" name="email" placeholder="Digite o email da cliente">
            </div>
            
            <div class="py-2"></div>
            
            <div class="form-row">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" placeholder="Digite o telefone da cliente">
            </div>
            
            <div class="py-2"></div>
            
            <div class="form-row">
                <label for="telefone">Data de nascimento</label>
                <input type="date" class="form-control" name="data_nasc">
            </div>
            
            <div class="py-2"></div>
            
            <div class="form-row">
                <button type="submit" class="btn btn-lg btn-primary">Adicionar</button>
            </div>
        </div>
    </div>
</form>
@stop