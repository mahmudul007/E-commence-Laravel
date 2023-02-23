<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'sku',
        'price',
       
        'brand_id',
        'catagory_id',
        'description',
        'quantity',
        'product_live',
        'unlimited_stock',
        'colors',
        'size',
    ];

  
}
