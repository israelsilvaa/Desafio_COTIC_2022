@extends('layouts.main')

@section('title', 'formulario')

@section('content')

<div class="col-md-4 offset-md-3 form-back">
    <form action="/personagem/update/{{$personagem->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome do personagem</label>
            <input class="form-control" type="text" name="nome" value="{{$personagem->nome}}" required>
        </div>
        <div class="form-group">
            <label for="idade">Idade</label>
            <input class="form-control" type="number" name="idade" value="{{$personagem->idade}}" required>
        </div>
        <div class="form-group">
            <label for="interprete">Interprete(ator/atriz)</label>
            <input class="form-control" type="text" name="interprete"
            value="{{$personagem->interprete}}" required>
        </div>
        <div class="form-group">
            @if($personagem->alinhamento == 'super')
                <label for="alinhamento">Alinhamento atual <span class="red">{{$personagem->alinhamento}}</span></label>
            @else
                <label for="alinhamento">Alinhamento atual <span class="blue">{{$personagem->alinhamento}}</span></label>
            @endif
            <select name="alinhamento" id="" class="form-control">
                <option value="super">super</option>
                <option value="the boy">the boy</option>
            </select>
        </div>
        <div class="form-group">
            <label for="biografia">Biografia</label>
            <textarea name="biografia" id="" cols="30" rows="2" class="form-control">{{$personagem->biografia}}</textarea>
        </div>
        <div class="btn-personagem">
            <input type="submit" class="btn btn-success" value="Salvar edições do personagem" id="btn-cadastro">
        </div>
    </form>
</div>

@endsection