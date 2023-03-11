<?php

namespace App\Models;

use App\Traits\UniverseTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExampleData extends Model
{
    use HasFactory;
    use UniverseTrait;
    protected $fillable = [
        'name',
        'source',
        'status',
        'value',
        'created_at'
    ];
}
