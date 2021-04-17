<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome(){
        
        $products = Product::all();
        //var_dump($products);
        return view("welcome" , ["products" => $products]);
    }
}
