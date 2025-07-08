<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 5</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- google font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@300&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@300;400&family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- In <head> section -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto:wght@300;400&display=swap" rel="stylesheet">


    <!-- custom css -->
    <link rel="stylesheet" href="./css/style.css">
</head>


<style>
    <style>
    /* Event card style */
    .place-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 10px;
        overflow: hidden;
        background-color: #fff;
    }

    .place-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
    }

    .place-card .card-title {
        font-size: 18px;
        font-weight: 600;
        color: #333;
    }

    .view-details-btn {
        background-color: #0056b3;
        color: white;
        font-weight: 600;
        border-radius: 30px;
        padding: 8px 20px;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    .view-details-btn:hover {
        background-color: #007bff;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(0, 123, 255, 0.2);
    }

    /* Modal style */
    .modal-content {
        border-radius: 10px;
        padding: 20px;
        background-color: #fff;
    }

    .modal-header {
        border-bottom: 1px solid #dee2e6;
    }

    .modal-title {
        font-weight: 600;
        font-size: 20px;
        color: #333;
    }

    .modal-body p {
        font-size: 15px;
        line-height: 1.6;
    }

    .modal-body img {
        border-radius: 10px;
        object-fit: cover;
        width: 100%;
        max-height: 200px;
    }

    .modal-body .col-md-4 {
        padding-right: 15px;
    }

    .modal-body .col-md-8 {
        padding-left: 15px;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .modal-body .col-md-4,
        .modal-body .col-md-8 {
            padding: 0;
        }

        .modal-body img {
            max-height: 180px;
            margin-bottom: 15px;
        }
    }

    .section-title {
        font-weight: 700;
        font-size: 26px;
        color: #212529;
        margin-bottom: 20px;
    }
</style>

</style>

<body>
    <!-- Top navbar -->
    @include('frontend.topnav')
    @include('frontend.navbar')

    <!-- slider -->

    @php use Illuminate\Support\Str; @endphp

    <div id="carouselId" class="carousel slide custom-carousel" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($slider as $index => $item)
            <li data-target="#carouselId" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>

        <div class="carousel-inner" role="listbox">
            @foreach ($slider as $index => $item)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                @if(Str::endsWith($item->image, ['mp4', 'webm', 'ogg']))
                <video class="d-block w-100 slider-video" autoplay muted loop playsinline preload="metadata"
                    poster="{{ asset('images/video-thumbnail.jpg') }}">
                    <source src="{{ asset('uploads/slider/' . $item->image) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                @else
                <img src="{{ asset('uploads/slider/' . $item->image) }}" class="d-block w-100 slider-image"
                    alt="Slider Image">
                @endif
            </div>
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


     {{-- About Kyoto --}}
    <section class="special-item-section">
        <div class="container-fluid">
            <div class="section-header">
                <div class="mt-5" id="today-special-item">
                    <div id="wrap" class="container my-5">
                        <div class="row align-items-center">
                            <!-- Image Slider -->
                            <div class="col-md-6" id="slider_div">
                                <div id="carouselSpecial" class="carousel slide gallery" data-ride="carousel">
                                    <div class="carousel-inner rounded shadow overflow-hidden">
                                        @php $counter = 0; @endphp
                                        @foreach ($todayspecial as $item)
                                            <div class="carousel-item {{ $counter == 0 ? 'active' : '' }}">
                                                <img src="{{ asset('uploads/todayspecial/' . $item->image) }}"
                                                    class="d-block w-100 special-img" alt="Today's Special Image"
                                                    style="height: 400px; object-fit: cover;">
                                            </div>
                                            @php $counter++; @endphp
                                        @endforeach
                                    </div>

                                    <!-- Arrows -->
                                    <a class="carousel-control-prev" href="#carouselSpecial" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon custom-arrow" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselSpecial" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon custom-arrow" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>

                            <!-- Quote / Text -->
                            <div class="col-md-6" id="qts_div">
                                <div class="p-5 rounded shadow-sm bg-white text-center h-100 d-flex flex-column justify-content-center">
                                    <h2 class="font-weight-bold text-dark mb-4" style="font-family: 'Montserrat', sans-serif; font-size: 28px;">
                                        Discover Kyoto's Timeless Beauty
                                    </h2>
                                    <p class="text-muted" style="font-size: 18px; line-height: 1.7; font-family: 'Roboto', sans-serif;">
                                        “Kyoto is a city where tradition meets elegance — home to ancient temples, vibrant festivals, and
                                        breathtaking seasonal views that captivate every soul who visits.”
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- explore popular place  -->
    <section>
        <div class=" mt-5 popular-places-section">
            <h2 class="section-title text-center mb-4">Explore Popular Places</h2>
            
            <div class="container mt-5">
                <div class="row">
                @foreach($place as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card place-card h-100 shadow-sm border-0">
                            <img src="{{ asset('uploads/product/' . $item->image) }}" 
                                class="card-img-top"
                                alt="{{ $item->title }}"
                                style="height: 180px; object-fit: cover; border-top-left-radius: 10px; border-top-right-radius: 10px;">

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title font-weight-bold">{{ $item->name }}</h5>
                                <a href="{{ route('product.show', $item->slug) }}" class="btn view-details-btn mt-auto">
                                    View Details <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            </div>
        </div>
    </section>

    <!-- map -->
    <section>
        <iframe src="https://global.kyoto.travel/resource/global/download/111-pdf.pdf" width="100%" height="600px"
            style="border: none;">
            This browser does not support PDFs. Please download the PDF to view it:
            <a href="https://global.kyoto.travel/resource/global/download/111-pdf.pdf">Download PDF</a>.
        </iframe>
    </section>

    <!-- {places of kyoto } -->
    <section class="testimonial" id="whatcustomersay">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-none d-lg-block">
                    <ol class="carousel-indicators tabs">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                            <figure>
                                <img src="img/t4.jpg" class="img-fluid-custo" alt="">
                            </figure>
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1">
                            <figure>
                                <img src="img/toji.jpg" class="img-fluid-custo" alt="">
                            </figure>
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2">
                            <figure>
                                <img src="img/t6.jpg" class="img-fluid-custo" alt="">
                            </figure>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <div id="carouselExampleIndicators" data-interval="false" class="carousel slide"
                        data-ride="carousel">
                        <h1>Know About Temple</h1>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="quote-wrapper">
                                    <p>Tō-ji Temple, also known as Kyō-ō-gokoku-ji is a Shingon Buddhist temple in the
                                        Minami-ku ward of Kyoto, Japan.
                                        Founded in 796, Tō-ji Temple was one of the only three Buddhist temples allowed
                                        in the city at the time it became
                                        the capital of Japan.</p>
                                    <h3>Toji Temple</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="quote-wrapper">
                                    <p>Tōfuku-ji is a Buddhist temple in Higashiyama-ku in Kyoto, Japan.
                                        Tōfuku-ji takes its name from two temples in Nara, Tōdai-ji and Kōfuku-ji.
                                        It is one of the Kyoto Gozan or "five great Zen temples of Kyoto".
                                        Its honorary sangō prefix is Enichi-san.</p>
                                    <h3>Tofukuji Temple</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="quote-wrapper">
                                    <p>Kinkaku-ji, officially named Rokuon-ji, is a Zen Buddhist temple in Kyoto, Japan
                                        and a tourist attraction.
                                        It is designated as a World Heritage Site, a National Special Historic Site,
                                        a National Special Landscape, and one of the 17 Historic Monuments of Ancient
                                        Kyoto.</p>
                                    <h3>Golden Temple</h3>
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


    <!-- explore lates event place  -->
     <section>
    <div class="mt-5 popular-places-section">
        <div class="container mt-5">
            <h2 class="section-title text-left mb-4">Latest Events</h2>
            <div class="row">
                @foreach($event as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card place-card h-100 shadow-sm border-0">
                            <img src="{{ asset('uploads/event/' . $item->image) }}" 
                                class="card-img-top"
                                alt="{{ $item->title }}"
                                style="height: 180px; object-fit: cover; border-top-left-radius: 10px; border-top-right-radius: 10px;">

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title font-weight-bold">{{ $item->title }}</h5>
                                <button type="button" class="btn view-details-btn mt-auto"
                                    data-toggle="modal" data-target="#eventModal{{ $item->id }}">
                                    View Details <i class="fas fa-arrow-right ml-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="eventModal{{ $item->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="eventModalLabel{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="eventModalLabel{{ $item->id }}">{{ $item->title }}</h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="{{ asset('uploads/event/' . $item->image) }}"
                                                alt="{{ $item->title }}" class="img-fluid rounded shadow-sm" style="max-height: 200px; object-fit: cover;">
                                        </div>
                                        <div class="col-md-8">
                                            <p><strong>Date:</strong> {{ $item->date }}</p>
                                            <p><strong>Short Description:</strong> {{ \Illuminate\Support\Str::limit($item->description, 100) }}</p>
                                            <hr />
                                            <p>{{ $item->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
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