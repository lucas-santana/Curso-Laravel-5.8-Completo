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
                <table class="table">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Idade</th>
                            <th>Endereço</th>
                            <th>E-mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $cliente)
                            <tr>
                                <td scope="row">{{$cliente->id}}</td>
                                <td>{{$cliente->nome}}</td>
                                <td>{{$cliente->idade}}</td>
                                <td>{{$cliente->endereco}}</td>
                                <td>{{$cliente->email}}</td>
                            </tr>
                        @endforeach                            
                        
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-muted">
                Footer
            </div>
        </div>
        
    </div>
      
   
    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>