<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
class produtosController extends Controller
{


    public function listar(){
        
        $produtos = Produto::paginate('5');
        return view('listprod', compact('produtos'));
    }
}
