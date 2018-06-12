@extends('layouts.app')

@section('conteudo')


  <h1 class="mt-5">Contato <small>Detalhes</small> </h1>
  <hr>

  <p>
    <b>Nome:</b> {{ $contato->nome }}
  </p>

  <p>
    <b>E-mail:</b> {{ $contato->email }}
  </p>

  <p>
    <b>Whatsapp:</b> {{ $contato->whatsapp }}
  </p>

  <hr>

  <p>
    <b>Categoria:</b> {{ $contato->categoria->nome }}
  </p>

  <div class="row">
    <div class="col-sm-6">
      <a href="{{ route('contatos.index') }}" class="btn btn-warning">&laquo; Voltar</a>

      <a href="{{ route('contatos.edit', $contato->id) }}" class="btn btn-success">Editar contato</a>
    </div>

    <div class="col-sm-6 text-right">
      <form action="{{ route('contatos.destroy', $contato->id) }}" method="post">
        <button type="submit" class="btn btn-danger">Excluir contato</button>

        {{ csrf_field() }}
        {{ method_field('DELETE') }}

      </form>
    </div>
  </div>
@endsection
