<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos',function(){
    return view('outras.produtos');
})->name('produtos');

Route::get('departamentos',function(){
    return view('outras.departamentos');
})->name('departamentos');
Route::get('nome','MeuControlador@getNome');
Route::get('idade','MeuControlador@getIdade');
Route::get('multiplicar/{n1}/{n2}','MeuControlador@multiplicar');

//Para não precisar de chamar cada rota uma a uma
Route::resource('clientes', 'ClienteControlador');



/*
Route::get('/ola/{nome}/{Santana}',function($nome,$sobrenome){
    return "Olá ".$nome." $sobrenome !";
});

Route::get('/seunome/{nome?}',function($nome=null){
    if(isset($nome))
        return "Olá ".$nome."!";
    else {
        return "Nome não informado!";
    }

});

Route::get('/seunome/{nome?}/{n}',function($nome=null,$n){
    for($i=0;$i<$n;$i++){
        echo "$nome <BR>";
    }

})->where('nome','[A-za-z]+')->where('n','[0-9]+');

Route::prefix('aplicacao')->group(function(){
    Route::get('/',function(){
        return view('app');
    })->name('app');

    Route::get('/user',function(){
       return view('users');
    })->name('app.user');

    Route::get('/profile',function(){
        return view('profile');
    })->name('app.profile');


});

Route::get('/produtos',function(){
    echo '<h1>Produtos</h1>
            <ol>
                <li>Notebook</li>
                <li>Impressora</li>
                <li>Mouse</li>
            </ol>';
})->name('meusprodutos');

//Redirecionamento de requisições
Route::redirect('todosprodutos', 'produtos', 301);

Route::get('todosprodutos2', function () {
    return redirect()->route('meusprodutos');
});

Route::post('/requisicoes', function(Request $request) {
    return 'Hello POST';
});

Route::delete('/requisicoes', function(Request $request){
    return 'Hello DELETE';
});

Route::put('/requisicoes', function(Request $request){
    return 'Hello PUT';
});

Route::patch('/requisicoes', function(Request $request){
    return 'Hello PATCH';
});

Route::options('/requisicoes', function(Request $request){
    return 'Hello OPTIONS';
});

Route::get('/requisicoes', function(Request $request){
    return 'Hello GET';
});*/
