<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class CheckVideoController extends Controller
{
    public function check(Request $request)
    {
        $categories = Category::all();
        $gigabyte = count(Product::where('brand', '=', 'Gigabyte')->get());
        $sapphire = count(Product::where('brand', '=', 'Sapphire')->get());
        $gigabyte_checked = null;
        $sapphire_checked = null;

        if($request->Gigabyte && $request->Sapphire){
            $products = Product::where('category_id', '=', '2')->get();
            $gigabyte_checked = 'checked';
            $sapphire_checked = 'checked';
        }elseif($request->Gigabyte){
            $products = Product::where('brand', '=', 'Gigabyte')->get();
            $gigabyte_checked = 'checked';
        }elseif ($request->Sapphire){
            $products = Product::where('brand', '=', 'Sapphire')->get();
            $sapphire_checked = 'checked';
        }elseif (!($request->Gigabyte && $request->Sapphire)){
            $products = Product::where('category_id', '=', '2')->get();
        }


        return view('checkVideo', compact('categories', 'products', 'gigabyte', 'sapphire', 'gigabyte_checked', 'sapphire_checked'));
    }
}
