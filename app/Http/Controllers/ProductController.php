<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Order;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    //
    public function index()
    {
       $setting = Setting::all();
       $product = Product::all();
       return view('frontend.product.index',compact('product','setting'));
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

        $categoryWithProducts = Category::with('products')->get();

        return view('frontend.menu.index',with([
            'data' => $categoryWithProducts,
            'setting' => $setting,
            'menu' => $menu,
        ]));
    }

    public function show(Product $product)
    {
        $setting = Setting::all();
        return view('frontend.menu.product_details', compact('product', 'setting')); // <--- CHANGED PATH HERE
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
        $product->order()->delete();
        $product->delete();
          return redirect()->back()->with('status', 'Services Delete Successfully');
    }


}
