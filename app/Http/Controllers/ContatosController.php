<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $contatos = \App\Contato::orderBy('id', 'DESC')->get();

        $contatos = \App\Contato::all();

        return view('contato.index', array('contatos' => $contatos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = \App\Categoria::all();

        return view('contato.create', compact('categorias'));

        // return view('contato.create', array('categorias' => $categorias));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contato = new \App\Contato();
        $contato->nome = $request->nome;
        $contato->email = $request->email;
        $contato->whatsapp = $request->whatsapp;
        $contato->categoria_id = $request->categoria;
        $contato->save();

        $request->session()->flash('sucesso', 'Contato adicionado com sucesso!');

        return redirect()->route('contatos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
      $contato = \App\Contato::with('categoria')->find($id);

      if($contato) {
        return view('contato.show', array('contato' => $contato));
      } else {
        $request->session()->flash('erro', "O Contato Id:{$id} não existe!");

        return redirect()->route('contatos.index');
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $contato = \App\Contato::with('categoria')->find($id);

      $categorias = \App\Categoria::all();

      return view('contato.edit', array('contato' => $contato, 'id' => $id, 'categorias' => $categorias));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $contato = \App\Contato::find($id);
      $contato->nome = $request->nome;
      $contato->email = $request->email;
      $contato->whatsapp = $request->whatsapp;
      $contato->categoria_id = $request->categoria;

      $contato->save();

      $request->session()->flash('sucesso', "O Contato {$contato->nome} foi atualizado com sucesso!");

      return redirect()->route('contatos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
      $contato = \App\Contato::find($id);
      $nome = $contato->nome;

      $contato->delete();

      $request->session()->flash('sucesso', "O Contato {$nome} foi excluido com sucesso!");

      return redirect()->route('contatos.index');
    }

}
