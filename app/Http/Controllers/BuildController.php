<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Auth;
use App\Product;
use App\Build;  

class BuildController extends Controller
{
    public function index(){

        if(!Auth::check()){
            return redirect(route('login'));
        }

        $user_id = Auth::user()->id;
        $build = Build::with('product')->where('user_id', $user_id)->delete();
        $parts = Category::with('product')->where('name','<>', 'laptop')->get();
        $index = 0;
        return view('build',[
            'parts' => $parts,
            'index' => $index
        ]);
    }

    public function getPayPage(Request $request){
        
        $user_id = Auth::user()->id;
        $parts = Category::with('product')->where('name','<>', 'laptop')->get();
        
        foreach($parts as $part){
            
            $part_name = str_replace(' ', '', $part->name);
            $part_qty = $part_name. "_qty";
            $product_id = $request->$part_name;
            $product_qty = $request->$part_qty;

            $product = Product::where('id', $product_id)->first();

            Build::create([
                'user_id' => $user_id,
                'product_id' => $product_id,
                'quantity' => $product_qty,
                'price' => $product->price
            ]);
            
        }

        $carts = Build::with('product')->where('user_id', $user_id)->get();
        $t_type = 'build';
        return view('transaction.payment', [
            'user_id' => $user_id,
            'carts' => $carts,
            't_type' => $t_type
        ]);
    }
}
