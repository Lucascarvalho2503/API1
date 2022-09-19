<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comentario extends Model
{

    use HasFactory;
    protected $fillabel = [
    'id',
    'descricao',
    'usuario',
    'fk_postagem_id',
    ];
}
