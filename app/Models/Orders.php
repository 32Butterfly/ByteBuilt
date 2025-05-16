<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = "orders";

        // User relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // City relationship (using 'city' column as FK)
    public function city()
    {
        return $this->belongsTo(City::class, 'city');
    }

    protected $fillable = [
        'user_id',
        'address',
        'city',
        'phone',
        'product_id',
        'quantity',
        'total_price',
    ];
}