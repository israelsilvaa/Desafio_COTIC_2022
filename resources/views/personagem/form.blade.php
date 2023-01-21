@extends('layouts.main')

@section('title', 'formulario')

@section('content')

    <div class="col-md-5 offset-md-3 bg-dark rounded branco">
        <form action="/personagem" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome" class="branco">Nome do personagem</label>
                <input class="form-control" type="text" name="nome" placeholder="Digite seu nome" required>
            </div>
            <div class="form-group">
                <label for="idade" class="branco">Idade</label>
                <input class="form-control" type="number" name="idade" placeholder="Idade do personagem" required>
            </div>
            <div class="form-group">
                <label for="interprete" class="branco">Interprete(ator/atriz)</label>
                <input class="form-control" type="text" name="interprete"
                    placeholder="Quem vai interpretar seu personagem" required>
            </div>
            <div class="form-group">
                <label for="alinhamento" class="branco">Alinhamento</label>
                <select name="alinhamento" id="" class="form-control">
                    <option value="super">super</option>
                    <option value="the boy">the boy</option>
                </select>
            </div>
            <div class="form-group">
                <label for="biografia" class="branco">Biografia</label>
                <textarea name="biografia" id="" cols="30" rows="2" class="form-control"
                    placeholder="Nacido em xxxx..."></textarea>
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button class="btn btn-outline-success me-md-2" type="submit">Criar personagem</button>
            </div>
        </form>
    </div>


@endsection
