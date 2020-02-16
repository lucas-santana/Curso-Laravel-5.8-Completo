@extends('layouts.principal')

@section('titulo','Cliente Index')

@section('conteudo')
    <h3>{{$titulo}}</h3>
    <a href="{{ route('clientes.create') }}">Novo</a>


    @empty($clientes)
        <h4>1 Não existem clientes cadastrados</h4>
    @endempty
    @if ($clientes)
    <ul>
        @foreach ($clientes as $c)
            <li>
                {{$c['id']}} | {{$c['nome']}}
                <a href="{{ route('clientes.edit',$c['id']) }}">Editar</a>
                <a href="{{ route('clientes.show',$c['id']) }}">Info</a>
                <form action="{{ route('clientes.destroy', $c['id']) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Apagar">
                </form>
            </li>
        @endforeach
    </ul>

    @else
        <h4>2 Não existem clientes cadastrados</h4>
    @endif
@endsection
