<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
public function shop(){
        $products = Product::all();
        return view("company.shop.products", compact("products"));
}
public function productDetail($slug){
    $product = Product::where('slug', $slug)->first();
    if($product){
        return view('company.shop.product_detail', compact('product'));
            
    }
    else{
        return redirect() ->back()
        ->with('message', 'Cant view service');
    }

}
}
