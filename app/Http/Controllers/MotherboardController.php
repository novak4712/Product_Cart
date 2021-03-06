<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class MotherboardController extends Controller
{
    public function index($id)
    {

        $categories = Category::all();
        $products = Product::where('category_id', '=', $id)->get();
        $asus = count(Product::where('brand', '=', 'Asus')->get());
        $msi = count(Product::where('brand', '=', 'MSI')->get());


        return view('Motherboards', compact('products', 'categories', 'asus', 'msi'));
    }
}
