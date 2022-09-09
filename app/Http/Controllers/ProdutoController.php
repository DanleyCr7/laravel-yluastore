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

    public function comprar(Request $request)
    {   

        $categorias = Categoria::with([
            'subcategorias',
        ])
        ->get();
        
        $produtos = Produto::query()->with([
            'imagens',
            'subcategoria',
        ])
        ->orderBy('visualizados', 'desc')
        ->inRandomOrder();

        if(!empty($request->menor_preco) && !empty($request->maior_preco)){
            $produtos->where('valor', '>=' , $request->menor_preco)->where('valor', '<=' , $request->maior_preco);
        }

        if(!empty($request->categoria)){
            $produtos->whereHas('subcategoria', function($query) use($request){
                return $query->where('categoria_id', $request->categoria);
            });
        }

        if(!empty($request->subcategoria)){
            $produtos->whereHas('subcategoria', function($query) use($request){
                return $query->where('id', $request->subcategoria);
            });
        }

        return view('produtos.shop', [
            'categorias'=> $categorias, 
            'produtos'=> $produtos->paginate(10)
        ]);
    }
    
    public function carrinho()
    {   
        return view('produtos.cart');
    }
}
