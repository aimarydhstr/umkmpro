<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Tag;
use App\Models\Wishlist;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'slug', 'image', 'qty', 'price', 'condition', 'discount', 'category_id', 'tag_id', 'seller_id', 'store_id'];

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
