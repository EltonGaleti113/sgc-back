<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produtos extends ModelPadrao
{
    protected $fillable = [
        'vc_nome',
        'vc_descricao',
        'fl_preco',
        'fk_quantidade'
    ];
}
