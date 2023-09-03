<h3>Meus pacientes</h3>
<p>Pacientes do Dia: {{session()->get('medicoLogado.medico.pacientes')}}</p>



{{-- @dd(session('medicoLogado.medico.pacientes')) --}}
{{-- @foreach($pacientes->pacientes as $paciente)
<p>{{$paciente->nome}}</p>
@endforeach --}}
@foreach($pacientes as $paciente)
@if($paciente->nome == session()->get('medicoLogado.medico.nome'))
<p>{{$paciente->nome}}</p>
@endif
@endforeach