<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    protected $primaryKey = 'categoriaID';

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }

}
