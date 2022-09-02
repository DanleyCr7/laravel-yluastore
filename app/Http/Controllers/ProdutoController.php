<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;
use App\Models\Categoria;
use App\Models\SubCategoria;

class ProdutoController extends Controller
{
    public function produtoDetalhado($id = null)
    {
        try {
            $produto = Produto::with([
                'imagens',
                'subcategoria.categoria'
            ])->where('id', $id)->first();

            $produto->update(['visualizados' => $produto->visualizados + 1]);

            $produtosRelacionados = Produto::with([
                'subcategoria'
            ])
            ->where('subcategoria_id',  $produto->subcategoria_id)
            ->inRandomOrder()
            ->limit(10)
            ->get();

            $categorias = Categoria::with([
                'subcategorias',
            ])
            ->get();

            $produtosPopulares = Produto::with([
                'subcategoria'
            ])
            ->orderBy('visualizados', 'desc')
            ->inRandomOrder()
            ->limit(5)
            ->get();
    
            return view('produtos.detail', compact(
                'produto', 
                'produtosRelacionados', 
                'produtosPopulares',
                'categorias'
            ));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function comprar($subcategoria_id = null)
    {
        $categorias = Categoria::with([
            'subcategorias',
        ])
        ->get();
        
        $subCategoria = SubCategoria::find(4);

        $produtos = Produto::with([
            'imagens',
            'subcategoria'
        ])
        ->when(!empty($subcategoria_id), function($query) use($subcategoria_id){
            return $query->where('subcategoria_id', $subcategoria_id);
        })
        ->orderBy('visualizados', 'desc')
        ->inRandomOrder()
        ->paginate(10);

        return view('produtos.shop', compact('categorias', 'subCategoria', 'produtos'));
    }
    
    public function carrinho()
    {   
        return view('produtos.cart');
    }
}
