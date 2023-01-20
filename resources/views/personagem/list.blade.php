@extends('layouts.main')

@section('title', 'lista')

@section('content')

    <div class="gb-list">
        <table>
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Intérprete</th>
                <th>Idade</th>
                <th>Alinhamento</th>
                <th>Biografia</th>
                <th>Criação</th>
                <th>Operações</th>
            </thead>
            <tbody id="tabela">
                @foreach ($personagensVetor as $mutante)
                    <thead>
                        <td>{{ $mutante->id }}</td>
                        @if ($mutante->alinhamento == 'super')
                            <td class="red">{{ $mutante->nome }}</td>
                        @else
                            <td class="blue">{{ $mutante->nome }}</td>
                        @endif
                        <td>{{ $mutante->interprete }}</td>
                        <td>{{ $mutante->idade }}</td>
                        @if ($mutante->alinhamento == 'super')
                            <td class="red">{{ $mutante->alinhamento }}</td>
                        @else
                            <td class="blue">{{ $mutante->alinhamento }}</td>
                        @endif
                        <td>{{ $mutante->biografia }}</td>
                        <td>{{ $mutante->created_at }}</td>
                        <div>
                            <td>
                                <a href="#">
                                    <ion-icon name="checkmark-outline"> </ion-icon>
                                </a>
                                <a href="#">
                                    <ion-icon name="create-outline"> </ion-icon>
                                </a>
                                <a href="#">
                                    <ion-icon name="trash-outline"> </ion-icon>
                                </a>
                            </td>
                        </div>
                    </thead>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
