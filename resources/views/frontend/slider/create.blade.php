@extends('layouts.app1', ['activePage' => 'frontend.slider.index', 'titlePage' => __('Dashboard')])

@section('content')
<div class="container content">
    <div class="heading">
        <h3>Add Slider</h3>
        <a href="{{ url('slider') }}" class="btn btn-success float-right">Back</a>
    </div>

    @if(session('status'))
        <h4 class="alert alert-success">{{ session('status') }}</h4>
    @endif

    {{-- Loader (hidden by default) --}}
    <div id="loader" style="display: none; text-align: center;" class="mt-3">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Uploading...</span>
        </div>
        <p class="mt-2">Uploading... Please wait.</p>
    </div>

    {{-- Upload Form --}}
    <form action="{{ url('add-slider') }}" method="POST" enctype="multipart/form-data" class="mt-5" id="uploadForm">
        @csrf

        <div class="form-group mt-3">
            <label for="name">Title</label>
            <input type="text" class="form-control" name="title" required>
        </div>

        <div class="form-group mt-3">
            <label for="name">Description</label>
            <textarea class="form-control" name="description" required></textarea>
        </div>

        <label for="status">Status</label>
        <select name="status" class="form-control">
            <option value="0">Active</option>
            <option value="1">Deactive</option>
        </select>

        <div class="mt-4">
            <input type="file" name="image" required>
        </div>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>

{{-- Script to show loader on form submit --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("uploadForm");
        const loader = document.getElementById("loader");

        form.addEventListener("submit", function () {
            loader.style.display = "block";
        });
    });
</script>
@endsection
