<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class HardController extends Controller
{
    public function index($id)
    {

        $categories = Category::all();
        $products = Product::where('category_id', '=', $id)->get();



        return view('Hard', compact('products', 'categories'));
    }
}
