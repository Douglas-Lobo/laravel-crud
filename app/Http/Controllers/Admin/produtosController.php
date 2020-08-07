<?php

namespace App\Http\Controllers\Admin;

use App\Produto;
use App\Categoria;
use App\Fornecedor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProdutoRequest;

class produtosController extends Controller
{


    public function listar(){
        
        $produtos = Produto::paginate('5');
        return view('admin.index', compact('produtos'));
    }

    public function create(){

        $categorias = Categoria::all();
        $fornecedores = Fornecedor::all();

        return view('admin.create', compact('categorias', 'fornecedores'));
    }

    public function store(ProdutoRequest $req){

        $data = $req->all();
        if ( isset($data['descontinuado']) ) {
            $data['descontinuado'] = 1;
        }

        $prod = Produto::create($data);
        
        flash('Produto criado!')->success();
        
        return redirect()->route('admin.produtos.index');
        
        

    }
}
