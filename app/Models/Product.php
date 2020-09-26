<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'filling',
        'price',
        'type_id'
    ];

    public function productType()
    {
        return $this->hasOne(ProductType::class, 'id', 'type_id');
    }
}
