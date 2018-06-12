@extends('layouts.app')

@section('conteudo')
  <h1 class="mt-5" style="margin-bottom:30px">Listagem por categoria</h1>
  <hr>

  <form action="{{ route('listaPorCategoria') }}" method="get">
    <div class="row">
      <div class="col-sm-8">
        <select class="form-control" name="categoria" required>
          <option value="">Selecione a categoria</option>

          @foreach($categorias as $item)
            <option value="{{ $item->id_cat }}" {{ $item->id_cat == request()->get('id') ? 'selected' : '' }}>{{ $item->nome }}</option>
          @endforeach
        </select>
      </div>
      <div class="col-sm-4">
        <button type="submit" class="btn btn-primary btn-block">Pesquisar</button>
      </div>
    </div>
  </form>

  <div class="row" style="margin-top:10px">
    <div class="col-12">
      @if(!$contatos)
      <div class="alert alert-warning">
        Nenhuma categoria foi selecionada.
      </div>
      @endif

      @if($contatos)
      Total de registros {{ count($contatos) }}
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
              <a href="{{ route('contatos.show', $item->id) }}">Detalhes</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table
      @endif
    </div>
  </div>

@endsection
