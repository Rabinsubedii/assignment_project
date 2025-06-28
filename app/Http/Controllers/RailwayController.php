<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use App\Models\Product;
use Illuminate\Http\Request;

class RailwayController extends Controller
{
    //
    public function index()
    {
    $setting = Setting::all();
    $menu= Product::all();
    return view('frontend.railway.index',compact('menu','setting'));
    }

}
