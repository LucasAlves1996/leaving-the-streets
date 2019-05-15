<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postagem;
use App\Usuario;

class CustomController extends Controller
{
    public function homePage(Request $request){
        if (!$request->session()->get('logado')) {
            $request->session()->put('logado', false);
        }
        $id_usuario = $request->session()->get('id_usuario');
        $username = $request->session()->get('username');
        $session_logado = $request->session()->get('logado');
        $postagens = self::listarPostagens();
        $usuarios = self::carregarUsuarios();
        return view('home-page', compact('session_logado','id_usuario','username','postagens','usuarios'));
    }

    public function listarPostagens(){
        $postagens = Postagem::all();

        return $postagens;
    }

    public function carregarUsuarios(){
        $usuarios = Usuario::all();

        return $usuarios;
    }

    public function donationPage(Request $request){
    	return view('donation-page')->with('session_logado', $request->session()->get('logado'));
    }

    public function volunteerPage(Request $request){
    	return view('volunteer-page')->with('session_logado', $request->session()->get('logado'));
    }

    public function aboutPage(Request $request){
        return view('about-page')->with('session_logado', $request->session()->get('logado'));
    }

    public function loginPage(Request $request){
        if ($request->session()->get('logado') == true) {
            return redirect('');
        }
    	return view('login-page')->with('session_logado', $request->session()->get('logado'));
    }

    public function signPage(Request $request){
        if ($request->session()->get('logado') == true) {
            return redirect('');
        }
        return view('sign-page')->with('session_logado', $request->session()->get('logado'));
    }
}
