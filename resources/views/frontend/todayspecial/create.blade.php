@extends('layouts.app1', ['activePage' => 'frontend.slitodayspecialder.index', 'titlePage' => __('Dashboard')])

    @section('content')
    <div class="container content">
        <div class="heading">
            <h3>Add Today Special</h3>
                <a href="{{url('todayspecial')}}" class="btn btn-success float-right">Back</a>
        </div>
     @if(session ('status'))
    <h4 class="alert alert-success">{{session ('status')}}</h4>
    @endif
        <form action="{{url('add-todayspecial')}}" method="POST" enctype="multipart/form-data" class="mt-5">
             @csrf
               <div class="form-group mt-3 ">
                <label for="name">Title</label>
                <input type="text" class="form-control" name="title" required>
            </div>

            <div class="form-group mt-3 ">
                <label for="name">Description</label>
                <textarea type="text" class="form-control" name="description" required></textarea>
            </div>
           
           
            <label for="status">Status</label>
            <select name="status" class="form-control" id="">
                <option value="0" name="status">Active</option>
                 <option value="1" name="status">Deactive</option>
            </select>

            <div class="mt-4">
                <input type="file" name="image" >
            </div>

            <div class="form-group">
                <button class="btn btn-primary"> Save </button>
            </div>
        </form>
    </div>
    @endsection
