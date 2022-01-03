<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Transaction;
use App\TransactionDetail;
use App\Product;
use Auth;
use App\Build;  

class TransactionController extends Controller
{
    public function getPaymentPage($user_id){
        
        $carts = Cart::with('product')->where('user_id', $user_id)->get();
        $t_type = 'checkout';
        return view('transaction.payment',[
            'user_id' => $user_id,
            'carts' => $carts,
            't_type' => $t_type
        ]);
    }

    public function actionPay(Request $request, $user_id, $t_type, $buynow_productid, $buynow_qty){

        if($request->ongkir == 18000){
            $shipping_type = 'Regular';
        }else{
            $shipping_type = 'Next Day';
        }

        $totalprice = $request->ongkir;

        
        if($t_type == 'checkout'){
            $carts = Cart::with('product')->where('user_id', $user_id)->get();

            foreach($carts as $product){
                $totalprice = $totalprice + ($product->price * $product->quantity);
            }

            Transaction::create([
                'user_id' => $user_id,
                'type' => 'Shop',
                'shipping_type' => $shipping_type,
                'total_price' => $totalprice,
                'payment_method' => $request->paymentmethod
            ]);

            $transaction_id = Transaction::max('id');

            foreach($carts as $cart){
                TransactionDetail::create([
                    'transaction_id' => $transaction_id,
                    'product_id' => $cart->product_id,
                    'quantity' => $cart->quantity,
                    'price' => $cart->price
                ]);
            }

            $carts = Cart::with('product')->where('user_id', $user_id)->delete();
        }else if($t_type == 'buynow'){

            $product = Product::where('id', $buynow_productid)->first();

            $totalprice = $totalprice + ($product->price * $buynow_qty);

            Transaction::create([
                'user_id' => $user_id,
                'type' => 'Shop',
                'shipping_type' => $shipping_type,
                'total_price' => $totalprice,
                'payment_method' => $request->paymentmethod
            ]);

            $transaction_id = Transaction::max('id');

            TransactionDetail::create([
                'transaction_id' => $transaction_id,
                'product_id' => $buynow_productid,
                'quantity' => $buynow_qty,
                'price' => $product->price
            ]);
            
        }else{
            $builds = Build::with('product')->where('user_id', $user_id)->get();

            foreach($builds as $product){
                $totalprice = $totalprice + ($product->price * $product->quantity);
            }

            Transaction::create([
                'user_id' => $user_id,
                'type' => 'Build',
                'shipping_type' => $shipping_type,
                'total_price' => $totalprice,
                'payment_method' => $request->paymentmethod
            ]);

            $transaction_id = Transaction::max('id');

            foreach($builds as $build){
                TransactionDetail::create([
                    'transaction_id' => $transaction_id,
                    'product_id' => $build->product_id,
                    'quantity' => $build->quantity,
                    'price' => $build->price
                ]);
            }

            $build = Build::with('product')->where('user_id', $user_id)->delete();
        }
        
        return redirect(route('home'));
    }

    public function getHistoryPage(){
        $userid =  Auth::user()->id;
        $transactions = Transaction::where('user_id', $userid)->orderBy('created_at', 'DESC')->get();
        $index = 0;
        return view('transaction.transactionhistory', [
            'transactions' => $transactions,
            'index' => $index
        ]);
    }

    public function getDetailPage($transaction_id){
        $index = 0;
        $transactions = TransactionDetail::with('product','trans_head')->where('transaction_id', $transaction_id)->get();
       
        $trans = TransactionDetail::with('product','trans_head')->where('transaction_id', $transaction_id)->first();
        $trans_date = $trans->trans_head->created_at;
        $totalprice = $trans->trans_head->total_price;

        return view('transaction.transactiondetail',[
            'transactions' => $transactions,
            'index' => $index,
            'date' => $trans_date,
            'totalprice' => $totalprice
        ]);
    }

}
