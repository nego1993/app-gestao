@extends('site.layouts.site')
@section('title', 'Login')
@section('content')
<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Login</h1>
    </div>

    <div class="informacao-pagina">
        <form action="{{route('login')}}" method="post">
        @csrf
        <input type="text" name="usuario" id="" class="borda-preta">
        <input type="password" name="senha" id="" class="borda-preta">
        <button type="submit" class="borda-preta">Acessar</button>
        </form>
    </div>
</div>

@endsection