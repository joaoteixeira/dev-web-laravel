@extends('layouts.app')

@section('conteudo')

<h1 class="mt-5" style="margin-bottom:30px">Categorias</h1>
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


<!-- <a href="{{ route('contatos.create') }}" class="btn btn-primary active">Adicionar contato</a> -->

<table class="table table-hover table-sm" style="margin-top:20px">
  <thead>
    <tr>
      <th>#</th>
      <th>Nome</th>
      <th>Opções</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categorias as $item)
    <tr>
      <td width="2">{{ $loop->iteration }}</td>
      <td>{{ $item->nome }}</td>
      <td width="1" class="text-nowrap">
        <a href="#" class="btn btn-sm btn-info">Atualizar</a>
        <a href="#" class="btn btn-sm btn-danger">Excluir</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
