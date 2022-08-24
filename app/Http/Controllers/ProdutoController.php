<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;

class ProdutoController extends Controller
{
    public function produtoDetalhado()
    {
        $produto = Produto::with([
            'imagens',
            'subcategoria.categoria'
        ])->first();

        return view('produtos.detail', compact('produto'));
    }
}
