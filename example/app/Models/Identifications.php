<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identifications extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'img_url',
        'idnumber',
        'bank_name',
        'bank',
        'branch',
        'province'
    ];

    public function user()
    {
        return $this->belongsTo(Users::class);
    }
}
