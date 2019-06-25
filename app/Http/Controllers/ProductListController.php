<?php

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function list()
    {
        $products = Product::orderBy('created_at', 'desc')->get();

        return view('product_list', compact('products'));
    }
    
    public function getShow($id)
    {
        $product = Product::find($id);
        return view('/product_show', compact('product'));
    }
    
    public function cart()
    {
        return view('cart');
    }
    public function addToCart($id)
    {
 
    }
}
