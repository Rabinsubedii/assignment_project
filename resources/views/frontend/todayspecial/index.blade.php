@extends('layouts.app1', ['activePage' => 'frontend.todayspecial.index', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('add-todayspecial')}}" class="btn btn-primary float-right">Add Today Special</a>
    <h3>Slider Setting </h3>

    <table class="table table-bordered css-serial">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Title</th>
                <th>Image</th>
                <th>Description</th>
                <th>Status </th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todayspecial as $item)
            <tr>
                <td>&nbsp;</td>
                  <td>{{$item->title}}</td>
                   <td>
                    <img src="{{asset('uploads/todayspecial/'.$item->image)}}" height="70px" alt="heading logo">
                </td>
                     <td>{{$item->description}}</td>
                     <td>{{$item->status =='0'?'Active':'Deactive'}}</td>
                <td>
                    <a href="{{url('edit-todayspecial/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{url('delete-todayspecial/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
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
