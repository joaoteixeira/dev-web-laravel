@extends('layouts.app')

@section('conteudo')
  <h1 class="mt-5" style="margin-bottom:30px">Adicionar contato</h1>
  <hr>

  <form action="{{ route('contatos.store') }}" method="post">
    <p>
      Nome <input type="text" name="nome" class="form-control" value="" placeholder="Digite o nome completo">
    </p>

    <p>
      E-mail <input type="email" name="email" class="form-control" value="" placeholder="seuemail@gmail.com">
    </p>

    <p>
      Whatsapp
      <input type="text" name="whatsapp" class="form-control" value="" placeholder="69 99200-0001">
    </p>
    <hr>
    <p>
      Categorias
      <select class="form-control" name="categoria" required>
        <option>Selecione uma categoria</option>

        @foreach($categorias as $item)
          <option value="{{ $item->id_cat }}">{{ $item->nome }}</option>
        @endforeach
        
      </select>
    </p>

    <p>

      {{ csrf_field() }}

      <a href="{{ route('contatos.index') }}" class="btn btn-warning">&laquo; Voltar</a>

      <input type="submit" class="btn btn-success" name="Enviar" value="Salvar contato">
    </p>
  </form>
@endsection
