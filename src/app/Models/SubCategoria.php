<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    use HasFactory;

    protected $table = "subcategorias";

    protected $guarded = array("id");

    protected $fillable = [
        'categoria_id',
        'descricao',
        'path',
    ];

    public function categoria()
    {
      return $this->belongsTo(Categoria::class);
    }

    public function produtos()
    {
        return $this->hasMany(Produto::class, 'subcategoria_id');
    }
}
