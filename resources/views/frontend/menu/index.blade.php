<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

<style>
    
    .view-details-btn {
    background-color: #0056b3;
    color: white;
    font-weight: 600;
    border-radius: 25px;
    padding: 8px 20px;
    transition: all 0.3s ease;
    font-size: 14px;
    }

    .view-details-btn:hover {
        background-color: #007bff;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(0, 123, 255, 0.2);
    }


    .custom-tab-wrapper {
    margin-bottom: 20px;
    }

    .custom-tabs .nav-link {
        background: #f4f6fa;
        border: 1px solid #dee2e6;
        color: #333;
        font-weight: 600;
        border-radius: 25px;
        padding: 10px 25px;
        transition: all 0.3s ease;
    }

    .custom-tabs .nav-link:hover {
        background: #e3f2fd;
        color: #0056b3;
    }

    .custom-tabs .nav-link.active {
        background: #0056b3;;
        color: white;
        border-color: #0056b3;;
        box-shadow: 0 4px 10px rgba(0, 123, 255, 0.2);
    }

</style>
    @php use Illuminate\Support\Str; @endphp

    <div class="menu-section">
        @include('frontend.topnav')
        @include('frontend.menunav')

        <div class="custom-tab-wrapper text-center mt-5">
            <ul class="nav justify-content-center custom-tabs" role="tablist">
                @foreach ($data as $category)
                    @if ($category->status == 0)
                        <li class="nav-item mx-2">
                            <a class="nav-link custom-tab-link @if ($loop->index == 0) active @endif"
                            data-toggle="tab"
                            href="#tab-{{ $category->id }}"
                            role="tab"
                            aria-controls="tab-{{ $category->id }}">
                                {{ $category->name }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>


        <div class="tab-content">
            @foreach ($data as $category)
                <div id="tab-{{ $category->id }}"
                    class="tab-pane fade container-fluid @if ($loop->index == 0) show active @endif">
                    <h3 class="mt-4">{{ $category->name }}</h3>
                    <div class="row">
                        @foreach ($category->products as $product)
                            @if ($product->status == 0)
                                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                                    <div class="card h-100 shadow-sm border-0">
                                        <img class="card-img-top img-fluid"
                                            src="{{ asset('uploads/product/' . $product->image) }}"
                                            alt="{{ $product->name }}"
                                            style="height: 200px; object-fit: cover;">

                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title font-weight-bold">{{ $product->name }}</h5>
                                            <p class="card-text text-muted">
                                                {{ Str::limit($product->shortdescription, 100) }}
                                            </p>
                                            <a href="{{ route('product.show', $product->slug) }}" class="btn view-details-btn mt-auto">
                                                View Details <i class="fas fa-arrow-right ml-1"></i> </a>

                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        @include('frontend.footer')

        <script src="{{ asset('js/script.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </div>
</body>

</html>
