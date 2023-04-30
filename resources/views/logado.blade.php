<h1>DASH</h1>

@if(session('adm'))
    <p>Logado</p>
@endif
<p>Seja Bem Vindo : <b>{{session()->get('adm.usuario.nome')}}</b></p>
<button type="submit" name="irhome"><a href="/">HOME</a></button>
<button type="submit" name="sunda"><a href="{{route('/deslogar')}}">Sair</a></button>