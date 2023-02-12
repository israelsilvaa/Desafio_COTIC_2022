@extends('layouts.main')

@section('title', 'formulario')

@section('content')



    <div class="titulo-pagina">
        login
    </div>
    <div class="informacao-pagina">
        <div style="width: 30%; margin-left: auto; margin-right: auto;">
            <form action="{{ route('site.login') }}" method="POST">
                @csrf               
                <input type="email" value="{{old('usuario')}}" name="usuario" id="" class="borda-preta" placeholder="Email">
                <span class="msg-erro"></span>
                <input type="password" value="{{old('senha')}}" name="senha" id="" class="borda-preta" placeholder="Senha">
                <span class="msg-erro"></span>
                <button type="submit" class="borda-preta">acessar</button>
            </form>
            {{isset($erro) && $erro != '' ? $erro: ''}}
                
        </div>
    </div>

@endsection
