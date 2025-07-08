<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Team Members</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Roboto:wght@300&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/menu.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <style>
    .member-card {
      background: #f8f9fa;
      padding: 20px;
      border-radius: 8px;
      text-align: center;
      transition: 0.3s ease;
    }

    .member-card img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .leader-card {
      background: #eaf4ff;
      padding: 30px;
      border-radius: 8px;
      text-align: center;
      margin-bottom: 40px;
    }

    .leader-card img {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 15px;
    }

    .member-role {
      font-size: 0.95rem;
      color: #555;
    }
  </style>
</head>

<body>
  @include('frontend.topnav')
  @include('frontend.menunav')

  <div class="container my-5">
    <h2 class="text-center mb-5">Our Team Members</h2>

    <!-- Leader Member -->
    <div class="leader-card shadow-sm mx-auto" style="max-width: 500px;">
      <img src="https://scontent.fitm4-1.fna.fbcdn.net/v/t39.30808-6/486601174_2404140973296292_6131779040106953862_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=OOkAE7XVqtcQ7kNvwF6yRTB&_nc_oc=Adk1fKykhmu1sGqrXug3Fo5xJBsTDvTqZl3xRHCDr4k1io3AqY_-l0ZYt02l8oiHd8-FLUToJewoKt84ghQkg_j4&_nc_zt=23&_nc_ht=scontent.fitm4-1.fna&_nc_gid=6QssOnN7Ccb7hcdygg1_Og&oh=00_AfSCvEiaUbxsFxFLzpotMlLKXcwKve-Znn7rs82OZBXszg&oe=687283D3" alt="Rabin Subedi" />
      <h4 class="mb-1">Rabin Subedi <small class="text-muted">(M25w0465)</small></h4>
      <p class="mb-1">Web System Development</p>
      <p class="member-role">Web Developer (Team Leader)</p>
    </div>

    <!-- Other Members -->
    <div class="row">
      <div class="col-sm-6 col-md-4 mb-4">
        <div class="member-card shadow-sm">
          <img src="https://scontent.fitm4-1.fna.fbcdn.net/v/t39.30808-6/481445572_2078070132643197_5062415961229251028_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=a5f93a&_nc_ohc=07LKxHdiADMQ7kNvwGyhnaz&_nc_oc=AdmUspf5_4OxB56we0OES44dFuuTnaknSF2I7890uTLPysOjiukXhSz_RcwUTFWWcqi91ikk1MixX7-pdcQMd9ju&_nc_zt=23&_nc_ht=scontent.fitm4-1.fna&_nc_gid=Cfqah5PHNZHGvQPmjncfDA&oh=00_AfRCUxed70rO6JpPCGhzZ0SpgWKYnBclcHB80Y70ek5xmQ&oe=68729C08" alt="Jane Doe" />
          <h6>Sandip Adhikari <small class="text-muted">(M25w1234)</small></h6>
          <p class="mb-1">Mobile App Development</p>
          <p class="member-role">UI/UX Designer</p>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 mb-4">
        <div class="member-card shadow-sm">
          <img src="{{ asset('uploads/member/ashma.jpeg') }}" alt="John Smith" />
          <h6>Ashma Parajuli <small class="text-muted">(M25w0789)</small></h6>
          <p class="mb-1">Data Science</p>
          <p class="member-role">Data Analyst</p>
        </div>
      </div>

      <!-- Add more members similarly -->
    </div>
  </div>

  @include('frontend.footer')

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>
