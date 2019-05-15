<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\Input;
use File;

class UserController extends Controller
{
    public function userInsert(Request $request){

    		/*if($request->get('imagem'))
	      {
	        $imagem = $request->get('imagem');
	        $extensao = substr($imagem, -3);
	        if($extensao != 'jpg' && $extensao != 'png')
	        {
	          return back()->with('erro','Erro: Este arquivo não é uma imagem');
	        }
	        $imagem = Input::file('imagem');
	      }*/
	      if($request->password != $request->confirm_password)
	      {
	          return back()->with('erro','As senhas não conferem!');
	      }
	      $username = [
    				'username' => $request->user
    		];
	      $user = Usuario::where($username)->first();
	      if($user)
	      {
    				return back()->with('erro','O nome de usuário escolhido já está sendo usado. Escolha outro.');
    		}
	      $user = new Usuario;
        $user->nome = $request->name;
        $user->email = $request->email;
        $user->username = $request->user;
        $user->senha = env('PASSWORD_HASH') ? bcrypt($request->password) : $request->password;
        $user->imagem = "";
        $user->save();
	      /*if($request->get('imagem'))
	      {
	        File::move($imagem,public_path().'/user-imgs/user-id_'.$user->id.'.'.$extensao);
	        $user->imagem = '/user-imgs/user-id_'.$user->id.'.'.$extensao;
	        $user->save();
	      }*/
        return redirect('login');
    }
}
