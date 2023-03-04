<h1>DASH</h1>

@if(session('adm'))
    <p>Logado</p>
@endif
@foreach($usuarios as $usuario)
    <p>Bem vindo {{$usuario->name}}</p>
@endforeach
<button type="submit" name="irhome"><a href="/">HOME</a></button>
<button type="submit" name="sunda"><a href="{{route('/deslogar')}}">Sair</a></button>