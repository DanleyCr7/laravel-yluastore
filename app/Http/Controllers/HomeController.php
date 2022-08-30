<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SubCategoria;
use App\Models\Produto;

class HomeController extends Controller
{
    public function index()
    {
        try {
            $slides = collect([]);
            $disponiveis = collect(['', '', '', '', '', '', '', '', '',]);
            $promocoes = collect(['', '', '', '', '', '', '', '', '',]);
            $subcategorias = SubCategoria::with([
                'produtos',
                'produtos.imagens',
            ])
            ->whereHas('produtos', function($query){
                return $query != null;
            })
            ->whereNull('deleted_at')
            ->get();

            $produtosRecentes = Produto::with([
                'subcategoria'
            ])
            ->where('novo', 1)
            ->inRandomOrder()
            ->limit(10)
            ->get();

            $produtosDisponiveis = Produto::with([
                'subcategoria'
            ])
            ->where('quantidade', '>', 0)
            ->inRandomOrder()
            ->limit(10)
            ->get();
            
            return view('welcome', compact(
                'disponiveis',
                'promocoes',
                'subcategorias',
                'produtosRecentes',
                'produtosDisponiveis'
            ));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
