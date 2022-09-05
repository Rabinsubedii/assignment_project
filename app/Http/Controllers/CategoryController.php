<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    //
    public function index()
    {
      $category = Category::all();
     return view('frontend.category.index',['category'=>$category]);
    }

    public function create()
    {
        return view('frontend.category.create');
    }
    
    public function store(Request $request)
    {
        $category = new Category;
        $category ->name = $request->input('name');
        $category ->description = $request->input('description');
        $category ->status = $request->input('status');
          if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/category/',$filename);
            $category->image=$filename;
        }
        $category->save();
        return redirect()->back()->with('status', 'Category Added Successfully');
       
    }
      public function edit ($id)
    {
        $category = Category::find($id);
        return view('frontend.category.edit',compact('category'));
    }
    
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
         $category ->name = $request->input('name');
         $category ->description = $request->input('description');
         $category ->status = $request->input('status');
           if($request->hasfile('image'))
        {
             $catimg = 'uploads/category/'.$category->image;
            if(File::exists($catimg))
            {
                File::delete($catimg);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/category/',$filename);
            $category->image=$filename;
        }
        $category->update();
        return redirect()->back()->with('status', 'Category Updated Successfully');
     
    }
    
    public function destroy($id)
    {
        $category = Category::find($id);
         $catimg = 'uploads/category/'.$category->image;
        if(File::exists($catimg))
        {
          File::delete($catimg);
        }
        $category->delete();
        return redirect()->back()->with('status', 'Category Delete Successfully');
    }
}
