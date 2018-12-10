<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Album extends Controller
{
    public function listar(){
        $usuario = [
        'nome' => 'Wellington',
        'sobrenome' => 'Rodrigues'
    ];
    $usuarios = [
        ['nome' => 'Victor'],
        ['nome' => 'Wellington'],
        ['nome' => 'Ronaldo']
        
    ];
        
    return view('welcome', [
        'usuario' => $usuario,
        'lista_usuarios' => $usuarios
    ]);


        
    }
}
