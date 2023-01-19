@extends('layouts.main')

@section('title', 'formulario')

@section('content')


    <div class="container-fluid">
        @if (session('msg'))
            <p class="msg"> {{ session('msg') }} </p>
        @endif
    </div>
    <div class="col-md-4 offset-md-3 form-back">
        <form action="/personagem" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome do personagem</label>
                <input class="form-control" type="text" name="nome" placeholder="Digite seu nome" required>
            </div>
            <div class="form-group">
                <label for="idade">Idade</label>
                <input class="form-control" type="number" name="idade" placeholder="Idade do personagem" required>
            </div>
            <div class="form-group">
                <label for="interprete">Interprete(ator/atriz)</label>
                <input class="form-control" type="text" name="interprete"
                    placeholder="Quem vai interpretar seu personagem" required>
            </div>
            <div class="form-group">
                <label for="alinhamento">Alinhamento</label>
                <select name="alinhamento" id="" class="form-control">
                    <option value="super">super</option>
                    <option value="the boy">the boy</option>
                </select>
            </div>
            <div class="form-group">
                <label for="biografia">Biografia</label>
                <textarea name="biografia" id="" cols="30" rows="2" class="form-control"
                    placeholder="Nacido em xxxx..."></textarea>
            </div>
            <div class="btn-personagem">
                <input type="submit" class="btn btn-success" value="Salvar" id="btn-cadastro">
            </div>
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div>


@endsection
