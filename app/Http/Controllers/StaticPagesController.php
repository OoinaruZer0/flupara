<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function getIndex() {
        return view('index');
    }
    
    public function getAbout() {
        return view('about');
    }
}
