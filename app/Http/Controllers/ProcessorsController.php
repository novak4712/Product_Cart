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



        return view('Processors', compact('products', 'categories'));
    }
    public function show($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        $relations = Product::find($id)->relation()->get();

        return view('OneProcessor', compact('product', 'categories', 'relations'));
    }
}
