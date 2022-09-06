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
   @include('frontend.topnav')
   


    <!-- Navbar -->
       @include('frontend.navbar')
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
                        <option value="{{$category->id}}">{{$category->name}} (RS. {{$category->price}})  </option>
                        @endforeach
                    </select>
                    </td>
                    <td><input type="number"  name="quantity[]" class="form-control" min="1" required></td>
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
    @include('frontend.footer')


    <script>
        $('.pro').on('click', '.addRow', function () {
        var tablerow = '<tr>' +
        '<td>' +
        '<select name="product_id[]" class="form-control">' +
        ' @foreach ( $product as $category )' +
        ' <option value="{{$category->id}}">{{$category->name}} (RS. {{$category->price}})  </option>' +
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