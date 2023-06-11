<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/consultorio.css">
    <title>Consultar Agendamento</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-auto w-50">
                <form action="{{route('/consultar-agendamento')}}" method="GET">
                    @csrf

                    <div class="row">
                        <div class="col my-1">
                            <h5>Consultar Agendamento</h5>
                            <input type="text" placeholder="Digite seu cpf" id="consulta_agendamento" name="consulta_agendamento" class="form-control">
                            @error('consulta_agendamento')
                                    <span>{{ $message }}</span>
                                @enderror
                        </div>    
                    </div>

                    <div class="row">
                        <div class="d-grid gap-2 my-1">
                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </div>    
                    </div>

                    <div class="row">
                        <div class="col my-1">
                            <a href="{{route('/consultorio')}}"> Voltar</a>
                        </div>    
                    </div>

                    @if($consultaUsuario)
                    <div class="row">
                        <div class="col my-1">
                            <h5> Resultado da busca: {{$consultaUsuario}}</h5>

                            @foreach ($consultaAgendamento as $consulta )
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Paciente</th>
                                    <th scope="col">Medico</th>
                                    <th scope="col">Data</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                      @for($i = 1; $i <= 1; $i++)     
                                      <th scope="row">{{$i}}</th>
                                      @endfor
                                    <td>{{$consulta->nome}}</td>
                                    <td>{{$consulta->medicos}}</td>
                                    <td>{{$consulta->data_consulta = substr($consulta->data_consulta,0,10)}}</td>
                                  </tr>
                                </tbody>
                              </table>
                            @endforeach
                        </div>    
                    </div>
                    @endif
                </form> 
            </div>
        </div>
    </div>
</body>
</html>