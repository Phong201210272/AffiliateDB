<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'total_money'
    ];

    public function user(){
        return $this->belongsTo(Users::class);
    }

    public function orderDetails(){
        return $this->hasMany(OrderDetails::class);
    }
}
