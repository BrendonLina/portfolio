<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/consultorio.css">
    <title>Consultório</title>
</head>
<body>
    <nav class="nav-top">
        <div class="list">
            <select name="clinicas" id="clinicas">
                @foreach($clinicas as $clinica)
                    <option>Clinica -  {{ $clinica->nome }} </option>
                @endforeach
            </select>
        </div>
        <div class="menu-top">
            @if(!session('admConsultorio'))
            @if(!session('medicoLogado'))
            <a href="{{route('/agendamento')}}">Agendamento</a>
            {{-- <a href="{{route('/consultar-agendamento')}}">Consultar Agendamento</a> --}}
            <a href="{{route('/areadomedico')}}">Área do Médico</a>
            @endif
            @endif
            @if(session('admConsultorio'))
            <a href="{{'/consultorio/adm/dash-adm'}}">Dashboard</a>
            @endif
            @if(session('medicoLogado'))
            <a href="{{'/consultorio/dashboard'}}">Dashboard</a>
            @endif
            
        </div>
       <div class="logo">
        <h1>B S N</h1>
            <div class="menu-principal">
                @if(!session('admConsultorio'))
                @if(!session('medicoLogado'))
                <a href="{{route('/consultar-agendamento')}}">Consultar Agendamento</a>
                @endif
                @endif
                <a href="">Especialidades</a>
                {{-- <a href="">Equipe</a> --}}
                <a href="">Fale conosco</a>
            </div>
       </div>
    </nav>
    

    <header class="header">
        <div class="cont-header">
            {{-- <h1>header</h1> --}}
            <img src="img/medico_banner.jpg" alt="medico" width="600" heigth="600">
        </div>
        <div class="cont-header2">
            {{-- <h1>header 2</h1> --}}
            <img src="img/medico_mesa.jpg" alt="medico" width="600" heigth="600">
        </div>
    </header>

    <section>
        <h3>Conteudo</h3>
    </section>
    <footer class="footer">
        <p>Desenvolvido por BSNDIGITALTECH</p>
    </footer>
</body>
</html>