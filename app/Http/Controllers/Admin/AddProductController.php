<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Unit;

class AddProductController extends Controller
{
        
    public function showAddProductForm()
    {
        $units = Unit::pluck('name');
        return view('admin/add_product', compact('units'));
    }
    
    public function create(Request $request)
    {
        $this->validate($request,[
            'product_name' => 'required',
            'product_description' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);
        
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->unit_id = $request->unit_id;
        $product->save();
        
        return redirect()->route('admin/add_product');
    }
}
