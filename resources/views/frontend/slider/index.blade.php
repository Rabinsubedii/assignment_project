@extends('layouts.app1', ['activePage' => 'frontend.slider.index', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('add-slider')}}" class="btn btn-primary float-right">Add Slider</a>
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
            @foreach ($slider as $item)
            <tr>
                <td>&nbsp;</td>
                  <td>{{$item->title}}</td>
            <td>
                @if(Str::endsWith($item->image, ['mp4', 'webm', 'ogg']))
                    <video width="120" height="70" muted preload="metadata" poster="{{ asset('uploads/slider/video-placeholder.jpg') }}">
                        <source src="{{ asset('uploads/slider/' . $item->image) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                @else
                    <img src="{{ asset('uploads/slider/' . $item->image) }}" height="70" alt="slider media">
                @endif
            </td>
                     <td>{{$item->description}}</td>
                     <td>{{$item->status =='0'?'Active':'Deactive'}}</td>
                <td>
                    <a href="{{url('edit-slider/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{url('delete-slider/'.$item->id)}}" class="btn btn-info btn-sm" onclick="confirm('Are you sure ,You want to delete this Slider ?') || event.stopImmediatePropagation()" wire:click.prevent="deleteSlider({{$item->id}})">Delete</i></a>
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
