@extends('layouts.app')

@section('body')
<h4>Editar Categoria</h4>
<div class="card border-primary">
  <div class="card-body">

    <form action="{{ route('categorias.update',$categoria->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="nomeCategoria">Nome da Categoria</label>
          <input type="text" name="nomeCategoria" id="nomeCategoria" value="{{$categoria->nome}}" class="form-control" placeholder="Nome da Categoria" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{route('categorias.index')}}" class="btn btn-danger">Cancelar</a>
    </form>
  </div>
</div>
@endsection