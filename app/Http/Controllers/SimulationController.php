<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class SimulationController extends Controller
{
    
    public function index(){

        $parts = Category::with('product')->where('name','<>', 'laptop')->get();
        $index = 0;
        return view('simulation',[
            'parts' => $parts,
            'index' => $index
        ]);

    }
}
