<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function brand()
{
    return $this->hasOne('App\Models\Brand', 'id', 'brand_id');
}

public function checkout()
{
    return $this->hasOne('App\Models\Checkout', 'product_id', 'id');
}
}
