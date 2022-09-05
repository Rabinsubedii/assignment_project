<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Testimonial;
use App\Models\Todayspecial;
use App\Models\Slider;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index()
    {
        $setting = Setting::all();
        $testimonial = Testimonial::where('status',0)->limit(3)->get();
        $todayspecial = Todayspecial::where('status',0)->limit(3)->get();
        $slider = Slider::where('status',0)->limit(4)->get();

        // dd($testimonial);
        return view('frontend.index',compact(['testimonial','slider','setting','todayspecial']));
    }
}
