<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;

class Users extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_id',
        'username',
        'password',
        'phone',
        'referral_code',
        'referrer_id',
        'total_revenue',
        'wallet',
        'bonus_wallet'
    ];

    public function role(){
        return $this -> belongsTo(Roles::class);
    }

    public function transactions(){
        return $this->hasMany(Transactions::class);
    }

    public function commissions(){
        return $this->hasMany(Commission::class);
    }

    public function identifications(){
        return $this->hasOne(Identifications::class);
    }

    public function orders(){
        return $this->hasMany(Orders::class);
    }
}
