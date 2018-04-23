@extends('layouts.app')

@section('conteudo')

<h1 class="mt-5" style="margin-bottom:30px">Lista de contatos</h1>

<table class="table table-hover table-sm">
  <thead>
    <tr>
      <th>#</th>
      <th>Nome</th>
      <th>Whatsapp</th>
      <th>E-mail</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($contatos as $item)
      <td>{{ $loop->iteration }}</td>
      <td>{{ $item->nome }}</td>
      <td>{{ $item->whatsapp }}</td>
      <td>{{ $item->email }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
