<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\User;
use App\comentario;




class UsuariosController extends Controller
{
    //
   public function index()
    {
        $usuarios = User::all();
        return view('usuarios.vista_usuarios', compact('usuarios'));
    }
  
    public function edit($id)
    {
        
          $comentarios_usuario = comentario::all();
          $usuario = User::find($id);
          return view('usuarios.perfil_usuario', compact('usuario','comentarios_usuario'));
    }
  
  
    public function comentario($id_usuario_comentario)
    {
        
        $comentario = new comentario();
        $comentario->id_usuario = Auth::User()->id;
        $comentario->id_usuario_comentario = $id_usuario_comentario;
        $comentario->nombre = Auth::User()->name;
        $comentario->comentario=request('txtComentario');
        $comentario->save();
        return  redirect("/usuarios/$id_usuario_comentario/info");
    }
  
}
