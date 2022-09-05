<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    //
    public function index()
    {
        $testimonial = Testimonial::all();
        return view('frontend.testimonial.index',['testimonial'=>$testimonial]);
    }

    public function create()
    {
        return view('frontend.testimonial.create');
    }

    public function store(Request $request)
    {
       $testimonial = new Testimonial;
         if($request->hasfile('userimage'))
        {
            $file = $request->file('userimage');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/testimonial/',$filename);
            $testimonial->userimage=$filename;
        }
         
        $testimonial ->name = $request->input('name');
        $testimonial ->title = $request->input('title');
        $testimonial ->description = $request->input('description');
          $testimonial ->status = $request->input('status');
        $testimonial->save();
        return redirect()->back()->with('status', 'Testimonial Added');
        
    }

     public function edit ($id)
    {
        $testimonial = Testimonial::find($id);
        return view('frontend.testimonial.edit',compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
         $testimonial = Testimonial::find($id);

        if($request->hasfile('userimage'))
        {
             $testimonialimg = 'uploads/testimonial/'.$testimonial->userimage;
            if(File::exists($testimonialimg))
            {
                File::delete($testimonialimg);
            }
            $file = $request->file('userimage');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/testimonial/',$filename);
            $testimonial->userimage=$filename;
        }
        $testimonial ->name = $request->input('name');
        $testimonial ->description = $request->input('description');
        $testimonial ->title = $request->input('title');
        $testimonial ->status = $request->input('status');
        $testimonial->update();
        return redirect()->back()->with('status', 'testimonial Updated');
    }

     public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonialimg = 'uploads/testimonial/'.$testimonial->userimage;
         if(File::exists($testimonialimg))
        {
          File::delete($testimonialimg);
        }
       
        $testimonial->delete();
        return redirect()->back()->with('status', ' Deleteted');
    }
}
