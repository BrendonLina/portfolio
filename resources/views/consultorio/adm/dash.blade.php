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
    <button type="submit" name="sair"><a href="{{route('/deslogar')}}">Sair</a></button>
</body>
</html>