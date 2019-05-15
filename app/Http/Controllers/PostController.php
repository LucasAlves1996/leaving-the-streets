<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Postagem;

class PostController extends Controller
{
  public function postCreate(Request $request){
  		$postagem = new Postagem;
  		$postagem->titulo = $request->get('title');
  		$postagem->conteudo = $request->get('comment');
  		$postagem->id_usuario = $request->session()->get('id_usuario');
  		$postagem->save();
  		return redirect('');
  }
}
