<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login ADM</title>
</head>
<body>
    <form action="{{route('/dash-adm')}}" method="post">
        @csrf
        {{-- <input type="text" name="nome" placeholder="Seu nome"> //habilitar quando for add um adm--}}
        <input type="email" name="email" placeholder="Seu email">
        <input type="password" name="password" placeholder="Sua senha">
        <button type="submit"> Entrar </button>
    </form>
</body>
</html>