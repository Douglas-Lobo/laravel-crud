<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nomeproduto'           => 'required',
            'descricao'             => 'required|min:8',
            'precounitario'         => 'required',
            'precorevenda'          => 'required',
            'estoque'               => 'required',
            'fornecedorID'          => 'required',
            'categoriaID'           => 'required',
            'codigobarra'           => 'required'

        ];
    }

    public function messages(){
        return[
            'required' => 'Este campo é obrigatório!',
            'min' => 'Este campo deve conter no minimo :min caracteres'

        ];

    }
}
