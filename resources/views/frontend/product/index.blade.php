@extends('layouts.app1', ['activePage' => 'frontend.product.index', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('add-product')}}" class="btn btn-primary float-right">Add Product</a>
    <h3>Product List </h3>

    <table class="table table-bordered css-serial">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Product Name</th>
                <th>Short Description</th>
                <th>Price</th>
                <th>Image</th>
                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $item)
            <tr>
                <td>&nbsp;</td>
                <td>{{$item->name}}</td>
                <td id="productdescriptionadmin">{{$item->shortdescription}}</td>
                <td>{{$item->price}}</td>
                 <td>
                    <img src="{{asset('uploads/product/'.$item->image)}}" height="70px" alt="Product Image">
                </td>
              <td>{{$item->category->name}}</td>


                <td>{{$item->status =='0'?'Enable':'Disable'}}</td>
         
                
                <td>
                    <a href="{{url('edit-product/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{url('delete-product/'.$item->id)}}" class="btn btn-info btn-sm" onclick="confirm('Are you sure ,You want to delete this product ?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{$item->id}})">Delete</i></a>

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
