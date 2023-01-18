@extends('layouts.main')

@section('title', 'lista')

@section('content')

  <div>
    <table>
      <thead>
        <th>Nome</th>
        <th>Intérprete</th>
        <th>Idade</th>
        <th>Alinhamento</th>
        <th>Biografia</th>
      </thead>
      <tbody id="tabela">
        <!-- Informações serão geradas aqui. -->
      </tbody>
    </table>
  </div>
  

@endsection