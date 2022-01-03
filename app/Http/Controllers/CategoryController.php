<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class CategoryController extends Controller
{
    public function category(Request $request, $category){
        $search = $request->get('searchKey');
        if(strcmp( $category, 'showall') == 0){
            $categoryName = 'All Products';
            $products = Product::where("name", 'like' , '%'.$search.'%')->orderBy('created_at', 'DESC')->paginate(8);
        }else{
            $categoryProduct = Category::with('product')->where('name', $category)->first();
            $categoryName = strtoupper($categoryProduct->name);
            $products = Product::where([
                ['category_id', $categoryProduct->id],
                ['name', 'like' , '%'.$search.'%']
            ])->paginate(8);
        }

        $categories = Category::all();


        return view('product.productcategory', [
            'categoryName' => $categoryName,
            'products' => $products,
            'categories' => $categories
        ]);
    }

}
