@extends('layouts.main')

@section('title', 'lista')

@section('content')

   
    <div class="col-md-8 offset-md-2 form-back rounded">
        <table class="table table-dark ">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Intérprete</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Alinhamento</th>
                    <th scope="col">Biografia</th>
                    <th scope="col">Criação</th>
                    <th colspan="2">Operações</th>
                    
                </tr>
            </thead>
            <tbody >
                @foreach ($personagensVetor as $mutante)
                    <tr>
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
                        <td >
                            <form action="/personagem/edit/{{$mutante->id}}" method="POST">
                                @csrf
                                @method('POST')
                                <button type="submit" class="btn btn-outline-warning">
                                    <ion-icon name="create-outline">
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="/personagem/delete/{{$mutante->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">
                                    <ion-icon name="trash-outline"></ion-icon>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
