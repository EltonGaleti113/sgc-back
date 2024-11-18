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

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at'; 
    const DELETED_AT = 'deleted_at';
    
}
