<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Railway Route</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Roboto:wght@300&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/menu.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <style>
    /* Scoped Railway Tabs CSS */
.railway-tabs-container .nav-tabs {
  border-bottom: none; /* Remove the extra line */
  justify-content: center;
  display: flex;
  flex-wrap: wrap;
}


    .railway-tabs-container .nav-tabs .nav-item {
      margin: 0 15px;
    }

    .railway-tabs-container .nav-tabs .nav-link {
      font-weight: 600;
      font-size: 1.1rem;
      color: #007bff;
      border: none;
      border-radius: 0;
      padding: 12px 25px;
      transition: all 0.3s ease;
      position: relative;
    }

    .railway-tabs-container .nav-tabs .nav-link:hover {
      color: #0056b3;
      background-color: transparent;
    }

    .railway-tabs-container .nav-tabs .nav-link::after {
      content: '';
      position: absolute;
      width: 0%;
      height: 3px;
      bottom: 0;
      left: 0;
      background-color: #007bff;
      transition: width 0.3s ease;
    }

    .railway-tabs-container .nav-tabs .nav-link:hover::after,
    .railway-tabs-container .nav-tabs .nav-link.active::after {
      width: 100%;
    }

    .railway-tabs-container .nav-tabs .nav-link.active {
      color: #004085;
      font-weight: 700;
      border-color: transparent;
      background-color: transparent;
    }

    /* PDF container styling */
    .railway-pdf-container {
      margin-top: 30px;
      text-align: center;
      min-height: 600px;
      border: 1px solid #ddd;
      box-shadow: 0 4px 10px rgb(0 0 0 / 0.1);
      padding: 15px;
      border-radius: 8px;
      background: #f9f9f9;
    }

    .railway-pdf-container iframe {
      width: 100%;
      height: 600px;
      border: none;
      border-radius: 8px;
      box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>
  @include('frontend.topnav')
  @include('frontend.menunav')

  <div class="railway-tabs-container container my-5">
    <h2 class="text-center mb-4">Railway Routes in Kyoto</h2>

    <!-- Tab Headers -->
    <ul class="nav nav-tabs" id="railwayTab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="jr-tab" data-toggle="tab" href="#jr" role="tab" aria-controls="jr"
          aria-selected="true">JR Railways</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="hankyu-tab" data-toggle="tab" href="#hankyu" role="tab" aria-controls="hankyu"
          aria-selected="false">Hankyu Railways</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="keihan-tab" data-toggle="tab" href="#keihan" role="tab" aria-controls="keihan"
          aria-selected="false">Keihan Railways</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="kintetsu-tab" data-toggle="tab" href="#kintetsu" role="tab" aria-controls="kintetsu"
          aria-selected="false">Kintetsu Railways</a>
      </li>
    </ul>

    <!-- Tab Contents -->
    <div class="tab-content mt-4" id="railwayTabContent">
      <!-- JR Railways PDF -->
      <div class="tab-pane fade show active railway-pdf-container" id="jr" role="tabpanel" aria-labelledby="jr-tab">
        <iframe
          src="https://www.westjr.co.jp/global/en/timetable/pdf/map_kyoto.pdf"
          allowfullscreen
          loading="lazy"
          title="JR Railways Route PDF"></iframe>
      </div>

      <!-- Hankyu Railways PDF -->
      <div class="tab-pane fade railway-pdf-container" id="hankyu" role="tabpanel" aria-labelledby="hankyu-tab">
        <iframe
          src="https://www.hankyu.co.jp/global/common/pdf/traffic/routemap/kyoto/routemap.pdf"
          allowfullscreen
          loading="lazy"
          title="Hankyu Railways Route PDF"></iframe>
      </div>

      <!-- Keihan Railways PDF -->
      <div class="tab-pane fade railway-pdf-container" id="keihan" role="tabpanel" aria-labelledby="keihan-tab">
        <iframe
          src="https://www.keihan.co.jp/travel/en/pdf/trains/information-for-travelers/routemap_and_stations.pdf"
          allowfullscreen
          loading="lazy"
          title="Keihan Railways Route PDF"></iframe>
      </div>

      <!-- Kintetsu Railways PDF -->
      <div class="tab-pane fade railway-pdf-container" id="kintetsu" role="tabpanel" aria-labelledby="kintetsu-tab">
        <iframe
          src="https://www.kintetsu.co.jp/foreign/assets/ticket/krp/pdf/route_map_en.pdf"
          allowfullscreen
          loading="lazy"
          title="Kintetsu Railways Route PDF"></iframe>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
