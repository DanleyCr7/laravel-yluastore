<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SubCategoria;

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
            
            return view('welcome', compact('disponiveis', 'promocoes', 'subcategorias'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
