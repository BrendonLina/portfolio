<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitações de médicos</title>
</head>
<body>

    @if(session('admConsultorio'))
        <a href="{{route('/dash-adm')}}">Dashboard</a>
    @endif

    <h3>Médicos a serem avaliados</h3>
    @foreach($confereMedico as $medi)
    <p>{{$medi->nome}}</p>
        {{-- <form method="POST" action="/consultorio/adm/medico/{{ $medi->id }}">
            @csrf
            @method('UPDATE')
            <button class="btn btn-primary" id="btn-excluir" type="submit">Aprovar</button>
        </form> --}}
        <form method="POST" action="/consultorio/adm/medico/{{ $medi->id }}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" id="btn-excluir" type="submit">Reprovar</button>
        </form>
    @endforeach
</body>
</html>