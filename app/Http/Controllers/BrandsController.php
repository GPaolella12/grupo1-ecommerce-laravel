<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Product;
use App\Category;

class BrandsController extends Controller
{
    public function all(){
        $brands = Brand::all();
        return view("brands", compact("brands"));
    }

    public function detail($id){
        $brand = Brand::find($id);

        return view("brand", compact("brand"));
    }

    public function productsOfBrand($id){
        $brands = Brand::all();
        $categories = Category::all();
        $brand = Brand::find($id);
        $products = Product::where("brand_id", $id)->get();

        return view("brand", compact("products", "brand", "categories", "brands"));

    }
}
