<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'ip',
        'date',
        'count',
        'user_agent'
    ];

    protected $casts = [
        'user_agent' => 'object',
    ];
}
