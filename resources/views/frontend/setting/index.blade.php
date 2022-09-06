@extends('layouts.app1', ['activePage' => 'frontend.setting.index', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('add-setting')}}" class="btn btn-primary float-right">Add setting</a>
    <h3>Site Settings </h3>

    <table class="table table-bordered css-serial">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Heading Logo</th>
                <th>Footer Logo</th>
                <th>Description</th>
                <th>Facebook link</th>
                <th>Twitter link</th>
                <th>Instagram link</th>
                <th>Email link</th>

                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($setting as $item)
            <tr>
                <td>&nbsp;</td>
               
                 <td>
                    <img src="{{asset('uploads/headinglogo/'.$item->headinlogo)}}" height="70px" alt="heading logo">
                </td>
                <td>
                    <img src="{{asset('uploads/footerlogo/'.$item->footerlogo)}}" height="70px" alt="footer logo">
                </td>
        
                <td>{{$item->aboutdescription}}</td>
                <td>{{$item->facebookurl}}</td>
                <td>{{$item->twitterurl}}</td>
                <td>{{$item->insturl}}</td>
                <td>{{$item->emailurl}}</td>
                
                <td>
                    <a href="{{url('edit-setting/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                     <a href="{{url('delete-setting/'.$item->id)}}" class="btn btn-info btn-sm" onclick="confirm('Are you sure ,You want to delete this Settings ?') || event.stopImmediatePropagation()" wire:click.prevent="deleteSetting({{$item->id}})">Delete</i></a>
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
