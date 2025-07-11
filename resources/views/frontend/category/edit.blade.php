@extends('layouts.app1', ['activePage' => 'frontend.category.index', 'titlePage' => __('Dashboard')])

    @section('content')
    <div class="container content">
        <div class="heading">
            <h3>Update Category</h3>
                <a href="{{url('category')}}" class="btn btn-success float-right">Back</a>
        </div>
     @if(session ('status'))
    <h4 class="alert alert-success">{{session ('status')}}</h4>
    @endif
         <form action="{{ url('updatecategory/'.$category->id) }}" method="POST"  class="mt-5">
             @csrf
               @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" value="{{$category->name}}" name="name" required>
            </div>

            <div class="form-group mt-3 ">
                <label for="name">Description</label>
                <input type="text" class="form-control" value="{{$category->description}}" name="description" required>
            </div>

             <label for="status">Status</label>
            <select name="status" class="form-control" id="">
                <option value="0" name="status">Active</option>
                 <option value="1" name="status">Deactive</option>
            </select>

             <div class="mt-3">
                <input type="file" name="image" id="image">
                 <img src="{{asset('uploads/category/'.$category->image)}}" height="70px" alt="Category Image">
            </div>

            <div class="form-group">
                <button class="btn btn-primary"> Save </button>
            </div>
        </form>
    </div>
    @endsection
