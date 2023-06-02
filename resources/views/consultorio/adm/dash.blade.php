<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - ADM</title>
</head>
<body>
    <h1>Seja bem-vindo</h1>
    <p>Olá {{session()->get('admConsultorio.admConsultorio.nome')}}</p>
    <button type="submit" name="home"><a href="{{route('/consultorio')}}">Home</a></button>
    <button type="submit" name="home"><a href="{{route('/clinica')}}">Adicinar Clinica</a></button>
    <button type="submit" name="home"><a href="{{route('/dash-adm')}}">Gerenciar Clinica</a></button>
    <button type="submit" name="home"><a href="{{route('/medico')}}">Médico pendente</a></button>
    <button type="submit" name="home"><a href="{{route('/medicosAtivos')}}">Médico Ativos</a></button>
    <button type="submit" name="home"><a href="{{route('/dash-adm')}}">Pacientes do Dia</a></button>
    <button type="submit" name="sair"><a href="{{route('/deslogarAdm')}}">Sair</a></button>
</body>
</html>