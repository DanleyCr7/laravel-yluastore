<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = "categorias";

    protected $guarded = array("id");

    protected $fillable = [
        'descricao',
    ];

    public function subcategorias()
    {
        return $this->hasMany(Subcategoria::class, 'categoria_id');
    }

    // protected $casts = [
    //     "data" => 'date:Y-m-d',
    //     "serie_id_list" => "array"
    // ];
}
