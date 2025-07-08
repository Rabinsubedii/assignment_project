<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Product;
class MemberContoller extends Controller
{
    //
    public function index()
    {
  
    $setting = Setting::all();
    $menu= Product::all();
    return view('frontend.memebers.index',compact('menu','setting'));
    }
}
