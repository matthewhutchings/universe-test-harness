<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniverseQueries extends Model
{
    use HasFactory;


    protected $casts = [
        'filters' => 'array',
        'grouping' => 'array',
        'key' => 'array',
    ];
}
