<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Carts;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart');
        if ($cart == null)
            $cart = [];

        return view('cart.index')->with('cart', $cart);
    }  
    public function cart(){
        $carts= DB::select('select * from carts');
        return view('cart',['carts'=>$carts]);
    }

    public function remove($productCode){
        $cart= Cart::findOrFail($productCode);
        $product= Product::where('productCode', '=', $productCode)->first();
        DB::transaction(function() use($product,$cart){
            $product->quantityInStock=$product->quantityInStock+$cart->quantity;
            $product->save();
            $cart->delete(); 
        });
        return back()->with('success', 'Product removed successfully');
    }
    
    public function addToCart($productCode){
        $product= Product::findOrFail($productCode);
        $cart = Carts::where('productCode', '=', $productCode)->first();
        
        DB::transaction(function() use($product,$cart){
            if($cart!= null) {
                $cart->quantity= $cart->quantity+1;
                $cart->save();
            } else{
                $cart= new Carts();
                $cart->customerNumber = $id = auth()->user()->id;
                $cart->productCode = $product-> productCode;
                $cart->quantity= 1;
                $cart->buyPrice= $product->buyPrice;
                $cart->save();
            }
            // $product->quantityInStock= $product->quantityInStock-1;
            // $product->save();
        });
        return redirect()->back()->with('success', 'Product added to cart successfully!');}






    
}
