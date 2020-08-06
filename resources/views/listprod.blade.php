@extends('layout.site')
@section('titulo', 'Listagem de Produtos')

@section('conteudo')


<div class='container'>
        
        <div class='row' >
                <table class='highlight'>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Descriçao</th>
                            <th>Categoria</th>
                            <th>Fornecedor</th>
                            <th>Imagem</th>
                            <th>Preço</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produtos as $prod)
                        <tr>
                            <td>{{ $prod->produtoID }}</td>
                            <td>{{ $prod->nomeproduto }}</td>
                            <td>{{ $prod->descricao }}</td>
                            <td>{{ $prod->categoria->nomecategoria }}</td>
                            <td>{{ $prod->fornecedor->nomefornecedor }} {{ $prod->fornecedor->estado->nome}}</td>
                            <td><img width="100" height='100' src="{{ asset($prod->imagemgrande) }}" alt="{{ $prod->nomeproduto }}" ></td>
                            <td>{{ $prod->precounitario }}</td>
                            <td>
                                <a class='btn deep-orange waves-effect waves-light' href="">Editar</a>
                                <a class='btn red waves-effect waves-light' href="">Deletar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            
            </div>

            {{ $produtos->links() }}

    </div>

@endsection