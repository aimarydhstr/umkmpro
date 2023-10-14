<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Role;
use App\Models\Cart;
use App\Models\CouponUsed;
use App\Models\Order;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\Wishlist;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['name', 'username', 'email', 'password', 'role_id', 'photo', 'province', 'city', 'address', 'gender', 'postcode', 'phone', 'is_active'];

    protected $hidden = ['password'];

    protected $casts = ['password' => 'hashed'];

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function cart(){
        return $this->hasMany(Cart::class);
    }
    public function coupon_used(){
        return $this->hasMany(CouponUsed::class);
    }
    public function order(){
        return $this->hasMany(Order::class);
    }
    public function service(){
        return $this->hasMany(Service::class);
    }
    public function transaction(){
        return $this->hasMany(Transaction::class);
    }
    public function wishlist(){
        return $this->hasMany(Wishlist::class);
    }
    public function user(){
        return $this->hasMany(User::class);
    }
}
