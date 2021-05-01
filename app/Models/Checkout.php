<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'product_id');
    }
    public function brand()
    {
      return $this->hasManyThrough('App\Models\Brand', 'App\Models\Product', 'id', 'id');
    }
}
