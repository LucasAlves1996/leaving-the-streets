<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Exception;
use Auth;

class LoginController extends Controller
{
    public function auth(Request $request){

    	$data = [
    		'username' => $request->get('user'),
    		'senha' => $request->get('password')
    	];

    	try
    	{
    		if(env('PASSWORD_HASH'))
    		{
    			Auth::attempt($data, false);
    		}
    		else
    		{
    			$user = Usuario::where($data)->first();
    			if(!$user){
    				return back()->with('erro','Credenciais inválidas!');
    			}else{
                    Auth::login($user);
                    $request->session()->put('id_usuario', $user->id_usuario);
                    $request->session()->put('username', $user->username);
    				$request->session()->put('logado', true);
    				return redirect('');
    			}
    		}
    	}
    	catch(Exception $e)
    	{
    		return $e->getMessage();
    	}
    }
}
