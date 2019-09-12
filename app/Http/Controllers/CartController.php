<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
   public function index(){
       $carts = Cart::all();
       
       return view("carts", compact("carts"));
   }

   public function detail(User $user){
       $cart = Cart::find($user->id);

       return view("cart", compact("cart"));
   }
}
