@extends('layouts.main')

@section('title', 'formulario')

@section('content')



    <div class="col-md-6 offset-md-3 form-back">

        @csrf
        <form action="/crate" method="POST">
            <div class="form-group">
                <label for="name">Nome do personagem</label>
                <input class="form-control" type="text" name="name" placeholder="Digite seu nome" required>
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
                <textarea name="biografia" id="" cols="30" rows="5" class="form-control"
                    placeholder="Nacido em xxxx..."></textarea>
            </div>
            <input type="submit" class="btn btn-success" value="Salvar">
        </form>
    </div>


@endsection