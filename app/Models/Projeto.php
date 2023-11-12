<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;
    protected $fillable = [
        'imagem',
        'alt',
        'titulo',
        'descricao',
        'url',
        'codigo_fonte',
    ];
}
