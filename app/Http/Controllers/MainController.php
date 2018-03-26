<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;

class MainController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function search(Request $request)
    {
        $categories = Category::all();
        $search = $request->search_data;
        $products = Product::where('name', 'like', '%' . $search . '%')->paginate(2);

        return view('search', ['msg' => 'Результат поиска: ' . $search],  compact('products', 'categories'));
    }
}
