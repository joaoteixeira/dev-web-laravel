<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  protected $primaryKey = 'id_cat';

  protected $table = 'categorias';

  public $timestamps = false;

  public function contatos()
  {
    return $this->hasMany('App\Contato', 'categoria_id', 'id_cat');
  }
}
