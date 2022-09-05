@extends('layouts.app1', ['activePage' => 'frontend.todayspecial.index', 'titlePage' => __('Dashboard')])

    @section('content')
    <div class="container content">
        <div class="heading">
            <h3>Edit Slider</h3>
                <a href="{{url('todayspecial')}}" class="btn btn-success float-right">Back</a>
        </div>
     @if(session ('status'))
    <h4 class="alert alert-success">{{session ('status')}}</h4>
    @endif
         <form action="{{ url('update-todayspecial/'.$todayspecial->id) }}" method="POST" enctype="multipart/form-data"  class="mt-5">
             @csrf
               @method('PUT')

            <div class="form-group mt-3 ">
                <label for="title">Title</label>
                <input type="text" value="{{$todayspecial->title}}" class="form-control" name="title" required>
            </div>

             <div class="form-group mt-3 ">
                <label for="descriptipn">Description</label>
                <input type="text" class="form-control" value="{{$todayspecial->description}}" name="description" required>
            </div>

            <label for="status">Status</label>
            <select name="status" class="form-control" id="">
                <option value="0" name="status">Active</option>
                 <option value="1" name="status">Deactive</option>
            </select>

            <div class="mt-4">
                <input type="file" name="image" >
                   <img src="{{asset('uploads/todayspecial/'.$todayspecial->image)}}" height="70px" alt="slider">
            </div>


            <div class="form-group">
                <button class="btn btn-primary"> Save </button>
            </div>
        </form>
    </div>
    @endsection
