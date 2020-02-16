

@extends('layouts.principal')
    <h3>Informações Cliente</h3>
    <p>ID:{{$clientes['id']}}</p>
    <p>Nome: {{$clientes['nome']}}</p>

    <br>

    <a href="{{route('clientes.index')}}">Voltar</a>
@section('conteudo')

@endsection
