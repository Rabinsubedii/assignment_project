<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    //
    public function index()
    {
        $slider = Slider::all();
        return view('frontend.slider.index',compact('slider'));
    } 

    public function create()
    {
        return view('frontend.slider.create');
    }

    public function store(Request $request)
    {
       $slider = new Slider;
         if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/slider/',$filename);
            $slider->image=$filename;
        }
         
        $slider ->title = $request->input('title');
        $slider ->description = $request->input('description');
        $slider ->status = $request->input('status');
        $slider->save();
        return redirect()->back()->with('status', 'Slider Added');
        
    }

     public function edit ($id)
    {
        $slider = Slider::find($id);
        return view('frontend.slider.edit',compact('slider'));
    }

    public function update(Request $request, $id)
    {
         $slider = Slider::find($id);

        if($request->hasfile('image'))
        {
            $sliderimg = 'uploads/slider/'.$slider->image;
            if(File::exists($sliderimg))
            {
                File::delete($sliderimg);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/slider/',$filename);
            $slider->image=$filename;
        }
        $slider ->description = $request->input('description');
        $slider ->title = $request->input('title');
        $slider ->status = $request->input('status');
        $slider->update();
        return redirect()->back()->with('status', 'Slider Updated');
    }

     public function destroy($id)
    {
        $slider = Slider::find($id);
        $sliderimg = 'uploads/slider/'.$slider->image;
         if(File::exists($sliderimg))
        {
          File::delete($sliderimg);
        }
       
        $slider->delete();
        return redirect()->back()->with('status', ' Deleteted');
    }
}
