<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
    ];

    
    // configuracoes gerais do model
    // relacionamentos
    // 1:N, N:N, 1:1

}
