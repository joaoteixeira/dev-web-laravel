<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'contatos';

    public $timestamps = false;

    public function categoria()
    {
      return $this->belongsTo('App\Categoria', 'categoria_id', 'id_cat');
    }
}
