<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'product_img',
        'price',
        'quantity',
        'description'
    ];

    public function productImgs(){
        return $this->hasMany(ProductImages::class);
    }

    public function orderDetails(){
        return $this->hasMany(OrderDetails::class);
    }

    public function categories(){
        return $this->hasMany(Categories::class);
    }


}
