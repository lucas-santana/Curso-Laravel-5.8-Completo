@extends('layouts.app')

@section('body')
<div class="card border-primary">
    <div class="card-body">
        <div class="row">
            <div class="col"><h4 class="card-title">Cadastro de Clientes</h4></div>
            <div class="col">
                <!-- Button trigger modal -->
                <button class="btn btn-md btn-primary float-right mb-2" data-toggle="modal" data-target="#dlgCliente">Cadastrar</button>
            </div>
        </div>
        
        <table class="table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Endereço</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            
            </tbody>
        </table>
    </div>

    <div class="card-footer text-muted">
        Rodapé
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="dlgCliente" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastro de Clientes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="{{route('cliente.store')}}" method="POST">
                    <input type="hidden" name="id" id="id">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nome">Nome</label>
                        <input type="text" class="form-control {{$errors->has('nome')? 'is-invalid':''}}" id="nome" name="nome" placeholder="Nome">
                            @if ($errors->has('nome'))
                                <div class="invalid-feedback">
                                    {{$errors->first('nome')}}
                                </div>                                
                            @endif
                        </div>

                        <div class="form-group col-md-4">
                            <label for="idade">Idade</label>
                            <input type="text" class="form-control {{$errors->has('idade')? 'is-invalid':''}}" id="idade" name="idade" placeholder="Idade">
                            @if ($errors->has('nome'))
                                <div class="invalid-feedback">
                                    {{$errors->first('idade')}}
                                </div>                                
                            @endif
                        </div>

                        <div class="form-group col-md-4">
                            <label for="email">Email</label>
                            <input type="email" class="form-control {{$errors->has('email')? 'is-invalid':''}}" id="email" name="email">
                            @if ($errors->has('nome'))
                                <div class="invalid-feedback">
                                    {{$errors->first('email')}}
                                </div>                                
                            @endif
                          </div>
                    </div>

                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control {{$errors->has('endereco')? 'is-invalid':''}}" id="endereco" name="endereco" placeholder="Endereço">
                        @if ($errors->has('nome'))
                                <div class="invalid-feedback">
                                    {{$errors->first('endereco')}}
                                </div>                                
                            @endif
                    </div>
                  </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
    <script type="text/javascript">
        $('#dlgCliente').on('hidden.bs.modal', function () {
            $(this).find('form').trigger('reset');
        })
    </script>
@endsection