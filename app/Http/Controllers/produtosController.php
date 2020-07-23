<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
class produtosController extends Controller
{
    public function listar(){
        
        $produtos = Produto::paginate(6);
        
        return view('listprod')->with(compact('produtos'));
    }
}
