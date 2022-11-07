<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Carts;
use App\Http\Controllers\ProductController;

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
        $products = DB::table('products')->get();
        return view('cart',['carts'=>$carts,'products'=>$products]);
    }

    public function product(){
        return $this->belongsTo(Product::class, 'productCode');
    }

    public function checkout($id){
        
        $cart= Carts::where('customerNumber','=',$id);
        DB::transaction(function() use($cart){
            $cart->delete(); 
        });
        return redirect('/')->with('success', 'Product checkout successfully!');
    } 

    public function delete($id){
        $cart= Carts::findOrFail($id);
        $product= Product::where('productCode', '=', $cart->productCode)->first();
        DB::transaction(function() use($product,$cart){
            if($cart->quantity -1 == 0){
                $cart -> delete();
            }else{
                $product->quantityInStock = $product->quantityInStock+1;
                $cart->quantity = $cart->quantity-1; 
                $cart ->save();
                $product->save();
            }
            
        });
        return back()->with('success', 'Product delete successfully');
    }

    public function add($id){
        $cart= Carts::findOrFail($id);
        $product= Product::where('productCode', '=', $cart->productCode)->first();
        DB::transaction(function() use($product,$cart){
            if($cart->quantity+1 < $product -> quantityInStock){
                $product->quantityInStock = $product->quantityInStock - 1;
                $cart->quantity = $cart->quantity + 1; 
                $cart ->save();
                $product->save();
            }
            
        });
        return back()->with('success', 'Product delete successfully');
    }


    public function remove($id){
        $cart= Carts::findOrFail($id);
        $product= Product::where('productCode', '=', $cart->productCode)->
        first();
        DB::transaction(function() use($product,$cart){
            $product->quantityInStock=$product->quantityInStock+$cart->quantity;
            $product->save();
            $cart->delete(); 
        });
        return back()->with('success', 'Product removed successfully');
    }
    
    public function addToCart($productCode){
        $product= Product::findOrFail($productCode);
        $cart = Carts::where('productCode', '=', $productCode)->
        where('customerNumber','=',$userid = auth()->user()->id)->
        first();
        
        DB::transaction(function() use($product,$cart){
            if($cart!= null) {
                $cart->quantity= $cart->quantity+1;
                $cart->save();
            } else{
                $cart= new Carts();
                $cart->customerNumber = $userid = auth()->user()->id;
                $cart->productCode = $product-> productCode;
                $cart->quantity= 1;
                $cart->save();
            }
            $product->quantityInStock= $product->quantityInStock-1;
            $product->save();
        });
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }






    
}
