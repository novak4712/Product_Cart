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
    public function show($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        $relations = Product::find($id)->relation()->get();

        return view('OneItem', compact('product', 'categories', 'relations'));
    }
    public function search(Request $request)
    {
        $categories = Category::all();
        $search = $request->search_data;
        $products = Product::where('name', 'like', '%' . $search . '%')->paginate(4);

        return view('search', ['msg' => 'Результат поиска: ' . $search],  compact('products', 'categories'));
    }

}
