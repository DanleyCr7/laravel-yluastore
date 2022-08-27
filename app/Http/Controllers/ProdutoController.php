<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;

class ProdutoController extends Controller
{
    public function produtoDetalhado($id = null)
    {
            $produto = Produto::with([
                'imagens',
                'subcategoria.categoria'
            ])->find($id);
    
            return view('produtos.detail', compact('produto'));
      
    }
}
