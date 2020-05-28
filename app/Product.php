<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Seller;
use App\Transaction;

class Product extends Model
{
    const PRODUCT_AVAILABLE = 'available';
    const PRODUCT_UNAVAILABLE = 'unavailable';
    protected $fillable = [
      'name',
      'description',
      'quantity',
      'status',
      'image',
      'seller_id',
    ];

    public function isAvailable()
    {
      return $this->status == Product::PRODUCT_AVAILABLE;
    }
    public function categories()
    {
      return $this->belongsToMany(Category::class);
    }

    public function seller()
    {
      return $this->belongsTo(Seller::class);
    }

    public function transaction()
    {
      return $this->hasMany(Transaction::class);
    }
}
