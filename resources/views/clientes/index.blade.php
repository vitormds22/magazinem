@extends('layouts.app')

@section('conteudo')
<div class="container-fluid">
    <div class="py-2"></div>
    <div class="alert alert-success" role="alert" style="display: {{session('msg') === 'Cliente cadastrado' ? 'block' : 'none'}}">
        {{session('msg')}}
    </div>    
    <div>
        <mailling 
            v-bind:clientes="{{$clientes}}"
        >
        </mailling>
    </div>
</div>
@stop