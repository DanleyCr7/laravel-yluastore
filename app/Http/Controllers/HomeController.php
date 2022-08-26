<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;

class HomeController extends Controller
{
    public function index()
    {
        try {
            $slides = collect([]);
            $disponiveis = collect(['', '', '', '', '', '', '', '', '',]);
            $promocoes = collect(['', '', '', '', '', '', '', '', '',]);
            $categorias = Categoria::all();
            return view('welcome', compact('disponiveis', 'promocoes', 'categorias'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
