<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class UniverseDashboards extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'views',
    ];

    protected $casts = [
        'views' => 'array'
    ];

    public function slug()
    {
        return Str::slug($this->name);
    }
}
