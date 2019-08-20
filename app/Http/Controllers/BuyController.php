<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;
use App\User;

class BuyController extends Controller
{
    public function index(Request $request)
    {
        $details = $request->session()->all();
        $total = 0;
        $units = Unit::all();
        $DeliveryFee = 650;
        $CashOnDeliveryFee = 350;
        
        return view('buy/index', [
            "details" => $details,
            "total" => $total,
            "units" => $units,
            "DeliveryFee" => $DeliveryFee,
            "CashOnDeliveryFee" => $CashOnDeliveryFee,
            ]);
    }
}
