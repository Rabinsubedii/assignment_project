@extends('layouts.app1', ['activePage' => 'frontend.order.index', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <h3>Order List </h3>

    <table class="table table-bordered css-serial">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Email</th>
                <th>Product Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order as $item)
            <tr>
                <td>&nbsp;</td>
                <td>{{$item->name}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->Address}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->product_id}}</td>
                <td>
                    <a href="{{url('edit-order/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{url('confirm-order/'.$item->id)}}" class="btn btn-primary btn-sm">Cofirm Order</a>
                    <a href="{{url('delete-order/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
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
