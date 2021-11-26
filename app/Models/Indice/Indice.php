<?php

namespace App\Models\Indice;

use Illuminate\Database\Eloquent\Model;

class Indice extends Model
{
    protected $fillable = [
        'outorgado',
        'data',
        'livro',
        'matricula',
        'fls'
    ];
}
