@extends('layouts.app')

@section('body')

    
    <div class="jumbotron bg-light border border-secondary mt-3">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Produtos</h5>
                        <p class="card-text">Aqui vc cadastra  produtos. Não esqueça de cadastrar também as categorias.</p>
                        <a href="/produtos" class="btn btn-primary">Cadastre Produtos</a>
                    </div>

                </div>
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Categorias</h5>
                        <p class="card-text">Aqui vc cadastra categorias</p>
                        <a href="/produtos" class="btn btn-primary">Cadastre categorias</a>
                    </div>

                </div>
            </div>
        </div>
    </div>   

   
@endsection