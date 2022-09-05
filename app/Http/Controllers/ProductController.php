<?php

namespace App\Http\Controllers;
use\App\Models\Product;
use\App\Models\Category;
use\App\Models\Setting;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $product = Product::all();
        $category = Category::all();
        return view('frontend.product.index',compact('product','category'));
    }

    public function create()
    {
        $category = Category::all();
        return view('frontend.product.create',compact('category'));
    }

     public function store(Request $request)
    {
        $product = new Product;
        $product ->name = $request->input('name');
        $product ->shortdescription = $request->input('shortdescription');
        $product ->description = $request->input('description');
        $product ->price = $request->input('price');
        $product ->status = $request->input('status');
        $product ->category_id = $request->input('category_id');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/product/',$filename);
            $product->image=$filename;
        }
        $product->save();
        return redirect()->back()->with('status', 'Product Added');
    }

    public function menu()
    {
        $setting = Setting::all();
        $category = Category::all();
        $menu= Product::all();
        return view('frontend.menu.index',compact('menu','setting','category'));
    }

    // public function menus($id){
    //   $setting = Settings::all();  
    //   $category = Category::all();
    //    $product = Product::all();  
    //     $categorys = Category::find($id);
    //     if(!$product) abort(404);
    //     $images = $product->product_id;
    //     return view('frontend.menu.index',compact('product','category','categorys' ,'setting',));
    // }
    public function edit($id)
    {
        $category = Category::all();
        $product = Product::find($id);
        return view('frontend.product.edit',compact('product','category'));
    }

     public function update(Request $request, $id)
    {
        $product = Product::find($id);
         $product ->name = $request->input('name');
         $product ->shortdescription = $request->input('shortdescription');
         $product ->description = $request->input('description');
         $product ->status = $request->input('status');
         $product ->price = $request->input('price');
         $product ->category_id = $request->input('category_id');
        if($request->hasfile('image'))
        {
             $destination = 'uploads/product/'.$product->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/product/',$filename);
            $product->image=$filename;
        }
        $product->update();
        return redirect()->back()->with('status', 'Product Updated');
    }

      public function destroy($id)
    {
        $product = Product::find($id);
        $destination = 'uploads/product/'.$product->image;
        if(File::exists($destination))
        {
          File::delete($destination);
        }
        $product->delete();
          return redirect()->back()->with('status', 'Services Delete Successfully');
    }


}
