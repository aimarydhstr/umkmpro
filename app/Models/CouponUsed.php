<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Coupon;
use App\Models\Transaction;

class CouponUsed extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'coupon_id', 'is_used'];

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function coupon(){
        return $this->belongsTo(Coupon::class);
    }
}
