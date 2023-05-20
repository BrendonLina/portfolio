<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Médicos ativos</title>
</head>
<body>
    
    @if(session('admConsultorio'))
        <a href="{{route('/dash-adm')}}">Dashboard</a>
    @endif

    <h3>Medicos ativos</h3>
    
    @if(session('success'))
        <div class="alert alert-sucess">
            {{session('success')}}
        </div>
    @endif

    @if($confereStatus == 0)
        <p>Não há médicos ativos!</p>
    @endif

    @foreach($medicoAtivo as $medico)
    <p>{{$medico->nome}}</p>
    <form method="POST" action="/consultorio/adm/medicosAtivos/{{ $medico->id }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" id="btn-excluir" type="submit">Excluir médico</button>
    </form>

    @endforeach
</body>
</html>