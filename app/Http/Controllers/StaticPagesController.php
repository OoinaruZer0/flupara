<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class StaticPagesController extends Controller
{
    public function getIndex() {
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('index', compact('products'));
    }
    
    public function getAbout() {
        return view('about');
    }
    
    public function getLaw() {
        return view('law');
    }
    
    public function getPolicy() {
        return view('policy');
    }
}
