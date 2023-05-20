<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agendamento</title>
</head>
<body>
    <form action="{{route('/agendamento')}}" method="post">
        @csrf
        <input type="text" name="nome" placeholder="Nome">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="cpf" placeholder="Cpf">
        <input type="text" name="idade" placeholder="Idade">
        <input type="text" name="telefone" placeholder="Telefone">
        <input type="date" name="data_consulta" placeholder="data_consulta">
        <select>
            @foreach($medicos as $medico)
                <option>Dr - {{ $medico->nome }} </option>
            @endforeach
        </select>
        <p>Clinicas</p>
        <select name="clinica" id="clinicas_agendamento">
            @foreach($clinicas as $clinica)
                <option> {{ $clinica->nome }} - {{$clinica->local}} </option>
            @endforeach
        </select>
        <p>Planos aceitos</p>
        <select name="plano" id="clinicas_agendamento">
            {{-- @foreach($clinicas as $clinica)
                <option>{{ $clinica->planos }}</option>
            @endforeach --}}
        </select>
        {{-- <select>
            @foreach($horarios_consulta as $horario_consulta)
                <option>{{ $horario_consulta }}</option>
            @endforeach
        </select> --}}
        <button type="submit">AGENDAR CONSULTA</button>
        <a href="{{route('/consultorio')}}">Voltar</a>
    </form>
</body>
</html>