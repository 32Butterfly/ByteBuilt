<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'specs',
        'price',
        'image',
    ];

    protected $casts = [
        'specs' => 'array', // Automatically cast specs to an array
    ];
}
