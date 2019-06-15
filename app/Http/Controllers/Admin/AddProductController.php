<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;
use App\Product;
use App\Unit;
use Illuminate\Support\Facades\Auth;

class AddProductController extends Controller
{
        
    public function showAddProductForm()
    {
        $units = Unit::pluck('name', 'id');
        return view('admin/add_product', compact('units'));
    }
    
    public function create(ProductRequest $request)
    {
        $product = new Product();
        //$product->product_image = $request->product_image;
        // ファイルがアップロードされたか確認
         if (request()->hasFile('product_image')){
        // fileメソッドでアップロードしたファイルにアクセスし、変数に代入
        $uploaded_image = $request->file('product_image');
        // 時刻、画像イメージの拡張子を組み合わせ、変数に代入
        $image_name = time() . '.' . $request->product_image->getClientOriginalExtension();
        // アップロードしたファイルの保存場所のパスを指定
        $destination_path = public_path('product_images');
        // アップロードしたファイルを指定のフォルダまでmoveメソッドで送り、パラメーター２でファイル名を指定
        $uploaded_image->move($destination_path, $image_name);
        //アップロードしたファイルの名前を上書き
        $product->product_image = str_replace("/home/ec2-user/environment/flupara/public", "", $destination_path) . "/" . $image_name;
    }
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->unit_id = $request->unit_id;
        $product->save();
        
        \Session::flash('flash_message', '商品の追加が完了しました！');
        
        return redirect()->route('add.product');
    }
}
