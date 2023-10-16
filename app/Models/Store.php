<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;
use App\Models\Province;
use App\Models\User;
use App\Models\Order;
use App\Models\Service;

class Store extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'seller_id', 'photo', 'province_id', 'city_id', 'address', 'phone', 'is_active'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
