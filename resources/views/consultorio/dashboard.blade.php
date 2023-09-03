<h1>Dashboard</h1>
<p>Seja bem vindo {{session()->get('medicoLogado.medico.nome')}}</p>
<a href="{{route('/consultorio')}}">Home</a>
<a href="{{route('/pacientes')}}">Meus pacientes</a>
<a href="{{route('/horariomedico')}}">Meus horários</a>
<a href="{{route('/dashboard')}}">Configurações</a>
<a href="{{route('/deslogarMedico')}}">Sair</a>
   