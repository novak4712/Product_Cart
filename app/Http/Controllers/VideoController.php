<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class VideoController extends Controller
{
    public function index($id)
    {

        $categories = Category::all();
        $products = Product::where('category_id', '=', $id)->get();



        return view('Video', compact('products', 'categories'));
    }
}
