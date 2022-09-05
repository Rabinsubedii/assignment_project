<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/menu.css">

</head>

<body id="order-body">
    <!-- Top navbar -->
    <nav class="navbar navbar-expand-lg top-nav">
        <div id="my-nav" class="container-fluid">
            <a id="primary-contact" href="tel:984-4910404">+977 984-4910404</a>
            <a id="primary-contact" href="mailto:cafeclubnepaliculture@gmail.com"> cafeclubnepaliculture@gmail.com</a>
        </div>
    </nav>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light main-navbar">
        <div class="container-fluid">
            <img src="./img/logo.jpg" class="logo-img" alt="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="menu.html">Menu</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="whole-order-page">
     @if(session ('status'))
    <p class="alert alert-success">{{session ('status')}}</p>
    @endif
        <form class="col-sm-6 col-lg-6 form-order"  action="{{url('order')}}" id="ordeer-form" method="post">
              @csrf

              <div class="heading">
                <h3 class="text-center">Order Item</h3>
              </div>
                    {{-- name and email --}}

                    
                    <table class="table">
                    
                        <thead>
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                    </tr> 
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" name="name" id="name" class="form-control" required></td>
                                 <td><input type="email" name="email" id="name" class="form-control" required></td>
                            </tr>
                        </tbody>

                        {{-- phone address --}}
                      <thead>
                        <tr>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                    </tr> 
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="number" name="phone" id="phone" class="form-control" required></td>
                                 <td><input type="text" name="address" id="address" class="form-control" required></td>
                            </tr>
                        </tbody>

                       

  
                        
                    {{-- product quantity --}}
                    <thead class="pro">
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Quantity</th>
                        <th><a href="javascript:;" class="btn btn-info addRow">+</a></th>
                    </tr>
                    </thead>
                    <tbody class="productinput">
                    <tr>
                    <td>
                    <select name="product_id[]" class="form-control">
                        @foreach ( $product as $category )
                        <option value="{{$category->id}}">{{$category->name}} </option>
                        @endforeach
                    </select>
                    </td>
                    <td><input type="number" name="quantity[]" class="form-control" required></td>
                    {{-- <td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td> --}}
                    </tr>
                    </tbody>

                    <table class="table">
                    
                        <thead>
                        <tr>
                        <th scope="col">Remarks</th>
                    </tr> 
                        </thead>
                        <tbody>
                            <tr>
                                 <td><textarea type="text" name="user_remarks" id="user_remarks" class="form-control" required> </textarea> </td>
                            </tr>
                        </tbody>

                    </table>
                    </table>
                    <button class="btn btn-secondary float-right">Order</button>
        </form>
    </div>


    <!-- footer -->
    <div class="footer-dark">
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 item text">
                        <h3>Cafe Culture</h3>
                        <p>cafe culture located at the center of mahendrapool (infront of annapurna supermarket) we are imainly focused on the hygiene and the taste quality.</p>
                    </div>
                    <div class="col-md-1 item text"></div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Useful Links</h3>
                        <ul>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="./menu.html">Menu</a></li>
                            <li><a href="#whatcustomersay">What our customer says?</a></li>
                            <li><a href="#about">About</a></li>

                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Quick Links</h3>
                        <div class="col item social">
                            <ul class="list-unstyled list-inline social text-center">
                                <li class="list-inline-item"><a href="https://www.facebook.com/cafeclubnepaliculture"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.instagram.com/cafeclubnepaliculture/?hl=en"><i class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-google-plus"></i></a></li>
                                <li class="list-inline-item"><a href="mailto:cafeclubnepaliculture@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="copyright">Cafe Culture © 2022</p>
            </div>
        </footer>
    </div>


    <script>
        $('.pro').on('click', '.addRow', function () {
        var tablerow = '<tr>' +
        '<td>' +
        '<select name="product_id[]" class="form-control">' +
        ' @foreach ( $product as $category )' +
        '<option value="{{$category->id}}">{{ $category-> name}}</option>' +
        ' @endforeach' +
        '</select>' +
        '</td>' +
        '<td> <input type="number" name="quantity[]" class="form-control" required></td>' +
        '<td> <a href="javascript:;" class="btn btn-danger deleteRow">-</a></td > ' +
        '</tr > ';
    $('.productinput').append(tablerow);

});

$('tbody').on('click', '.deleteRow', function () {
    $(this).parent().parent().remove();
})
    </script>
    <script src="./js/script.js"></script>

</body>

</html>