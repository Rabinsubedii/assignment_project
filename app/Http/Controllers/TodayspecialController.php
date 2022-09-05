<?php

namespace App\Http\Controllers;
use App\Models\Todayspecial;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class TodayspecialController extends Controller
{
    //
      //
    public function index()
    {
        $todayspecial = Todayspecial::all();
        return view('frontend.todayspecial.index',compact('todayspecial'));
    } 

    public function create()
    {
        return view('frontend.todayspecial.create');
    }

    public function store(Request $request)
    {
       $todayspecial = new Todayspecial;
         if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/todayspecial/',$filename);
            $todayspecial->image=$filename;
        }
         
        $todayspecial ->title = $request->input('title');
        $todayspecial ->description = $request->input('description');
        $todayspecial ->status = $request->input('status');
        $todayspecial->save();
        return redirect()->back()->with('status', 'Today Special Added');
        
    }

     public function edit ($id)
    {
        $todayspecial = Todayspecial::find($id);
        return view('frontend.todayspecial.edit',compact('todayspecial'));
    }

    public function update(Request $request, $id)
    {
         $todayspecial = Todayspecial::find($id);

        if($request->hasfile('image'))
        {
            $tdsliderimg = 'uploads/todayspecial/'.$todayspecial->image;
            if(File::exists($tdsliderimg))
            {
                File::delete($tdsliderimg);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/todayspecial/',$filename);
            $todayspecial->image=$filename;
        }
        $todayspecial ->description = $request->input('description');
        $todayspecial ->title = $request->input('title');
        $todayspecial ->status = $request->input('status');
        $todayspecial->update();
        return redirect()->back()->with('status', 'Today Special Updated');
    }

     public function destroy($id)
    {
        $todayspecial = Todayspecial::find($id);
        $tdsliderimg = 'uploads/todayspecial/'.$todayspecial->image;
         if(File::exists($tdsliderimg))
        {
          File::delete($tdsliderimg);
        }
       
        $todayspecial->delete();
        return redirect()->back()->with('status', ' Deleteted');
    }
}
