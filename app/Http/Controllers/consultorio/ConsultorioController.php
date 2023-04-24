<?php

namespace App\Http\Controllers\consultorio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Paciente;


class ConsultorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clinicas = ['Barra da Tijuca', 'Centro', 'Tijuca', 'Meier', 'Caxias'];
        
        // if($clinicas && $clinicas != ''){
        //     return response()->json([
        //         'message' => 'Sucesso', 
        //         200,
        //         $clinicas
        //     ]);
        // }

        // else{
        //     return response()->json([
        //         'message' => 'Falha',
        //         500,
        //         $vazio
        //     ]);
        // }
       
        return view('../consultorio/index', compact('clinicas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    public function agendamentoPost(Request $request)
    {

        $paciente = new Paciente;
        
        $paciente->nome =  $request->nome;
        $paciente->email =  $request->email;
        $paciente->cpf =  $request->cpf;
        $paciente->clinica =  $request->clinica;
        $paciente->plano =  $request->plano;
        $paciente->idade =  $request->idade;
        $paciente->telefone =  $request->telefone;
        $paciente->data_consulta =  $request->data_consulta;
        $paciente->hora_consulta =  $request->hora_consulta;

        if($paciente == ""){
            return dd("vazio");
        }

        $paciente->save();

        return redirect('../consultorio/agendamento');
        
    }

    public function agendamento()
    {
        $clinicas = ['Barra da Tijuca', 'Centro', 'Tijuca', 'Meier', 'Caxias'];
        $planos = ['Unimed', 'Amil', 'Bradesco', 'Assim'];
        $horarios_consulta = ['08:00','09:00','10:00','11:00','12:00','14:00','15:00','16:00','17:00','18:00','19:00'];

        return view('../consultorio/agendamento', compact('clinicas', 'planos','horarios_consulta'));
    }
}
