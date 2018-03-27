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
        $gigabyte = count(Product::where('brand', '=', 'Gigabyte')->get());
        $sapphire = count(Product::where('brand', '=', 'Sapphire')->get());


        return view('Video', compact('products', 'categories', 'gigabyte', 'sapphire'));
    }
}
