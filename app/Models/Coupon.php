<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CouponUsed;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'code', 'discount', 'started_at', 'finished_at', 'is_active'];

    public function coupon_used()
    {
        return $this->hasMany(CouponUsed::class);
    }
}
