<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;

    protected $table = "avaliacoes";

    protected $guarded = array("id");

    protected $fillable = [
        'cliente_id',
        'produto_id',
        'nota',
        'descricao',
    ];

    // protected $casts = [
    //     "data" => 'date:Y-m-d',
    //     "serie_id_list" => "array"
    // ];
}
