@extends('layouts.app')

@section('conteudo')

<h1 class="mt-5" style="margin-bottom:30px">Lista de contatos</h1>
<hr>

@if (session()->has('sucesso'))
<div class="alert alert-success">
  {{ session()->get('sucesso') }}
</div>
@endif

@if (session()->has('erro'))
<div class="alert alert-danger">
  {{ session()->get('erro') }}
</div>
@endif


<a href="{{ route('contatos.create') }}" class="btn btn-primary active">Adicionar contato</a>

<table class="table table-hover table-sm" style="margin-top:20px">
  <thead>
    <tr>
      <th>#</th>
      <th>Nome</th>
      <th>Whatsapp</th>
      <th>E-mail</th>
      <th>Opções</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contatos as $item)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $item->nome }}</td>
      <td>{{ $item->whatsapp }}</td>
      <td>{{ $item->email }}</td>
      <td>
        <a href="
        {{ route('contatos.show', $item->id) }}">Detalhes</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
