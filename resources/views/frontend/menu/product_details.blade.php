<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    {{-- You might want to add a specific CSS file for details page if needed --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/product-details.css') }}"> --}}
</head>

<body>
    <div class="menu-section">
        @include('frontend.topnav')

        @include('frontend.menunav')

        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-6">
                    {{-- Check if product has an image before displaying --}}
                    @if($product->image)
                        <img src="{{ asset('uploads/product/' . $product->image) }}"
                             alt="{{ $product->name }}" class="img-fluid rounded shadow-sm">
                    @else
                        {{-- Fallback image if no product image is set --}}
                        <img src="{{ asset('images/placeholder.png') }}" {{-- Adjust to your placeholder image path --}}
                             alt="No Image Available" class="img-fluid rounded shadow-sm">
                    @endif
                </div>
                <div class="col-md-6">
                    <h1 class="mb-3">{{ $product->name }}</h1>

                    @if($product->category)
                        {{-- Display category name if the relationship exists and the category is not null --}}
                        <p class="text-muted">Category: {{ $product->category->name }}</p>
                    @else
                        <p class="text-muted">Category: Uncategorized</p>
                    @endif 


                     @if($product->shortdescription && $product->shortdescription != $product->description)
                        <h4 class="mt-4">Short Description:</h4>
                        <p>{{ $product->shortdescription }}</p>
                    @endif


                    <h4 class="mt-4">Full Description:</h4>
                    {{-- Use '!!' for unescaped content if your description contains HTML, otherwise '{{}}' is safer --}}
                    {{-- 'e()' escapes HTML entities, 'nl2br()' converts newlines to <br> tags --}}
                    <p class="text-justify">{!! nl2br(e($product->description)) !!}</p>



                    {{-- Link back to the main menu page using the named route --}}
                    <a href="{{ route('menu.index') }}" class="btn btn-primary mt-4">
                        <i class="fa fa-arrow-left"></i> Back to List
                    </a>
                </div>
            </div>
        </div>

        @include('frontend.footer')

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPkFPvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <script src="{{ asset('js/script.js') }}"></script>
    </div>
</body>

</html>