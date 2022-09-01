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
        'valor',
        'visualizados'
    ];

    protected $casts = [
        "especificacoes" => "array"
    ];

    public function imagens()
    {
        return $this->hasMany(Imagem::class);
    }

    public function subcategoria()
    {
      return $this->belongsTo(SubCategoria::class, 'subcategoria_id');
    }
}
