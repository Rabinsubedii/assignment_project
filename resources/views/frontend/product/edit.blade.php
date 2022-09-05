@extends('layouts.app1', ['activePage' => 'frontend.product.index', 'titlePage' => __('Dashboard')])

    @section('content')
    <div class="container content">
        <div class="heading">
            <h3>Update Category Product</h3>
                <a href="{{url('products')}}" class="btn btn-success float-right">Back</a>
        </div>
     @if(session ('status'))
    <h4 class="alert alert-success">{{session ('status')}}</h4>
    @endif
         <form action="{{ url('updateproduct/'.$product->id) }}" method="POST"  class="mt-5" enctype="multipart/form-data">
             @csrf
               @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" value="{{$product->name}}" name="name" required>
            </div>

            
            <div class="form-group mt-3 ">
                <label for="name">Short Description</label>
                <input type="text" class="form-control" value="{{$product->description}}" name="shortdescription" required>
            </div>


            <div class="form-group mt-3 ">
                <label for="name">Description</label>
                <input type="text" class="form-control" value="{{$product->description}}" name="description" required>
            </div>


               <div class="form-group">
                  <label for=""> Select Category</label>
            <select name="category_id" class="form-control">
               
                @foreach ( $category as $category )
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            </div>

            <div class="form-group mt-3 ">
                <label for="price">Price</label>
                <input type="number" class="form-control" value="{{$product->price}}" name="price" required >
            </div>

             <label for="status">Status</label>
            <select name="status" class="form-control" id="">
                <option value="0" name="status">Active</option>
                 <option value="1" name="status">Deactive</option>
            </select>

           <label for="">Product Image</label>
        <input type="file" name="image" class="form-control">
        <img src="{{asset('uploads/product/'.$product->image)}}" height="70px" alt="service-image">

            <div class="form-group">
                <button class="btn btn-primary"> Save </button>
            </div>
        </form>
    </div>
    @endsection
