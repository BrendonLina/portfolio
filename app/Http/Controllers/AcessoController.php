<?php

namespace App\Http\Controllers;

use App\models\Acesso;
use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AcessoController extends Controller
{
    public function index()
    {
        $sessao = $this->checkSession();

        $usuarios = User::all();

        if($sessao == "" ?? null ?? 0){
            return redirect('/login');
        }
      
        if($this->checkSession())
        {          
            return view('/logado', compact('usuarios'));
        }
    }


    private function checkSession()
    {
        return session()->has('adm');
    }

    public function login()
    {
        
        if($this->checkSession())
        {          
            return redirect()->route('/logado');
        }
        
        return view("/login");
    }

    public function logado(Request $request)
    {
      
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'

        ],[
            'email.required' => 'Email é obrigatório!', 
            'password.required' => 'Senha é obrigatório!', 
        ]);

     
       $usuario = trim($request->input('email'));
       $password = trim($request->input('password'));
       
       $usuario = Acesso::where('email', $usuario)->first();

        if(!$usuario)
        {
            return redirect()->back()->with('danger', 'Email ou senha inválida!');
        }

       if(Hash::check($password, $usuario->password))
       {
            session()->put('adm', $usuario);
            return view('/logado', compact('usuario'));
       }

       else
       {
           return redirect()->back()->with('danger', 'Email ou senha inválida!');
       }

    }

    public function deslogar()
    {
        session()->forget('adm');

        return redirect()->route('/home');
    }

    public function store(request $request)
    {
        // $usuario = new Acesso;
      
        // $usuario->email = $request->email;
        // $usuario->password = bcrypt($request->password);

        // $usuario->save();
    }
}
