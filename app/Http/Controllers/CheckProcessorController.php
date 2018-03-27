<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class CheckProcessorController extends Controller
{
    public function check(Request $request)
    {
        $categories = Category::all();
        $amd = count(Product::where('brand', '=', 'AMD')->get());
        $intel = count(Product::where('brand', '=', 'Intel')->get());
        $amd_checked = null;
        $intel_checked = null;

        if($request->AMD && $request->Intel){
            $products = Product::where('category_id', '=', '1')->get();
            $amd_checked = 'checked';
            $intel_checked = 'checked';
        }elseif($request->AMD){
            $products = Product::where('brand', '=', 'AMD')->get();
            $amd_checked = 'checked';
        }elseif ($request->Intel){
            $products = Product::where('brand', '=', 'Intel')->get();
            $intel_checked = 'checked';
        }elseif (!($request->AMD && $request->Intel)){
            $products = Product::where('category_id', '=', '1')->get();
        }


        return view('checkProcessor', compact('categories', 'products', 'amd', 'intel', 'amd_checked', 'intel_checked'));
    }
}