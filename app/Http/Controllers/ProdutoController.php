<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;

class ProdutoController extends Controller
{
    public function produtoDetalhado($id = null)
    {
        try {
            $produto = Produto::with([
                'imagens',
                'subcategoria.categoria'
            ])->where('id', $id)->first();
    
            return view('produtos.detail', compact('produto'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
