@extends('layouts.app1', ['activePage' => 'frontend.category.index', 'titlePage' => __('Dashboard')])

    @section('content')
    <div class="container content">
        <div class="heading">
            <h3>Update Order</h3>
                <a href="{{url('order')}}" class="btn btn-success float-right">Back</a>
        </div>
     @if(session ('status'))
    <h4 class="alert alert-success">{{session ('status')}}</h4>
    @endif
         <form action="{{ url('update-order/'.$data->id) }}" method="POST"  class="mt-5">
             @csrf
               @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" value="{{$data->name}}" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" value="{{$data->email}}" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="phone" class="form-control" value="{{$data->phone}}" name="phone" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" value="{{$data->Address}}" name="address" required>
            </div>

            <div class="form-group">
                <label for="address">Quantity</label>
                <input type="number" class="form-control" value="{{$data->quantity}}" name="quantity[]" required>
            </div>

               <div class="form-group">
             <label for=""> Product</label>
            <select name="product_id" class="form-control">
                @foreach ( $product as $product )
                <option value="{{$product->id}}">{{$product->name}}</option>
                @endforeach
            </select>
            </div>


            <div class="form-group mt-3 ">
                <label for="name">Remarks</label>
                <textarea type="text" class="form-control" name="user_remarks" required  autofocus > {{$data->user_remarks}}" </textarea>
            </div>

                <div class="form-group mt-3 ">
                <label for="name">Admin</label>
                <textarea type="text" class="form-control" name="user_remarks" required  autofocus > {{$data->admin_remarks}} </textarea>
            </div>



            <div class="form-group">
                <button class="btn btn-primary"> Save </button>
            </div>
        </form>
    </div>
    @endsection
