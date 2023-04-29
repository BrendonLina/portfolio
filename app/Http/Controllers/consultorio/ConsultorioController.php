<?php

namespace App\Http\Controllers\consultorio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\Paciente;
use App\models\Medico;
use App\models\AdmConsultorio;


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
        //add adm consultorio
        // $admConsultorio = new AdmConsultorio;

        // $admConsultorio->nome = trim($request->nome);
        // $admConsultorio->email = trim($request->email);
        // $admConsultorio->password = trim(bcrypt($request->password));

        // $admConsultorio->save();
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

        // $medico = new Medico;

        // $horarioDisponivelMedico = $medico->horaios_disponiveis;

        $paciente = new Paciente;
        
        $paciente->nome =  $request->nome;
        $paciente->email =  $request->email;
        $paciente->cpf =  $request->cpf;
        $paciente->clinica =  $request->clinica;
        $paciente->plano =  $request->plano;
        $paciente->idade =  $request->idade;
        $paciente->telefone =  $request->telefone;
        // $paciente->data_consulta =  $request->data_consulta;

        // $horarioDisponivelMedico = $request->data_consulta;
        

        if($paciente->nome == ""){
            return redirect('../consultorio/agendamento');
        }

        $paciente->save();

        return redirect('../consultorio/agendamento');
        
    }

    public function agendamento()
    {
        $clinicas = ['Barra da Tijuca', 'Centro', 'Tijuca', 'Meier', 'Caxias'];
        $planos = ['Unimed', 'Amil', 'Bradesco', 'Assim'];
        $horarios_consulta = ['08:00','09:00','10:00','11:00','12:00','14:00','15:00','16:00','17:00','18:00','19:00'];
        $medicos = ['Médico' => 'Mario Silva','Médica' => 'Helena Costa','Médica' => 'Gabriela Swte','Médico' => 'João Carlos'];
        
        return view('../consultorio/agendamento', compact('clinicas', 'planos','horarios_consulta','medicos'));
    }

    public function areadomedico()
    {
        return view('../consultorio/areadomedico');
    }

    public function areadomedicoPost(Request $request)
    {
        return view('../consultorio/areadomedico');
    }

    public function cadastro()
    {
        
        return view('../consultorio/cadastro');
    }

    public function cadastroPost(Request $request)
    {
        
       $medico = new Medico;
        
        $medico->nome =  $request->nome;
        $medico->idade =  $request->idade;
        $medico->email =  $request->email;
        $medico->cpf =  $request->cpf;
        $medico->password =  $request->password;
        $medico->imagem =  $request->imagem;
        $medico->especialidade =  $request->especialidade;
        
        
        $medico->save();

        // return view('../consultorio/cadastro');
    }

    public function login(){
        return view('../consultorio/adm/login');
    }

    public function logado(Request $request){

        
        return view('../consultorio/adm/dash');
    }

}
