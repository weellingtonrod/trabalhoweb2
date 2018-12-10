@extends('layout')

@section('titulo','Bem Vindo')

@section('conteudo')

   <h1><p>Bem vindo!! - 
       {{ $usuario['nome'] }}
       {{$usuario['sobrenome'] }} 
       </p></h1>

<h4> Lista de usuários </h4>

@foreach ($lista_usuarios as $u)
    {{$u['nome']}}
@endforeach

@endsection