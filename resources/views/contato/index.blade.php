@extends('layouts.app')

@section('conteudo')

<h1 class="mt-5" style="margin-bottom:30px">Lista de contatos</h1>
<hr>

<a href="{{ route('contatos.create') }}" class="btn btn-primary active">Adicionar contato</a>

<table class="table table-hover table-sm" style="margin-top:20px">
  <thead>
    <tr>
      <th>#</th>
      <th>Nome</th>
      <th>Whatsapp</th>
      <th>E-mail</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contatos as $item)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $item->nome }}</td>
      <td>{{ $item->whatsapp }}</td>
      <td>{{ $item->email }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
