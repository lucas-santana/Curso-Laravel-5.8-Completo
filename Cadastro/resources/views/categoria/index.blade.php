@extends('layouts.app')

@section('body')
<div class="card border-primary">
    <div class="card-body">
        <div class="row">
            <div class="col"><h4 class="card-title">Cadastro de Categorias</h4></div>
            <div class="col"><a href="{{route('categorias.create')}}" class="btn btn-md btn-primary float-right mb-2">Cadastrar</a></div>
        </div>
        
        @if (count($categorias)>0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td scope="row">{{$categoria->id}}</td>
                            <td>{{$categoria->nome}}</td>
                            <td>
                                
                                <form action="{{ route('categorias.destroy', $categoria['id']) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('categorias.edit',$categoria->id)}}" class="btn btn-sm btn-primary">Editar</a>
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