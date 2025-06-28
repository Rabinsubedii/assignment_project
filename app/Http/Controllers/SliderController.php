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
        // Validate the input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:0,1',
            'image' => 'nullable|file|mimes:jpeg,jpg,png,mp4,webm,ogg|max:102400', // 100MB max
        ]);

        $slider = new Slider;

        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;

            // Move the file to public/uploads/slider
            $file->move(public_path('uploads/slider/'), $filename);

            // Store filename in the image field
            $slider->image = $filename;
        }

        // Set other fields
        $slider->title = $request->input('title');
        $slider->description = $request->input('description');
        $slider->status = $request->input('status');

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
