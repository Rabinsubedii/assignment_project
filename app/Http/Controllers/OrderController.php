<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Setting;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
         $setting = Setting::all();
        $order = Order::all();
        return view('frontend.order.index',compact(['order','setting']));
    }

    public function frontorder()
    {   
         $setting = Setting::all();
         $order = Order::all();
         $product = Product::all();
         return view('frontend.order.order',compact('order','product','setting'));
    }
    public function ordered(Request $request){
        $order = Order::all();
        foreach($request->quantity as $key=>$quantity){
        $data = new Order();
        $data->quantity = $quantity;
        $data ->name = $request->input('name');
        $data ->email= $request->input('email');
        $data ->phone= $request->input('phone');
        $data ->address= $request->input('address');
        $data ->user_remarks= $request->input('user_remarks');
        $data ->admin_remarks= $request->input('admin_remarks');
        $data->quantity =$request->quantity[$key];
        $data->product_id =$request->product_id[$key];
        $data->save();
       }
         return redirect()->back()->with('status', 'Order Successfully');
    }

    public function details()
    {
       $order = Order::all();
        return view('frontend.order.index',compact('order'));
    }

    public function edit ($id)
    {
        $data = Order::find($id);
         $product = Product::all();
        return view('frontend.order.edit',compact('data','product'));
    }
    
    public function update(Request $request, $id)
    {
        $data = Order::find($id);
       
        foreach($request->quantity as $key=>$quantity){
        $data = new Order();
        $data->quantity = $quantity;
        $data ->name = $request->input('name');
        $data ->email= $request->input('email');
        $data ->phone= $request->input('phone');
        $data ->address= $request->input('address');
        $data ->user_remarks= $request->input('user_remarks');
        $data ->admin_remarks= $request->input('admin_remarks');
        $data->quantity =$request->quantity[$key];
        $data->product_id =$request->product_id[$key];
        $data->save();
       }
        $data->update();
        return redirect()->back()->with('status', 'Order Updated Successfully');
     
    }


    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
      
        return redirect()->back()->with('status', 'Order Delete Successfully');
    }

}
