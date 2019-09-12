<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Brand;

class CategoriesController extends Controller
{
    public function all() {
        $categories = Category::all();
    
        return view("categories", compact("categories"));
      }
    
      public function detail($id) {
        $category = Category::find($id);
    
        return view("category", compact("category"));
      }

      public function productsOfCategory($id){
          $brands = Brand::all();
          $categories = Category::all();
          $category = Category::find($id);
          $products = Product::where("category_id", $id)->get();

          return view("category", compact("products", "category", "brands", "categories"));

      }
}
