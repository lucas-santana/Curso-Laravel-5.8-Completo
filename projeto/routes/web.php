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
