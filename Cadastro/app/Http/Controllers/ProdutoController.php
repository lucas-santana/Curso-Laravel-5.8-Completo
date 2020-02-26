<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('produto.index',compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('produto.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* ---------------- Método 1 --------------------*/
        /*$produto = new Produto();
        $produto->nome = $request->nomeProduto;
        $produto->estoque = $request->estoque;
        $produto->preco = $request->preco;
        $produto->categoria_id = $request->categoria;
        $produto->save();*/

        /* ---------------- Método 2 --------------------*/

        /*$produtoCriado = Produto::create([
            'nome' => $request->nomeProduto,
            'estoque' => $request->estoque,
            'preco' => $request->preco,
            'categoria_id' => $request->categoria,
        ]);*/

        /* ---------------- Método 3 --------------------*/

            Produto::create($request->all());


        return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::find($id);
        $categorias = Categoria::all();

        return view('produto.edit',compact(['produto','categorias']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        $produto->nome = $request->nome;
        $produto->estoque = $request->estoque;
        $produto->preco = $request->preco;
        $produto->categoria_id = $request->categoria_id;
        $produto->update();

        return redirect()->route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produto::destroy($id);
        return redirect()->route('produtos.index');
    }
}
