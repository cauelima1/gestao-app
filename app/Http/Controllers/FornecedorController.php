<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    //
    function index()
    {
        $fornecedores = [];
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor A',
                'status' => 'N',
                'cnpj' => '00.000.000/0001-91',
                'ddd' => null,
                'telefone' => '99999-9999',
                'email' => 'fornecedorA@email.com'
            ],
            1 => [
                'nome' => 'Fornecedor B',
                'status' => null,
                'cnpj' => '11.111.111/0001-91',
                'ddd' => '21',
                'telefone' => '88888-8888'
            ],
            2 => [
                'nome' => 'Fornecedor C',
                'status' => null,
                'cnpj' => '22.222.222/0001-91',
                'ddd' => '31',
                'telefone' => null
            ]
        ];

        return view('fornecedor.index', compact('fornecedores'));
    }
}
