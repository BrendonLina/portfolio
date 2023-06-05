<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/consultorio.css">
    <title>Agendamento</title>
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-auto w-50">
                <form action="{{route('/agendamento')}}" method="post">
                    @csrf

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif

                    @if(session('danger'))
                        <div class="alert alert-danger">
                            {{session('danger')}}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col my-1">
                            <input type="text" placeholder="Nome" id="nome" name="nome" class="form-control">
                                @error('nome')
                                    <span>{{ $message }}</span>
                                @enderror
                        </div>    
                    </div>

                    <div class="row">
                        <div class="col my-1">
                            <input type="email" placeholder="Email" id="email" name="email" class="form-control">
                                @error('email')
                                    <span>{{ $message }}</span>
                                @enderror
                        </div>    
                    </div>
                    
                    <div class="row">
                        <div class="col my-1">
                            <input type="text" placeholder="CPF" id="cpf" name="cpf" class="form-control">
                                @error('cpf')
                                    <span>{{ $message }}</span>
                                @enderror
                        </div>    
                    </div>

                    <div class="row">
                        <div class="col my-1">
                            <label>Data de Nascimento:</label>
                            <input type="date" placeholder="Data de nascimento" id="ano_de_nascimento" name="ano_de_nascimento" class="form-control">
                                @error('ano_de_nascimento')
                                    <span>{{ $message }}</span>
                                @enderror
                        </div>    
                    </div>

                    <div class="row">
                        <div class="col my-1">
                            <input type="text" placeholder="Telefone" id="telefone" name="telefone" class="form-control">
                                @error('telefone')
                                    <span>{{ $message }}</span>
                                @enderror
                        </div>    
                    </div>

                    <div class="row">
                        <div class="col my-1">
                            <label>Data da consulta:</label>
                            <input type="date" placeholder="Telefone" id="data_consulta" name="data_consulta" class="form-control">
                                @error('data_consulta')
                                    <span>{{ $message }}</span>
                                @enderror
                        </div>    
                    </div>

                    <div class="row">
                        <div class="col my-1">
                            <select name="clinicas" id="clinicas" class="form-select">
                                <option selected value="">Selecione uma clinica</option>
                                @foreach($clinicas as $clinica )
                                    <option> {{ $clinica->nome }} - {{$clinica->local}}</option>
                                @endforeach
                            </select>
                            @error('clinicas')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>    
                    </div>

                    <div class="row">
                        <div class="col my-1">
                            <select name="medicos" id="medicos" class="form-select">
                                <option selected value="">Selecione uma médico</option>
                                @foreach($medicos as $medico )
                                    <option> {{ $medico->nome }}</option>
                                @endforeach
                            </select>
                            @error('medicos')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>    
                    </div>

                    <div class="row">
                        <div class="d-grid gap-2 mt-2">
                            <button type="submit" class="btn btn-success">AGENDAR CONSULTA</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col inscrevase">
                            <a href="{{ route('/consultorio') }}" class="voltar">Voltar</a>
                        </div>
                    </div>

                </form> 
            </div>
        </div>
    </div>
    
    {{-- <form action="{{route('/agendamento')}}" method="post">
        @csrf
        <div class="formulario">
        <div class="my-3 w-25">
            <label class="form-label">Nome</label>    
            <input type="text" name="nome" placeholder="Nome" class="form-control">
        </div>

        <div class="my-3 w-25">
            <label class="form-label">Email</label>
            <input type="email" name="email" placeholder="Email" class="form-control">
        </div>

        <div class="my-3 w-25">
            <label class="form-label">Cpf</label>
            <input type="text" name="cpf" placeholder="Cpf" class="form-control">
        </div class="my-3">  

        <div class="my-3 w-25">
            <label class="form-label">Idade</label>
            <input type="text" name="idade" placeholder="Idade" class="form-control">
        </div>

        <div class="my-3 w-25">
            <label class="form-label">Telefone</label>
            <input type="text" name="telefone" placeholder="Telefone" class="form-control">
        </div>

        <div class="my-3 w-25">
            <label class="form-label">Data da Consulta</label>
            <input type="date" name="data_consulta" placeholder="data_consulta" class="form-control">
        </div>

        <div class="my-3 w-25">
            <label class="form-label">Clinicas</label>
            <select name="clinica" id="clinicas_agendamento" class="form-select">
                @foreach($clinicas as $clinica)
                    <option> {{ $clinica->nome }} - {{$clinica->local}} </option>
                @endforeach
            </select>
        </div>

        <div class="my-3 w-25">
            <label class="form-label">Médicos</label>
            <select name="medicos" id="medicos" class="form-select">
                @foreach($medicos as $medico)
                    <option>Dr - {{ $medico->nome }} -  {{ $medico->especialidade }}</option>
                @endforeach
            </select>
        </div>

        {{-- <p>Planos aceitos</p> --}}
        {{-- <select name="plano" id="clinicas_agendamento">
            @foreach($clinicas as $clinica)
                <option>{{ $clinica->planos }}</option>
            @endforeach
        </select> --}}
        {{-- <select>
            @foreach($horarios_consulta as $horario_consulta)
                <option>{{ $horario_consulta }}</option>
            @endforeach
        </select> --}}
        {{-- <div class="my-3 w-25">
            <button type="submit" class="btn btn-success btn-sm">AGENDAR CONSULTA</button>
            <a href="{{route('/consultorio')}}">Voltar</a>
        </div>
    </div>    
    </form> --}}
</body>
</html>