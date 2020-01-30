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

Route::prefix('app')->group(function(){
    Route::get('/',function(){
        return view('app');
    });

    Route::get('/users',function(){
       return view('users');
    });

    Route::get('/profile',function(){
        return view('profile');
    });

    
});