<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transaction;
use App\Product;

class Seller extends User
{
    public function transaction()
    {
      return $this->hasMany(Transaction::class);
    }

    public function products()
    {
      return $this->hasMany(Product::class);
    }
}
