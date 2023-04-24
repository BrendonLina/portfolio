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
        <p>Clinicas</p>
        <select name="clinica" id="clinicas_agendamento">
            @foreach($clinicas as $clinica)
                <option>Clinica - {{ $clinica }}</option>
            @endforeach
        </select>
        <p>Planos aceitos</p>
        <select name="plano" id="clinicas_agendamento">
            @foreach($planos as $plano)
                <option>{{ $plano }}</option>
            @endforeach
        </select>
        <input type="text" name="idade" placeholder="Idade">
        <input type="text" name="telefone" placeholder="Telefone">
        <input type="date" name="data_consulta" placeholder="data_consulta">
        <select>
            @foreach($horarios_consulta as $horario_consulta)
                <option>{{ $horario_consulta }}</option>
            @endforeach
        </select>
        <button type="submit">AGENDAR CONSULTA</button>
    </form>
</body>
</html>