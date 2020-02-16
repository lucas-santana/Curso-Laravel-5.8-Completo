@extends('layouts.principal')

@section('conteudo')
<h3>Informações Cliente</h3>
    <p>ID:{{$clientes['id']}}</p>
    <p>Nome: {{$clientes['nome']}}</p>

    <br>

    <a href="{{route('clientes.index')}}">Voltar</a>
@endsection
