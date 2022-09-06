<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- google font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Roboto:wght@300&display=swap"
            rel="stylesheet">
        <!-- custom css -->
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/menu.css">
    </head>

    <body>
        <div class="menu-section">
            <!-- Top navbar -->
             @include('frontend.topnav')

            <!-- Navbar -->
            @include('frontend.navbar')

            <!-- menu tab -->

            <ul class="nav nav-tabs">
                 @foreach($data as $category)
                   @if($category->status==0)
                    <li @if($loop->index == 0) class="nav-item active" @endif >
                    <a  href="#tab-{{ $category->id }}" class="nav-link menu-nav-item" data-toggle="tab" aria-controls="#tab-{{ $category->id }}">{{ $category->name }}</a
                    </li>
                    @endif
                @endforeach 
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
            @foreach($data as $category)
                <!-- all menu  -->
                <div id="tab-{{ $category->id }}"  class="tab-pane fade  container-fluid  @if($loop->index == 0) show  active @endif" ><br>
                    <h3>{{ $category->name }}</h3>
                    <div class="row" id="all-menu">
                       
                        @foreach($category->products as $product)
                         @if($product->status==0)
                            {{-- repeat menu card  --}}
                            <div class="col-sm-6 col-lg-4 mt-5">
                                <!-- menu item  in card -->
                                    <div class="card">
                                    <div class="card-horizontal">
                                        <div class="img-square-wrapper">
                                            <img class="menu-card-img" src="{{asset('uploads/product/'.$product->image)}}" alt="Card image cap">
                                            <p id="price">Rs. {{$product->price}}</p>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">{{$product->name}}</h4>
                                            <p class="card-text">
                                                {{$product->shortdescription}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                        
                    </div>
                </div>
            @endforeach

            </div>
            <!-- footer -->
            @include('frontend.footer')

            <!-- custom js -->
            <script src="./js/script.js">
            </script>
            <!-- bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
        </div>
    </body>

</html>
