@extends('layouts.app1', ['activePage' => 'frontend.product.index', 'titlePage' => __('Dashboard')])

    @section('content')
    <div class="container content">
        <div class="heading">
            <h3>Add Product</h3>
                <a href="{{url('setting')}}" class="btn btn-success float-right">Back</a>
        </div>
     @if(session ('status'))
    <h4 class="alert alert-success">{{session ('status')}}</h4>
    @endif
        <form action="{{url('add-product')}}" method="POST" enctype="multipart/form-data" class="mt-5">
             @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" required>
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
                <label for="name">Short Description</label>
                <textarea type="text" class="form-control" name="shortdescription" required></textarea>
            </div>

            <div class="form-group mt-3 ">
                <label for="name">Description</label>
                 <textarea type="text" class="form-control" name="description" required></textarea>
            </div>

            <div class="form-group mt-3 ">
                <label for="price">Price</label>
                <input type="number" class="form-control"  name="price" required  > 
            </div>

             <label for="status">Status</label>
            <select name="status" class="form-control" id="">
                <option value="0" name="status">Active</option>
                 <option value="1" name="status">Deactive</option>
            </select>


            <div>
                <input type="file" name="image" >
            </div>

            <div class="form-group">
                <button class="btn btn-primary"> Save </button>
            </div>
        </form>
    </div>
    @endsection
