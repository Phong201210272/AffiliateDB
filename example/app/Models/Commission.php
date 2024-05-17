<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'commission_rate',
        'level'
    ];

    public function user(){
        return $this->belongsTo(Users::class);
    }
}
