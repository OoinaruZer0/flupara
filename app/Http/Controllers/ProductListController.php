<?php

namespace App\Http\Controllers;


use App\Product;
use App\Unit;
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
        $product = Product::find($id);
 
        if(!$product) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // もしカートが空で、これが最初の商品だったら
        if(!$cart) {
 
            $cart = [
                    $id => [
                        "product_image" => $product->product_image,
                        "product_name" => $product->product_name,
                        "product_description" => $product->product_description,
                        "quantity" => 1,
                        "unit" => $product->unit_id,
                        "price" => $product->price,
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', '商品がカートに追加されました！');
        }
 
        // カートが空でない場合は、この商品が存在するかどうかを確認してから数量を増やす
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', '商品がカートに追加されました！');
 
        }
 
        // 商品がカートに存在しない場合は、数量= 1でカートに追加する
        $cart[$id] = [
            "product_image" => $product->product_image,
            "product_name" => $product->product_name,
            "product_description" => $product->product_description,
            "quantity" => 1,
            "unit" => $product->unit_id,
            "price" => $product->price,
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', '商品がカートに追加されました！');
    }
    
    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
 
            $cart[$request->id]["quantity"] = $request->quantity;
 
            session()->put('cart', $cart);
 
            session()->flash('success', 'Cart updated successfully');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$request->id])) {
 
                unset($cart[$request->id]);
 
                session()->put('cart', $cart);
            }
 
            session()->flash('success', 'Product removed successfully');
        }
    }
}
