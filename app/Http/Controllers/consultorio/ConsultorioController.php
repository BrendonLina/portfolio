<?php

namespace App\Http\Controllers\consultorio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\models\Paciente;
use App\models\Medico;
use App\models\AdmConsultorio;
use App\models\Clinica;


class ConsultorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
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
        $clinicas = Clinica::where('planos', '=', 'unimed')->get();
        
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
        $paciente->data_consulta =  $request->data_consulta;

        // $horarioDisponivelMedico = $request->data_consulta;
        

        if($paciente->nome == ""){
            return redirect('../consultorio/agendamento');
        }

        $paciente->save();

        return redirect('../consultorio/agendamento');
        
    }

    public function agendamento()
    {
        // $clinicas = ['Barra da Tijuca', 'Centro', 'Tijuca', 'Meier', 'Caxias'];
        // $planos = ['Unimed', 'Amil', 'Bradesco', 'Assim'];
        // $horarios_consulta = ['08:00','09:00','10:00','11:00','12:00','14:00','15:00','16:00','17:00','18:00','19:00'];
        // $medicos = ['Médico' => 'Mario Silva','Médica' => 'Helena Costa','Médica' => 'Gabriela Swte','Médico' => 'João Carlos'];

        // $todasClinicas = Clinica::all();
       
        $clinicas = Clinica::where('clinicas', 'tijuca')
        ->where('planos', '<>' , 'abcde')
        ->get();

        $medicos = Medico::where('status', '=' , 1)->get();

        return view('../consultorio/agendamento', compact('clinicas','medicos'));
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
        
        $sessao = $this->checkSession();

        if($sessao){
            return redirect('../consultorio/adm/dash-adm');
        }

        return view('../consultorio/cadastro');
        
    }

    public function cadastroPost(Request $request)
    {
        $this->validate($request,[
            'email' => 'unique:medicos'

        ],[
             'email.unique' => 'Email já utilizado', 
        ]);

        $medico = new Medico;
        
        $medico->nome =  $request->nome;
        $medico->idade =  $request->idade;
        $medico->email =  $request->email;
        $medico->cpf =  $request->cpf;
        $medico->password =  bcrypt($request->password);
        $medico->imagem =  $request->imagem;
        $medico->especialidade =  $request->especialidade;
        $medico->horarios_disponiveis =  $request->horarios_disponiveis;
        $medico->status =  0;
        
        
        $medico->save();

        return view('../consultorio/cadastro');
    }

    public function login(){

        $sessao = $this->checkSession();

        if($sessao){
            return redirect('../consultorio/adm/dash-adm');
        }

        return view('../consultorio/adm/login');
    }

    public function logado(Request $request){

        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'

        ],[
            'email.required' => 'Email é obrigatório!', 
            'password.required' => 'Senha é obrigatório!', 
        ]);

        $admConsultorio = trim($request->input('email'));
        $password = trim($request->input('password'));

        $admConsultorio = AdmConsultorio::where('email', $admConsultorio)->first();

        // dd($admConsultorio);

        if(!$admConsultorio)
        {
            return redirect()->back()->with('danger', 'Email ou senha inválida!');
        }

       if(Hash::check($password, $admConsultorio->password))
       {
            $request->session()->put("admConsultorio",[
                'admConsultorio' => $admConsultorio,  
            ]);

            return view('/../consultorio/adm/dash', compact('admConsultorio'));
       }

       else
       {
           return redirect()->back()->with('danger', 'Email ou senha inválida!');
       }

        // return view('../consultorio/adm/dash');
    }

    public function deslogarAdm(){

        session()->forget('admConsultorio');

        return redirect()->route('/consultorio');
    }

    public function verificaSessao(){

        $sessao = $this->checkSession();

        if($sessao == "" ?? null ?? 0){
            return redirect('../consultorio/adm');
        }
      
        if($this->checkSession())
        {          
            return view('/../consultorio/adm/dash');
            
        }
    }

    private function checkSession()
    {
        return session()->has('admConsultorio');
    }

    public function clinica(){

        $sessao = $this->checkSession();

        if($sessao == "" ?? null ?? 0){
            return redirect('../consultorio/adm');
        }
      
        if($this->checkSession())
        {          
            return view('../consultorio/adm/clinica');
            
        }

        // return view('../consultorio/adm/clinica');
    }

    public function clinicaPost(Request $request){

        $this->validate($request,[
            'clinica' => 'required',
            'plano' => 'required'

        ],[
            'clinica.required' => 'Clinica precisa ser preenchida!', 
            'plano.required' => 'Plano precisa ser preenchido', 
        ]);

        $clinica = new Clinica;

        $clinica->clinicas = $request->clinica;
        $clinica->planos = $request->plano;

        $clinica->save();

        // return view('../consultorio/adm/clinica');
        return redirect()->back()->with('success', 'Clinica cadastrada com sucesso!');
        
    }

    public function medico(){

        $sessao = $this->checkSession();

        if($sessao == "" ?? null ?? 0){
            return redirect('../consultorio/adm');
        }

        $confereStatus = Medico::where('status', '=' , 0)->count();

        $confereMedico = Medico::get()
        ->where('nome')
        ->where('status', '=', 0);

        return view('../consultorio/adm/medico', compact('confereMedico','confereStatus'));
    }

    public function reprovar($id){

        Medico::findOrFail($id)->delete();
        
        return redirect()->back()->with('success', 'Médico reprovado com sucesso');
        
    }
    public function aprovar(Request $request, $id){

        $aprovaMedico = Medico::find($id);
        $aprovaMedico->status = 1;

        $aprovaMedico->update();

        return redirect()->back()->with('success', 'Médico aprovado com sucesso!');
        
    }

    public function medicosAtivos(){

        $sessao = $this->checkSession();

        if($sessao == "" ?? null ?? 0){
            return redirect('../consultorio/adm');
        }

        $confereStatus = Medico::where('status', '=' , 1)->count();

        $medicoAtivo = Medico::where('status', '=', 1)->get();
    
        return view('../consultorio/adm/medicosAtivos', compact('medicoAtivo','confereStatus'));
    }

    public function medicosAtivosDelete($id){
        // $medicoAtivo = Medico::where('status', '=', 1);
        Medico::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Médico exluido com sucesso!');
    }

}
