@extends('layouts.app')

@section('body')
<h4>Editar Produto</h4>
<div class="card border-primary">
  <div class="card-body">

    <form action="{{ route('produtos.update',$produto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
          <div class="form-group col">
            <label for="nome" class="col-form-label">Nome do Produto</label>
          <input type="text" name="nome" id="nome" value="{{$produto->nome}}" class="form-control" placeholder="Nome do Produto" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Help text</small>
          </div>

          <div class="form-group col">
            <label for="estoque" class="col-form-label">Estoque</label>
            <input type="number" name="estoque" id="estoque" value="{{$produto->estoque}}" class="form-control" placeholder="Estoque" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Digite a quantidade em estoque</small>
          </div>

          <div class="form-group col">
            <label for="preco" class="col-form-label">Preço</label>
            <input type="text" name="preco" id="preco" value="{{$produto->preco}}" class="form-control" placeholder="Preço" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Preço do unitário do produto</small>
          </div>
        
          <div class="form-group col">
            <label for="categoria_id" class="col-form-label">Categoria</label>
            <select class="form-control" name="categoria_id" id="categoria_id">
              @if($categorias)
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}" {{ $categoria->id==$produto->categoria_id ? 'selected' : ''}}>{{$categoria->nome}}</option>
                @endforeach
              @else
                  <option value="null">Não há categorias cadastradas</option>
              @endif
            </select>
          </div>
      </div>
        
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{route('produtos.index')}}" class="btn btn-danger">Cancelar</a>
    </form>
  </div>
</div>
@endsection