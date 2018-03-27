<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class CheckMotherboardController extends Controller
{
    public function check(Request $request)
    {
        $categories = Category::all();
        $msi = count(Product::where('brand', '=', 'MSI')->get());
        $asus = count(Product::where('brand', '=', 'Asus')->get());
        $msi_checked = null;
        $asus_checked = null;

        if($request->MSI && $request->Asus){
            $products = Product::where('category_id', '=', '3')->get();
            $msi_checked = 'checked';
            $asus_checked = 'checked';
        }elseif($request->MSI){
            $products = Product::where('brand', '=', 'MSI')->get();
            $msi_checked = 'checked';
        }elseif ($request->Asus){
            $products = Product::where('brand', '=', 'Asus')->get();
            $asus_checked = 'checked';
        }elseif (!($request->MSI && $request->Asus)){
            $products = Product::where('category_id', '=', '3')->get();
        }


        return view('checkMotherboard', compact('categories', 'products', 'msi', 'asus', 'msi_checked', 'asus_checked'));
    }
}
