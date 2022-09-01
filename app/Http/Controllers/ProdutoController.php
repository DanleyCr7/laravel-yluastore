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

            $produtosRelacionados = Produto::with([
                'subcategoria'
            ])
            ->where('subcategoria_id',  $produto->subcategoria_id)
            ->inRandomOrder()
            ->limit(10)
            ->get();

            $produtosPopulares = Produto::with([
                'subcategoria'
            ])
            ->where('subcategoria_id',  $produto->subcategoria_id)
            ->inRandomOrder()
            ->limit(4)
            ->get();
    
            return view('produtos.detail', compact('produto', 'produtosRelacionados', 'produtosPopulares'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
