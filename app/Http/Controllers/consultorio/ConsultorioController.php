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
        $clinicas = Clinica::where('local', '=', 'tijuca')->orderBy('nome')->get();
  
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

        $this->validate($request,[
            'nome' => 'required',
            'email' => 'required',
            'cpf' => 'required',
            'ano_de_nascimento' => 'required',
            'data_consulta' => 'required',
            'clinicas' => 'required',
            'medicos' => 'required',
            'telefone' => 'required',
            

        ],[
            'email.required' => 'Email é obrigatório!', 
            'nome.required' => 'Nome é obrigatório!', 
            'cpf.required' => 'cpf é obrigatório!', 
            'ano_de_nascimento.required' => 'data de nascimento é obrigatório!', 
            'data_consulta.required' => 'data de consulta é obrigatório!', 
            'clinicas.required' => 'clinica é obrigatório!', 
            'medicos.required' => 'médico é obrigatório!', 
            'telefone.required' => 'telefone é obrigatório!', 
        ]);

        $paciente = new Paciente;
        
        $paciente->nome =  $request->nome;
        $paciente->email =  $request->email;
        $paciente->cpf =  $request->cpf;
        $paciente->ano_de_nascimento =  $request->ano_de_nascimento;
        $paciente->telefone =  $request->telefone;
        $paciente->data_consulta =  $request->data_consulta;
        $paciente->clinicas =  $request->clinicas;
        $paciente->medicos =  $request->medicos; 

        if($paciente->clinicas == "" || $paciente->medicos == ""){
            // return redirect('../consultorio/agendamento');
            return redirect()->back()->with('danger', 'Por favor preecha todos os campos!');
        }

        $paciente->save();

        // return redirect('../consultorio/agendamento');
        return redirect()->back()->with('success', 'Agendamento concluido com sucesso!');
        
    }

    public function agendamento()
    {
        
        $clinicas = Clinica::where('id','>=', 0)->orderBy('nome')->get();
        $medicos = Medico::where('status', '=' , 1)->get();
        // $medicos = Clinica::find(3);

        return view('../consultorio/agendamento', compact('clinicas','medicos'));
    }

    public function consultarAgendamento(Request $request){

        $this->validate($request,[
            'consulta_agendamento' => 'min:11|max:11',
            
        ],[
            'consulta_agendamento.min' => 'CPF incompleto!',  
            'consulta_agendamento.max' => 'Por favor digite apenas os 11 digitos do CPF!',  
        ]);

        $consultaUsuario = request('consulta_agendamento');
        $consultaAgendamento = Paciente::where('cpf', 'like', '%'.$consultaUsuario.'%')->get();
    
        if($consultaUsuario){

            $consultaAgendamento = Paciente::where('cpf', 'like', '%'.$consultaUsuario.'%')->get();
            
        }
       
        return view('../consultorio/consultaragendamento', compact('consultaAgendamento','consultaUsuario'));
    }

    public function areadomedico()
    {
        $sessaoMedico = $this->checkSessionMedico();

        $sessao = $this->checkSession();

        if($sessao){
            return redirect('../consultorio');
        }

        if($sessaoMedico){
            return redirect('../consultorio/dashboard');
        }

        return view('../consultorio/areadomedico');

    }

    public function areadomedicoLogar(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'

        ],[
            'email.required' => 'Email é obrigatório!', 
            'password.required' => 'Senha é obrigatório!', 
        ]);


        $medico = trim($request->input('email'));
        $password = trim($request->input('password'));

        $medico = Medico::where('email', $medico)->where('status', 1)->first();

        if(!$medico)
        {
            return redirect()->back()->with('danger', 'Email ou senha inválida!');
        }

       if(Hash::check($password, $medico->password))
       {
            $request->session()->put("medicoLogado",[
                'medico' => $medico,  
            ]);
            
            return view('/../consultorio/dashboard', compact('medico'));
       }

       else
       {
           return redirect()->back()->with('danger', 'Email ou senha inválida!');
       }

        // return view('../consultorio/dashboard');
    }

    public function dashboard(){

        $sessao = $this->checkSessionMedico();

        if($sessao == "" ?? null ?? 0){
            return redirect('../consultorio/areadomedico');
        }

      else{

          return view('../consultorio/dashboard');
      }
    
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
            'email' => 'unique:medicos|required',
            'nome' => 'required',
            'idade' => 'required',
            'cpf' => 'required',
            'password' => 'required',
            'password_confirm' => 'required',
            'imagem' => 'required',
            'especialidade' => 'required',

        ],[
             'email.unique' => 'Email já utilizado', 
             'email.required' => 'Email é obrigatório', 
             'nome.required' => 'Nome é obrigatório', 
             'idade.required' => 'Idade é obrigatório', 
             'cpf.required' => 'Cpf é obrigatório', 
             'password.required' => 'Senha é obrigatório', 
             'password_confirm.required' => 'Confirmar Senha é obrigatório', 
             'imagem.required' => 'Imagem é obrigatório', 
             'especialidade.required' => 'Especialidade é obrigatório', 
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
        if($medico->horarios_disponiveis == ""){
            
            return redirect()->back()->with('danger', 'Pelo menos uma hora deve ser preechida!');
        }
        $medico->status =  0;
        
        
        $medico->save();

        return view('../consultorio/cadastro');
    }

    public function login(){

        $sessao = $this->checkSession();

        $sessaoMedico = $this->checkSessionMedico();

        if($sessaoMedico){
            return redirect('../consultorio');
        }

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

    public function deslogarMedico(){

        session()->forget('medicoLogado');

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

    private function checkSessionMedico()
    {
        return session()->has('medicoLogado');
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
            'local' => 'required'

        ],[
            'clinica.required' => 'Clinica precisa ser preenchida!', 
            'local.required' => 'Local precisa ser preenchido', 
        ]);

        $clinica = new Clinica;

        $clinica->nome = $request->clinica;
        $clinica->local = $request->local;

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
