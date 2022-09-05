@extends('layouts.app1', ['activePage' => 'frontend.category.index', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('add-category')}}" class="btn btn-primary float-right">Add Category</a>
    <h3>Category List </h3>

    <table class="table table-bordered css-serial">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Title</th>
                <th>Description</th> 
                <th>Image</th> 
                <th>Status</th> 
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $item)
            <tr>
                <td>&nbsp;</td>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td>
                    <img src="{{asset('uploads/category/'.$item->image)}}" height="70px" alt="Category Image">
                </td>
                  <td>{{$item->status =='0'?'Enable':'Disable'}}</td>
                <td>
                    <a href="{{url('edit-category/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{url('delete-category/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@push('js')
<script>
$(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    md.initDashboardPageCharts();
});
</script>
@endpush
