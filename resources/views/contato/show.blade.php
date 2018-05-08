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

  <p>
    <a href="{{ route('contatos.index') }}" class="btn btn-warning">&laquo; Voltar</a>
  </p>
@endsection
