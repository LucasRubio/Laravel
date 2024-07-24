<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome' => 'Random Corporation', 
                'status' => 'N',
                'cnpj' => '00.000.000/0000-00',
                'ddd' => '11',
                'telefone' => '97424-2815'
            ],
            
            1 => [
                'nome' => 'Unidade Corporation', 
                'status' => 'S',
                'cnpj' => '08.891.000/0001-10',
                'ddd' => '19',
                'telefone' => '4606-8700'
            ]
        ];
        //Operadores ternários:

        //condicao ? se verdade : se falso;
        //condicao ? se verdade : (condicao ? se verdade : se falso);
        //$msg =     isset($fornecedores[1]['cnpj']) ? 'CNPJ Informado' : 'CNPJ não informado';

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
