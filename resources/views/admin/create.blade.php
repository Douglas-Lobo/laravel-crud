@extends('layout.site')
@section('titulo', 'Criar produto')

@section('conteudo')

    <h3 class='center'>Criar produto</h3>
<form action="{{route('admin.produtos.create')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">

        <div class="input-field col m6">
            <input type="text" name="nomeproduto" class="@error('nomeproduto') invalid @enderror" value="{{old('nomeproduto')}}" >
            <label>Nome</label>
            @error('nomeproduto')
            <span class="helper-text" data-error="{{$message}}"></span>
            @enderror
        </div>

        <div class="input-field col m6">
            <input type="number" name='precounitario' class="@error('nomeproduto') invalid @enderror" value="{{old('precounitario')}}">
            <label>Preço Unitario</label>
            @error('precounitario')
            <span class="helper-text" data-error="{{$message}}"></span>
            @enderror
        </div>
        
    </div>

    <div class="row">
    
        <div class="input-field col m6">
            <textarea name='descricao' class="materialize-textarea @error('descricao') invalid @enderror">{{old('descricao')}}</textarea>
            <label>Descrição</label>
            @error('descricao')
            <span class="helper-text" data-error="{{$message}}"></span>
            @enderror
        </div>

        <div class="input-field col m6">
            <input type="number" name='codigobarra' class="@error('codigobarra') invalid @enderror" value="{{old('codigobarra')}}">
            <label>Codigo de barra</label>
            @error('codigobarra')
            <span class="helper-text" data-error="{{$message}}"></span>
            @enderror
        </div>
        
    </div>

    <div class="row">
    
        <div class="input-field col m6">
            <input type="number" name='precorevenda' class="@error('precorevenda') invalid @enderror" value="{{old('precorevenda')}}">
            <label>Preço Revenda</label>
            @error('precorevenda')
            <span class="helper-text" data-error="{{$message}}"></span>
            @enderror
        </div>

        <div class="input-field col m6">
            <input type="number" name='estoque' class="@error('estoque') invalid @enderror" value="{{old('estoque')}}">
            <label>Estoque</label>
            @error('estoque')
            <span class="helper-text" data-error="{{$message}}"></span>
            @enderror
        </div>
        
    </div>

    <div class="row">

        <div class="input-field col m6">
            <select name='fornecedorID'>
                @foreach($categorias as $cat)
                <option value="{{ $cat->categoriaID }}">{{ $cat->nomecategoria }}</option>
                @endforeach
            </select>
            <label>Fornecedor</label>
        </div>

        <div class="input-field col m6">
            <select name='categoriaID'>
                @foreach($fornecedores as $fornec)
                <option value="{{ $fornec->fornecedorID }}">{{ $fornec->nomefornecedor }}</option>
                @endforeach
            </select>
            <label>Categoria</label>
        </div>
  
    </div>

    <div class="row">
        
            <div class="input-field col m6">

                <div class="file-field input-field" >
                <div class="btn">
                    <span>Imagem</span>
                    <input type="file" disabled>
                </div>
                <div class="file-path-wrapper" >
                    <input name='imagemgrande' class="file-path validate" type="text" disabled>
                </div>
                </div>
                
            </div>
        
        
        <div class="input-field col m6">
            <p>
                <label>
                    <input name='descontinuado' type="checkbox"/>
                    <span>Descontinuado?</span>
                </label>
            </p>
        </div>
    </div>

    <div class="row center">
            <button class="btn waves-effect waves-light" type="submit">CRIAR</button>
    </div>

</form>
    

@endsection

