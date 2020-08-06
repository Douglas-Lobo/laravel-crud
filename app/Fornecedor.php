<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $primaryKey = 'fornecedorID';
    protected $table = 'fornecedores';

   public function produtos()
   {
       return $this->hasMany(Produto::class);
   }

   public function estado()
   {
       return $this->belongsTo(Estado::class, 'estadoID');
   }
   

}