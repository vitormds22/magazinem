<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    //Controller de dados dos clientes
    public function show(){
        return view('/show', ['cliente' => Cliente::find(1)]);
    }

    public function add(){
        return view('/form', ['menu'=> "Adicionar"]);
    }

    public function mailling(){
        return view('mailling',['menu'=>"Mailling"]);
    }

    public function create(){
        // $cliente = new Cliente();

        // $cliente->nome = 'Luiza';
        // $cliente->email = 'luiza@gmail.com';
        // $cliente->telefone = '(11) 95943-0554';
        // $cliente->data_nasc = '1994-06-10';

        // if($cliente->save() === true){
        //     return 'Cliente criado!';
        // }

        // return 'Cliente não salvo';
    }

    public function index(){
        return 'index';
    }
}
