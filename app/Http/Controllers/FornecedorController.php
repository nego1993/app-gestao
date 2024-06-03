<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedor = [ 
            0 => [
            'nome' => 'Fornecedor 1',
            'status' => 'N',
            'cnpj' => '00.000.000/0000-00'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'N',
                ]
        ];

    return view('app.fornecedor.index', compact('fornecedor'));
    }
}
