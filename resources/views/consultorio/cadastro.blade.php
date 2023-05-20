<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
</head>
<body>
    <form action="{{route('/cadastro')}}" method="post">
        @csrf
        
        <input type="text" placeholder="Seu nome" name="nome">
            @error('nome')
                <span>{{$message}}</span>
            @enderror
        <input type="number" placeholder="Idade" name="idade">
            @error('idade')
                <span>{{$message}}</span>
            @enderror
        <input type="email" placeholder="Seu email" name="email">
            @error('email')
                <span>{{$message}}</span>
            @enderror
        <input type="cpf" placeholder="CPF" name="cpf">
            @error('cpf')
                <span>{{$message}}</span>
            @enderror
        <input type="password" placeholder="Digite uma senha" name="password">
            @error('password')
                <span>{{$message}}</span>
            @enderror
        <input type="password" placeholder="Confirme a senha" name="password_confirm">
            @error('password_confirm')
                <span>{{$message}}</span>
            @enderror
        <input type="text" placeholder="sua foto" name="imagem">
            @error('imagem')
                <span>{{$message}}</span>
            @enderror
        <input type="text" placeholder="Especialidade" name="especialidade">
            @error('especialidade')
                <span>{{$message}}</span>
            @enderror
        <input type="text" placeholder="Horario" name="horarios_disponiveis">
        <button type="submit">Cadastrar</button>
        <a href="{{ route('/areadomedico') }}">Já tem cadastro? Entre!</a>
        <a href="{{ route('/consultorio') }}">Voltar</a>
    </form>
    
</body>
</html>