<?php

namespace App\Http\Controllers\admin;

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
        
        return redirect()->route('admin/add_product_unit');
    }
}
