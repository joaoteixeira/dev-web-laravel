@extends('layouts.app')

@section('conteudo')
  <h1 class="mt-5" style="margin-bottom:30px">Atualização de contato</h1>
  <hr>

  @if($contato)
    <form action="{{ route('contatos.update', $contato->id) }}" method="post">
    <p>
      Nome <input type="text" name="nome" class="form-control" value="{{ $contato->nome }}" placeholder="Digite o nome completo">
    </p>

    <p>
      E-mail <input type="email" name="email" class="form-control" value="{{ $contato->email }}" placeholder="seuemail@gmail.com">
    </p>

    <p>
      Whatsapp
      <input type="text" name="whatsapp" class="form-control" value="{{ $contato->whatsapp }}" placeholder="69 99200-0001">
    </p>

    <p>

      <!-- Campos Obrigatório -->
      {{ csrf_field() }}
      <!-- Obrigatório para edição (update)  -->
      {{ method_field('PUT') }}

      <a href="{{ route('contatos.index') }}" class="btn btn-warning">&laquo; Voltar</a>

      <input type="submit" class="btn btn-success" name="Enviar" value="Salvar contato">
    </p>
  </form>
  @else
    <div class="alert alert-danger">
      O Contato <b>Código: {{ $id }}</b> não existe. Tente novamente!
    </div>
  @endif
@endsection
