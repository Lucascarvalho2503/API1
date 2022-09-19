<?php

namespace App\Http\Controllers;

use App\Models\comentario;
use App\Http\Requests\StorecomentarioRequest;
use App\Http\Requests\UpdatecomentarioRequest;
use Illuminate\Http\Request;


class ComentarioController extends Controller
{
    public function index()
    {
        //Mostrar todos Posts
        return Comentario::all();
    }

    public function store(Request $request, $id)
    {
        //Criar Post
        $Comentario = new Comentario;

        $Comentario->usuario = $request->usuario;
        $Comentario->descricao = $request->descricao;
        $Comentario->fk_postagem_id = $id;

        $Comentario->save();
    }

    public function show(Request $request, $id)
    {
        //Mostrar um Post
        return Comentario::find($id);
    }

    public function edit(Request $request, $id)
    {
        //Editar Post
        $Comentario=Comentario::find($id);

        $Comentario->usuario = $request->usuario;
        $Comentario->descricao = $request->descricao;
        

        $Comentario->save();
    }

    public function destroy(Request $request, $id)
    {
        //Remover Post
        $Comentario=Comentario::find($id);
        $Comentario->delete();
    }
}