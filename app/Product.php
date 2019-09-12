<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'brand_id', 'category_id', 'price', 'discount', 'stock'];

    public function brand() {
        return $this->belongsTo(Brand::class, "brand_id");
      }

    public function category() {
      return $this->belongsTo(Category::class, "category_id");
    }

    public function cart(){
      return $this->belongsToMany(Cart::class, 'cart_id');
  }

}
