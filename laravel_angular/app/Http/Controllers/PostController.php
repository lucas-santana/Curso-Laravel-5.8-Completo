<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Post::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $post = new Post();
        $path = $request->file('arquivo')->store('imagens','public');
        $post->nome = $request->nome;
        $post->email = $request->email;
        $post->titulo = $request->titulo;
        $post->subtitulo = $request->subtitulo;
        $post->mensagem = $request->mensagem;
        $post->arquivo = $path;
        $post->likes = 0;
        $post->save();

        return response($post,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::disk('public')->delete($post->arquivo);
        $post->delete();

        return 204;
    }

    public function like(Post $post)
    {
        $post->likes++;
        $post->save();

        return $post;
    }
}
