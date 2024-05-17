<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'description',
        'name'
    ];

    public function product(){
        return $this->belongsTo(Products::class);
    }
}
