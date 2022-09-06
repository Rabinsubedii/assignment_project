<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cafe Culture</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <!-- google font -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@300&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@300;400&family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <!-- custom css -->
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
        <!-- Top navbar -->
        @include('frontend.topnav')
        @include('frontend.navbar')


      

        <!-- slider -->
        <div id="carouselId" class="carousel slide" data-ride="carousel">
            
            <ol class="carousel-indicators">
                     @php
                $counter = 0;
                @endphp
                 @foreach ($slider as $item )
                <li data-target="{{$item->id}}" data-slide-to="0" class="active"></li>
                 @php
                $counter++;
                @endphp
                @endforeach
            </ol>
            <div class="carousel-inner" role="listbox">
                  @php
                $counter = 0;
                @endphp
                @foreach ($slider as $item )
                <div class="carousel-item {{$counter==0? 'active':''}} ">
                    <img src="{{asset('uploads/slider/'.$item->image)}}" class="slider-image" alt="First slide">
                </div>
                 @php
                $counter++;
                @endphp
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        {{-- Today special item --}}
        <section class="special-item-section">
            <div class="container-fluid">
                <div class="section-header">
                    <p>Today`s Special</p>
                    <div class="line"></div>
                    <!-- item slide -->
                    <div class="mt-5" id="today-special-item">
                        <div id="wrap" class="container my-5">
                            <div class="row">
                                <div class="col-6" id="slider_div">
                                    <!-- Carousel -->
                                    <div id="carousel" class="carousel slide gallery" data-ride="carousel">
                                        
                                        <div class="carousel-inner">
                                            @php
                                            $counter = 0;
                                            @endphp
                                            @foreach ($todayspecial as $item )
                                            <div class="carousel-item {{$counter==0? 'active':''}} " data-slide-number="0"
                                                data-toggle="lightbox" data-gallery="gallery"
                                                data-remote="img/slide11.jpg">
                                                <img src="{{asset('uploads/todayspecial/'.$item->image)}}" class="d-block w-100 specia-img" alt="today special">
                                            </div>
                                               @php
                                            $counter++;
                                            @endphp
                                            @endforeach
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>

                                                                     <!-- Carousel Navigatiom -->
                                    <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                             @php
                                            $counter = 0;
                                            @endphp
                                            @foreach ($todayspecial as $item )
                                            <div class="carousel-item {{$counter==0? 'active':''}}" data-slide-number="0">
                                                <div class="row mx-0">
                                                    <div id="carousel-selector-0" class="thumb col-3 px-1 py-2 selected"
                                                        data-target="#carousel" data-slide-to="0">
                                                        <img src="{{asset('uploads/todayspecial/'.$item->image)}}" class="img-fluid" alt="today special ">
                                                    </div>
                                                </div>
                                            </div>
                                             @php
                                            $counter++;
                                            @endphp
                                            @endforeach
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-thumbs" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-thumbs" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6" id="qts_div">
                                    <h1 id="rest-qts">"Patience is the secret to good food."</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- customer feedback -->
        <section class="testimonial" id="whatcustomersay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block">
                        <ol class="carousel-indicators tabs">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                <figure>
                                    <img src="img/t2.jpg" class="img-fluid-custo" alt="">
                                </figure>
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                <figure>
                                    <img src="img/t1.jpg" class="img-fluid-custo" alt="">
                                </figure>
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                <figure>
                                    <img src="img/t3.jpg" class="img-fluid-custo" alt="">
                                </figure>
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <div id="carouselExampleIndicators" data-interval="false" class="carousel slide"
                            data-ride="carousel">
                            <h1>WHAT OUR CLIENTS SAY</h1>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="quote-wrapper">
                                        <p>I have tried a lot of food delivery services but Plate is something out of
                                            this world! Their food is really healthy and it tastes great, which is why I
                                            recommend this company to all my friends!</p>
                                        <h3>Dudhraj Parajuli</h3>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="quote-wrapper">
                                        <p>I have tried a lot of food delivery services but Plate is something out of
                                            this world! Their food is really healthy and it tastes great, which is why I
                                            recommend this company to all my friends!</p>
                                        <h3>Rabin Subedi</h3>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="quote-wrapper">
                                        <p>I have tried a lot of food delivery services but Plate is something out of
                                            this world! Their food is really healthy and it tastes great, which is why I
                                            recommend this company to all my friends!</p>
                                        <h3>Bhuvan Subedi</h3>
                                    </div>
                                </div>
                            </div>
                            <ol class="carousel-indicators indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- contact section -->
        <section class="contact-section container-fluid" id="contact">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-head-getintouch">
                        <p>Get in touch</p>
                        <div class="getintouch_underline"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="contact-head">
                        <p>Contact us</p>
                        <div class="contact_underline"></div>
                    </div>
                </div>
            </div>
            <!-- contact form -->
            <div class="row">
                <!-- side content -->
                <div class="col-md-6" id="side-content">
                    @foreach ($setting as $item )
                  
                        <div class="details-touch">
                        <p><img src="{{asset('uploads/addressicon/'.$item->addressicon)}}" alt="">{{$item->address}}</p>
                        <p><img src="{{asset('uploads/phoneicon/'.$item->phoneicon)}}" alt="">{{$item->phonenumber}}</p>
                        <p><img src="{{asset('uploads/emailicon/'.$item->emailicon)}}" alt="">{{$item->emailaddress}}</p>
                        <!-- map -->
                        <iframe
                            src="{{$item->mapurl}}"
                            frameborder="0" style="border:0;" allowfullscreen="" class="map"></iframe>
                    </div>
                 
                    @endforeach

                </div>

                <div class="col-md-5" id="form-section">
                      @if(session ('status'))
    <p class="alert alert-success">{{session ('status')}}</p>
    @endif
                    <form action="add"  method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" required class="form-control" name="name" placeholder="Enter your name" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="email" required class="form-control" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Phone Number</label>
                            <input type="number" required class="form-control" name="phone" placeholder="Enter your phone number" required>
                        </div>

                        <div class="form-group">
                            <label for="message"> Message </label>
                            <textarea id="customer-message" name="message" class="form-control" cols="20"
                                rows="4" required></textarea>
                        </div>

                        <button class="btn btn-success float-right">Send</button>
                    </form>
                </div>

            </div>
        </section>

        <!-- footer -->
          @include('frontend.footer')

        <!-- custom js -->
        <script src="./js/script.js">
        </script>
        <!-- bootstrap JS -->

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    </body>

</html>
