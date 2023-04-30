<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar Clinica</title>
</head>
<body>
    @if(session('admConsultorio'))
    <a href="{{route('/dash-adm')}}">Dashboard</a>
    @endif
    <h1>Clinica</h1>

    @if(session('sucess'))
                <div class="alert alert-sucess">
                    {{session('sucess')}}
                </div>
        @endif

    <form action="{{route('/clinica')}}" method="post">
        @csrf
        
        <input type="text" name="clinica" placeholder="Nome da Clinica">
        @error('clinica')
        <span>{{$message}}</span>
        @enderror
        <input type="text" name="plano" placeholder="Nome do Plano">
        @error('plano')
        <span>{{$message}}</span>
        @enderror
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>