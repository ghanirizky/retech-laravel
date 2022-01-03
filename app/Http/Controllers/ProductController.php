<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Auth;
use DB;

class ProductController extends Controller
{
    public function detail($category, $name){

        $product = Product::where('name', $name)->first();

        return view('product.productdetail',[
            'product' => $product,
            'category' => $category
        ]);
    }

    public function addToCart(Request $request, $id){

        if(!Auth::check()){
            return redirect(route('login'));
        }

        
        if(strcmp('buynow', $request->button) == 0){
            $carts = Product::where('id', $id)->get(); 
            $user_id = Auth::user()->id;
            $t_type = $request->button;
            $quantity = $request->quantity;

            return view('transaction.payment', [
                'product_id' => $id,
                'user_id' => $user_id,
                'carts' => $carts,
                't_type' => $t_type,
                'quantity' => $quantity
            ]);

        }else{

            $this->validate($request, [
                'quantity' => 'required|numeric'
            ]);
    
            $userId = Auth::user()->id;
            $product = Product::where('id', $id)->first(); 
            $carts = Cart::where('user_id', $userId)->get();
    
            if($carts->contains('product_id', $id)){
                $qty = Cart::with('user', 'product')->where([
                ['user_id', $userId],
                ['product_id', $id]
                ])->first();
    
                $updatedQty = $qty->quantity + $request->quantity;
    
                // if($updatedQty > $product->stock){
                    
                // }
    
                DB::table('carts')->where([
                    ['user_id', $userId],
                    ['product_id', $id] 
                ])->update([
                    'quantity' => $updatedQty
                ]);
                
            }else{
                Cart::create([
                    'user_id' => $userId,
                    'product_id' => $id,
                    'quantity' => $request->quantity,
                    'price' => $product->price
                ]);
            }
    
            return redirect(route('home'));

        }

        
    }

    
}
