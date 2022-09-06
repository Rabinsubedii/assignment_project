@extends('layouts.app1', ['activePage' => 'frontend.testimonial.index', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('add-testimonial')}}" class="btn btn-primary float-right">Add Testimonial</a>
    <h3>Testimonial Setting </h3>

    <table class="table table-bordered css-serial">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Title</th>
                <th>Image</th>
                <th>Description link</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimonial as $item)
            <tr>
                <td>&nbsp;</td>
                  <td>{{$item->name}}</td>
                     <td>{{$item->title}}</td>
                 <td>
                    <img src="{{asset('uploads/testimonial/'.$item->userimage)}}" height="70px" alt="heading logo">
                </td>
                <td>{{$item->description}}</td>
                
                <td>
                    <a href="{{url('edit-testimonial/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                   <a href="{{url('delete-testimonial/'.$item->id)}}" class="btn btn-info btn-sm" onclick="confirm('Are you sure ,You want to delete this Testimonial ?') || event.stopImmediatePropagation()" wire:click.prevent="deleteTestimonial({{$item->id}})">Delete</i></a>
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
