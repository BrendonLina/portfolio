<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/consultorio.css">
    <title>Login ADM</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-auto w-50 form-medico">
                <form action="{{route('/dash-adm')}}" method="post">
                    @csrf

                    <h3 class="row justify-content-center align-items-center">Login Adminstrador</h3>

                    @if(session('danger'))
                        <div class="alert alert-danger">
                            {{session('danger')}}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col my-1">
                            <input type="email" placeholder="Email" id="email" name="email" class="form-control">
                                @error('email')
                                    <span>{{ $message }}</span>
                                @enderror
                        </div>    
                    </div>

                    {{-- <div class="row">
                        <div class="col my-1">
                            <input type="text" placeholder="Seu Nome" id="nome" name="nome" class="form-control"> habilitar quando for add um adm
                        </div>    
                    </div> --}}
                    
                    <div class="row">
                        <div class="col my-1">
                            <input type="password" placeholder="Senha" id="password" name="password" class="form-control">
                                @error('password')
                                    <span>{{ $message }}</span>
                                @enderror
                        </div>    
                    </div>

                    <div class="row">
                        <div class="d-grid gap-2 mt-2">
                            <button type="submit" class="btn btn-primary">Entrar</button>
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
</body>
</html>