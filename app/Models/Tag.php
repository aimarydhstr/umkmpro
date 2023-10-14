<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
