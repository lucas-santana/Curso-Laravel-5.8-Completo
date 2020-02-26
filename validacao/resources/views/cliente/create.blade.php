<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Clientes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
      
    <div class="container col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <div class="card-title"> Cadastro de Clientes</div>
                
            </div>
            <div class="card-body">
                <form action="{{route('cliente.store')}}" method="POST">
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
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </form>
            </div>
            <div class="card-footer text-muted">
                
            </div>
        </div>
        
    </div>
      
   
    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>