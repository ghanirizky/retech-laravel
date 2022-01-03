<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bestSeller = Product::with('category')->orderBy("sold", "DESC")->take(4)->get();
        $ourProduct = Product::inRandomOrder()->limit(8)->get();
        
        return view('home.homepage', [
            'bestSeller' => $bestSeller,
            'ourProduct'=> $ourProduct,
        ]);
    }


}
