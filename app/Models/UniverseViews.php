<?php

namespace App\Models;

use App\Traits\UniverseTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniverseViews extends Model
{
    use HasFactory;
    use UniverseTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'model',
        'filters',
    ];

    protected $casts = [
        'filters' => 'array'
    ];
}
