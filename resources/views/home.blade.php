@extends('layouts.main')

@section('title', 'home')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card text-center">
                    <div class="card-body bg-secondary">
                        <h5 class="card-title">Desafio da COTIC, refatorado em laravel.</h5>
                        <p class="card-text">Consiste basicamente de criar/indicar novos personagens para a 3º temporada da
                            série The Boys.</p>
                        <a href="/personagem/form" class="btn btn-primary">formulario</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
