<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $primaryKey = 'produtoID';
    protected $fillable = [
        'nomeproduto',  
        'descricao',  
        'precounitario',
        'precorevenda', 
        'estoque',      
        'fornecedorID',
        'categoriaID',  
        'codigobarra'  
    ];

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class, 'fornecedorID');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoriaID');
    }
   

   
}



