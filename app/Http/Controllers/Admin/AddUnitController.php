<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Unit;

class AddUnitController extends Controller
{
    public function showAddUnitForm()
    {
        return view('admin/add_product_unit');
    }
    
    public function create(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);
        $unit = new Unit();
        $unit->name = $request->name;
        
        $unit->save();
        
        
        \Session::flash('flash_message', '単位の追加が完了しました！');
        return redirect()->route('product.unit');
    }
}
