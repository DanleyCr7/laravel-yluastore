<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    use HasFactory;

    protected $table = "carrinho";

    protected $guarded = array("id");

    protected $fillable = [
        'produto_id',
        'cliente_id',
        'compra',
    ];
}
