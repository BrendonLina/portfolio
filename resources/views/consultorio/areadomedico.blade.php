<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Cadastre-se</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/consultorio.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-auto w-50 form-medico">
                <form action="{{route('/dashboard')}}" method="post">
                    @csrf

                    <h3 class="row justify-content-center align-items-center">Login</h3>

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
                            <a href="{{ route('/cadastro') }}">Inscreva-se</a>
                            <a href="{{ route('/consultorio') }}" class="voltar">Voltar</a>
                        </div>
                    </div>

                </form> 
            </div>
        </div>
    </div>
        {{-- <form action="{{route('/dashboard')}}" method="post">
            @csrf
            









                <h3>Entre</h3>

                @if(session('danger'))
                <div class="alert alert-danger w-25">
                    {{session('danger')}}
                </div>
                @endif
                <div>
                    <input type="email" placeholder="Email" id="email" name="email" class="form-control w-25 my-3">
                        @error('email')
                            <span>{{ $message }}</span>
                        @enderror
                </div>
                <div>    
                <input type="password" placeholder="Senha" id="password" name="password" class="form-control w-25 my-3">
                    @error('password')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-primary w-25 my-3">Entrar</button>
                </div>
                <a href="{{ route('/cadastro') }}">Inscreva-se</a>
            </div>
        </form> --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>