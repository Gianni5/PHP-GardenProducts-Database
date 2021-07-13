<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = [
        'products_name',
        'category_id',
        'products_price'
    ];

    public function categories()
    {
//        return $this->belongsToMany(Categories::class, 'products_categories', 'product_id','category_id');
        return $this->belongsToMany(Category::class);
    }


}
