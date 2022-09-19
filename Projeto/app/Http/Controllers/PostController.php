<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        //mostar posts
        return Post::all();
    }

    public function store(Request $request)
    {
        //criar post
        $postagem = new Post;

        $postagem->usuario = $request->usuario;
        $postagem->titulo = $request->titulo;
        $postagem->descricao = $request->descricao;

        $postagem->save();
    }
    
    public function show(Request $request, $id)
    {
        //mostar um post
        return Post::find($id);

    }

    
    public function edit(Request $request,$id)
    {
        //editar post
        $postagem = Post::find($id);

        $postagem->usuario = $request->usuario;
        $postagem->titulo = $request->titulo;
        $postagem->descricao = $request->descricao;

        $postagem->save();
    }
   
    public function destroy(Request $request, $id)
    {
        //remover post
        $postagem = Post::find($id);
        $postagem->delete();
    }
}
