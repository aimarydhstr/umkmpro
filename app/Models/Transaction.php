<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'user_id', 'coupon_used_id', 'subtotal', 'discount', 'tax', 'total', 'pay_image', 'status_id'];

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function coupon_used()
    {
        return $this->belongsTo(CouponUsed::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
