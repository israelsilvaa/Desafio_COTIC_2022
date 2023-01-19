@extends('layouts.main')

@section('title', 'lista')

@section('content')

    <div class="gb-list">
        <table>
            <thead>
                <th>Nome</th>
                <th>Intérprete</th>
                <th>Idade</th>
                <th>Alinhamento</th>
                <th>Biografia</th>
                <th>Criação</th>
            </thead>
            <tbody id="tabela">
                @foreach ($personagensVetor as $mutante)
                    <thead>
                        <td>{{ $mutante->nome }}</td>
                        <td>{{ $mutante->interprete }}</td>
                        <td>{{ $mutante->idade }}</td>
                        <td>{{ $mutante->alinhamento }}</td>
                        <td>{{ $mutante->biografia }}</td>
                        <td>{{ $mutante->created_at }}</td>
                    </thead>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
