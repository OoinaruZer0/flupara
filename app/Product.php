<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_image', 'product_name', 'product_description', 'price', 'stock', 'unit_id',
    ];
    
    public function unit()
    {
        return $this->belongsTo('App\Unit');
    }
}
