<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = "produtos";

    protected $guarded = array("id");

    protected $fillable = [
        'marca_id',
        'subcategoria_id',
        'quantidade',
        'novo',
        'nome',
        'especificacoes',
        'descricao',
        'valor'
    ];

    protected $casts = [
        "especificacoes" => "array"
    ];
}
