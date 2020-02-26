@extends('layouts.app')

@section('body')
<div class="card border-primary">
    <div class="card-body">
        <div class="row">
            <div class="col"><h4 class="card-title">Cadastro de Produtos</h4></div>
            <div class="col"><a href="{{route('produtos.create')}}" class="btn btn-md btn-primary float-right mb-2">Cadastrar</a></div>
        </div>
        
        @if (count($produtos)>0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Estoque</th>
                        <th>Preço</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                
                    @foreach ($produtos as $produto)
                        <tr>
                            <td scope="row">{{$produto->id}}</td>
                            <td>{{$produto->nome}}</td>
                            <td>{{$produto->estoque}}</td>
                            <td>{{$produto->preco}}</td>
                            <td>{{$produto->categoria->nome}}</td>
                            <td>
                                
                                <form action="{{ route('produtos.destroy', $produto['id']) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('produtos.edit',$produto->id)}}" class="btn btn-sm btn-primary">Editar</a>
                                    <button type="submit" class="btn btn-sm btn-danger">Apagar</a>
                                </form>
                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <div class="card-footer text-muted">
        Rodapé
    </div>
</div>
@endsection