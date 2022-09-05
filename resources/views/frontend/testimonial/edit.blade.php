@extends('layouts.app1', ['activePage' => 'frontend.testimonial.index', 'titlePage' => __('Dashboard')])

    @section('content')
    <div class="container content">
        <div class="heading">
            <h3>Update Testimonial</h3>
                <a href="{{url('testimonial')}}" class="btn btn-success float-right">Back</a>
        </div>
     @if(session ('status'))
    <h4 class="alert alert-success">{{session ('status')}}</h4>
    @endif
         <form action="{{ url('updatetestimonial/'.$testimonial->id) }}" method="POST" enctype="multipart/form-data"  class="mt-5">
             @csrf
               @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" value="{{$testimonial->name}}" name="name" required>
            </div>

            
            <div class="form-group mt-3 ">
                <label for="description">Description</label>
                <input type="text" class="form-control" value="{{$testimonial->description}}" name="description" required>
            </div>


            <div class="form-group mt-3 ">
                <label for="title">Title</label>
                <input type="text" class="form-control" value="{{$testimonial->title}}" name="title" required>
            </div>

              <div>
                <label for="image">Image</label>
                <input type="file" class="form-control" name="userimage" >
                  <img src="{{asset('uploads/testimonial/'.$testimonial->userimage)}}" height="70px" alt="testimonial">
            </div>
            <div class="form-group">
                <button class="btn btn-primary"> Save </button>
            </div>
        </form>
    </div>
    @endsection
