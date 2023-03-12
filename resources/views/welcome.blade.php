@extends('layouts.main')

@section('title', 'Bem vindo')

@section('content')

<div class="row">
    <div class="d-flex col-md-12 mt-5 justify-content-center">
        <a href="{{ route('form') }}">
            <button class="btn btn-success">Inicio</button>
        </a>
    </div>
</div>

@endsection
