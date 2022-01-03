<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Cart;

class CartController extends Controller
{
    
    public function index(){
        $user_id = Auth::user()->id;
        $carts = Cart::with('product')->where('user_id', $user_id)->paginate(3);
        return view('cart.cart',[
            'carts' => $carts,
            'user_id' => $user_id
        ]);
    }

    public function removeItem($id){
        $user_id = Auth::user()->id;
        
        $product = Cart::where([
            ['user_id', $user_id],
            ['product_id', $id]
        ])->delete();

        return redirect()->back();
    }

    public function editItemPage($id){
        $user_id = Auth::user()->id;

        $product = Cart::with('product')->where([
            ['user_id', $user_id],
            ['product_id', $id]
        ])->first();

        return view('cart.editcart',[
            'product' => $product
        ]);
    }

    public function editItem(Request $request, $id){
        $this->validate($request, [
            'quantity' => 'required|numeric'
        ]);

        $user_id = Auth::user()->id;
        $product = Cart::with('product')->where([
            ['user_id', $user_id],
            ['product_id', $id]
        ])->update([
            'quantity' => $request->quantity 
        ]);

        return redirect(route('user.cart'));

    
    }
}
