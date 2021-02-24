<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function create(){
        return view('clientes.create', ['menu'=> "Adicionar"]);
    }

    public function index(){
        $clientes = json_encode(Cliente::select('id', 'nome', 'email', 'telefone', 'data_nasc')->get());

        return view('clientes.index',['menu'=>"Mailling"], compact('clientes'));
    }

    public function store(){
        $cliente = new Cliente();

        $cliente->nome = request('nome');
        $cliente->email = request('email');
        $cliente->telefone = request('telefone');
        $cliente->data_nasc = request('data_nasc');

        $cliente->save();

        return redirect('/')->with('msg', 'Cliente cadastrado');
    }
}
