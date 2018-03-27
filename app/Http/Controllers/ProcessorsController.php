<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class ProcessorsController extends Controller
{
    public function index($id)
    {

        $categories = Category::all();
        $products = Product::where('category_id', '=', $id)->get();
        $amd = count(Product::where('brand', '=', 'AMD')->get());
        $intel = count(Product::where('brand', '=', 'Intel')->get());



        return view('Processors', compact('products', 'categories', 'amd', 'intel'));
    }

}
