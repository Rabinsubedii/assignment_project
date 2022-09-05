        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light main-navbar">
            <div class="container-fluid">
                <img src="./img/logo.jpg" class="logo-img" alt="">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link"href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('menu')}}">Menu</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <a href="{{url('order')}}" class="btn  btn-order-now my-2 my-sm-0"> Order Now</a>
                    </form>
                </div>
            </div>
        </nav>