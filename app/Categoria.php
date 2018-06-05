<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  protected $primaryKey = 'id_cat';

  protected $table = 'categorias';

  public $timestamps = false;

}
