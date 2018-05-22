<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'contatos';

    public $timestamps = false;
}
