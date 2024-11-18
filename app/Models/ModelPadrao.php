<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelPadrao extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $connection = 'sgc';
    protected $id = "sr_id";

    const CREATED_AT = 'ts_criado_em';
    const UPDATED_AT = 'ts_atualizado_em';
    const DELETED_AT = 'ts_deletado_em';
    
}
