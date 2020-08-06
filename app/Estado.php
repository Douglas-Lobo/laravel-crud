<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $primaryKey = 'estadoID';

    public function fornecedores()
    {
        return $this->hasMany(fornecedores::class);
    }


}
