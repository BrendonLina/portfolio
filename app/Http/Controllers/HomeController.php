<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = null;
        $tempoExp = date("2020");
        $atual = date("Y");
        $exp = $atual - $tempoExp;

        $usuarios = User::all();

        if(session()->has('adm'))
        {          
            return view('home', compact("exp","usuarios","user"));
        }

        return view('home', compact("exp","usuarios","user"));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Chegou aqui";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:3|max:20',
            'email' => 'required|max:255',
            'comentario' => 'min:3|max:50'

        ],[
            'name.required' => 'Nome é obrigatório!', 
            'name.min' => 'Nome tem que ter no minimo 3 letras',
            'name.max' => 'Caracteres de nome máximo de 20 atingido!',  
            'email.required' => 'Email é obrigatório!', 
            'email.max' => 'Caracteres de email máximo atingido!', 
            'comentario.required' => 'Comentário é obrigatório!',
            'comentario.min' => 'Minimo de 3 caracteres!', 
            'comentario.max' => 'Máximo de 50 caracteres!', 
        ]);

        $usuario = new User;
      
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->comentario = $request->comentario;

        $usuario->save();

        return redirect('/');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        
        return redirect('/');
    }

    
}
