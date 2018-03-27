<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class CheckHardController extends Controller
{
    public function check(Request $request)
    {
        $categories = Category::all();
        $wd = count(Product::where('brand', '=', 'WD')->get());
        $seagate = count(Product::where('brand', '=', 'Seagate')->get());
        $wd_checked = null;
        $seagate_checked = null;

        if($request->WD && $request->Seagate){
            $products = Product::where('category_id', '=', '4')->get();
            $wd_checked = 'checked';
            $seagate_checked = 'checked';
        }elseif($request->WD){
            $products = Product::where('brand', '=', 'WD')->get();
            $wd_checked = 'checked';
        }elseif ($request->Seagate){
            $products = Product::where('brand', '=', 'Seagate')->get();
            $seagate_checked = 'checked';
        }elseif (!($request->WD && $request->Seagate)){
            $products = Product::where('category_id', '=', '4')->get();
        }


        return view('checkHard', compact('categories', 'products', 'wd', 'seagate', 'wd_checked', 'seagate_checked'));
    }
}
