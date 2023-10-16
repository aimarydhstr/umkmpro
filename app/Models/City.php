<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Store;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function store()
    {
        return $this->hasMany(Store::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
}