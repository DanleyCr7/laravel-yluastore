<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = "clientes";

    protected $guarded = array("id");

    protected $fillable = [
        'user_id',
        'whatsapp',
        'nome',
        'sobrenome',
        'facebook',
        'twiter',
        'instagram',
    ];

}
