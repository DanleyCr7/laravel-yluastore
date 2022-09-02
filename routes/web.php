<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/detalhe/{id?}', [ProdutoController::class, 'produtoDetalhado'])->name('produtos.detalhe');
Route::get('/comprar/{subcategoria_id?}', [ProdutoController::class, 'comprar'])->name('comprar');
Route::get('/carrinho', [ProdutoController::class, 'carrinho'])->name('produtos.carrinho');
// Route::get('detalhe', 'produtoDetalhado', )->name('detalhe')


// Route::controller(ProdutoController::class)
//     ->prefix('produtos')
//     ->as('produtos.')
//     ->group(function () {
//         Route::get('detalhe', 'produtoDetalhado')->name('detalhe');
//     }
// );
