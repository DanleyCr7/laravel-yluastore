<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    use HasFactory;

    protected $table = "produtos";

    protected $guarded = array("id");

    protected $fillable = [
        'categoria_id',
        'descricao',
    ];
}
