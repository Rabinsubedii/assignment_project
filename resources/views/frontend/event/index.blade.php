@extends('layouts.app1', ['activePage' => 'frontend.event.index', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('add-event')}}" class="btn btn-primary float-right">Add Event</a>
    <h3>Event List </h3>

    <table class="table table-bordered css-serial">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Event Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($event as $item)
            <tr>
                <td>&nbsp;</td>
                <td>{{$item->title}}</td>
                <td id="productdescriptionadmin">{{$item->description}}</td>
                 <td>
                    <img src="{{asset('uploads/event/'.$item->image)}}" height="70px" alt="Event Image">
                </td>

                <td>{{$item->status =='0'?'Enable':'Disable'}}</td>
         
                
                <td>
                    <a href="{{url('edit-event/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{url('delete-event/'.$item->id)}}" class="btn btn-info btn-sm" onclick="confirm('Are you sure ,You want to delete this event ?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{$item->id}})">Delete</i></a>

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
