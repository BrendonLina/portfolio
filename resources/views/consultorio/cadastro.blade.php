<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/consultorio.css">
    <title>Cadastro</title>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-auto w-50 form-medico">
                <form action="{{route('/cadastro')}}" method="post">
                    @csrf

                    <h3 class="row justify-content-center align-items-center">Cadastro Médico</h3>

                    @if(session('danger'))
                        <div class="alert alert-danger">
                            {{session('danger')}}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col my-1">
                            <input type="text" placeholder="Seu nome" id="nome" name="nome" class="form-control">
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
                            <input type="number" placeholder="Idade" id="idade" name="idade" class="form-control">
                                @error('idade')
                                    <span>{{ $message }}</span>
                                @enderror
                        </div>    
                    </div>

                    <div class="row">
                        <div class="col my-1">
                            <input type="text" placeholder="Cpf" id="cpf" name="cpf" class="form-control">
                                @error('cpf')
                                    <span>{{ $message }}</span>
                                @enderror
                        </div>    
                    </div>

                    <div class="row">
                        <div class="col my-1">
                            <input type="password" placeholder="Senha" id="password" name="password" class="form-control">
                                @error('password')
                                    <span>{{ $message }}</span>
                                @enderror
                        </div>    
                    </div>

                    <div class="row">
                        <div class="col my-1">
                            <input type="password" placeholder="Confirma Senha" id="password_confirm" name="password_confirm" class="form-control">
                                @error('password_confirm')
                                    <span>{{ $message }}</span>
                                @enderror
                        </div>    
                    </div>

                    <div class="row">
                        <div class="col my-1">
                            <input type="text" placeholder="Especialidade" id="especialidade" name="especialidade" class="form-control">
                                @error('especialidade')
                                    <span>{{ $message }}</span>
                                @enderror
                        </div>    
                    </div>

                    <div class="row">
                        <div class="col my-1">
                            <input type="text" placeholder="Foto" id="imagem" name="imagem" class="form-control">
                                @error('imagem')
                                    <span>{{ $message }}</span>
                                @enderror
                        </div>    
                    </div>

                    {{-- <div class="row">
                        <div class="col">
                            
                            <p>Horários disponiveis:</p>
                            <input type="checkbox" id="06:00" name="horarios_disponiveis[]" value="06:00">
                            <label for="horarios_disponiveis">06:00</label>
                            <input type="checkbox" id="07:00" name="horarios_disponiveis[]" value="07:00">
                            <label for="horarios_disponiveis">07:00</label>
                            <input type="checkbox" id="08:00" name="horarios_disponiveis[]" value="08:00">
                            <label for="horarios_disponiveis">08:00</label>
                            <input type="checkbox" id="09:00" name="horarios_disponiveis[]" value="09:00">
                            <label for="horarios_disponiveis">09:00</label>
                            <input type="checkbox" id="10:00" name="horarios_disponiveis[]" value="10:00">
                            <label for="horarios_disponiveis">10:00</label>
                            <input type="checkbox" id="11:00" name="horarios_disponiveis[]" value="11:00">
                            <label for="horarios_disponiveis">11:00</label>
                            <input type="checkbox" id="12:00" name="horarios_disponiveis[]" value="12:00">
                            <label for="horarios_disponiveis">12:00</label>
                            <input type="checkbox" id="13:00" name="horarios_disponiveis[]" value="13:00">
                            <label for="horarios_disponiveis">13:00</label>
                            <input type="checkbox" id="14:00" name="horarios_disponiveis[]" value="14:00">
                            <label for="horarios_disponiveis">14:00</label>
                            <input type="checkbox" id="15:00" name="horarios_disponiveis[]" value="15:00">
                            <label for="horarios_disponiveis">15:00</label>
                            <input type="checkbox" id="16:00" name="horarios_disponiveis[]" value="16:00">
                            <label for="horarios_disponiveis">16:00</label>
                            <input type="checkbox" id="17:00" name="horarios_disponiveis[]" value="17:00">
                            <label for="horarios_disponiveis">17:00</label>
                            <input type="checkbox" id="18:00" name="horarios_disponiveis[]" value="18:00">
                            <label for="horarios_disponiveis">18:00</label>
                           
                        </div>    
                    </div> --}}

                    <div class="row">
                        <div class="d-grid gap-2 mt-2">
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col inscrevase">
                            <a href="{{ route('/areadomedico') }}" class="voltar">Voltar</a>
                        </div>
                    </div>

                </form> 
            </div>
        </div>
    </div>






























    {{-- <form action="{{route('/cadastro')}}" method="post">
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
    </form> --}}
    
</body>
</html>