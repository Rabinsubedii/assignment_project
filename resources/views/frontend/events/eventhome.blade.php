<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Events</title>

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous"
  />

  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Roboto:wght@300&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/menu.css') }}" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
  />
  <style>
    /* Scoped styles only for events page */
    .events-page {
      font-family: 'Montserrat', 'Roboto', sans-serif;
      color: #333;
      background-color: #fafafa;
      padding-bottom: 60px;
    }

    /* Simplified card style */
    .events-page .card {
      border: 1px solid #ddd;
      border-radius: 8px;
      transition: box-shadow 0.15s ease;
      box-shadow: none;
      background: #fff;
    }

    .events-page .card:hover {
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .events-page .card-img-top {
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;
      height: 180px;
      object-fit: cover;
    }

    .events-page .card-body {
      padding: 15px 20px;
    }

    .events-page .card-title {
      font-size: 1.25rem;
      color: #222;
      margin-bottom: 8px;
      font-weight: 600;
    }

    .events-page .card-text {
      font-size: 0.9rem;
      color: #555;
      min-height: 55px;
      margin-bottom: 12px;
    }

    /* Softer, more professional button */
    .events-page .btn-primary {
      background-color: #3a7bd5;
      border-color: #3a7bd5;
      border-radius: 20px;
      padding: 7px 22px;
      font-weight: 500;
      font-size: 0.9rem;
      transition: background-color 0.3s ease;
      box-shadow: none;
    }

    .events-page .btn-primary:hover,
    .events-page .btn-primary:focus {
      background-color: #2c5bb8;
      border-color: #2c5bb8;
      box-shadow: none;
    }

    /* Modal styles */
    .events-page .modal-content {
      border-radius: 12px;
      padding: 20px;
      background: white;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
    }

    .events-page .modal-header {
      border-bottom: none;
      padding-bottom: 0;
    }

    .events-page .modal-title {
      font-weight: 700;
      font-size: 1.6rem;
      color: #222;
    }

    .events-page .close {
      font-size: 1.5rem;
      color: #666;
      opacity: 0.7;
      transition: opacity 0.2s ease;
    }

    .events-page .close:hover {
      opacity: 1;
    }

    .events-page .modal-body {
      padding-top: 15px;
    }

    /* Modal layout */
    .events-page .modal-body .row {
      align-items: center;
    }

    .events-page .event-image {
      border-radius: 12px;
      max-height: 200px;
      width: 100%;
      object-fit: cover;
      box-shadow: 0 4px 14px rgba(0, 0, 0, 0.07);
      transition: transform 0.2s ease;
    }

    .events-page .event-image:hover {
      transform: scale(1.02);
    }

    .events-page .modal-text {
      padding-left: 25px;
    }

    .events-page .modal-text p {
      font-size: 1rem;
      color: #444;
      line-height: 1.5;
      margin-bottom: 12px;
    }

    .events-page .modal-text p.text-muted {
      font-size: 0.9rem;
      color: #888;
      margin-bottom: 18px;
    }

    /* Responsive tweaks */
    @media (max-width: 767.98px) {
      .events-page .modal-body .row {
        flex-direction: column;
      }

      .events-page .modal-text {
        padding-left: 0;
        margin-top: 18px;
      }

      .events-page .event-image {
        max-height: 160px;
      }
    }
  </style>
</head>

<body>
  <div class="menu-section">
    @include('frontend.topnav')
    @include('frontend.menunav')

    <div class="events-page container mt-5">
      <h2 class="mb-4">Events</h2>
      <div class="row">
        @foreach ($event as $item)
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img
              class="card-img-top img-fluid"
              src="{{ asset('uploads/event/' . $item->image) }}"
              alt="{{ $item->title }}"
            />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{ $item->title }}</h5>
              <p class="card-text text-muted">
                {{ \Illuminate\Support\Str::limit($item->description, 100) }}
              </p>
              <button
                type="button"
                class="btn btn-primary mt-auto"
                data-toggle="modal"
                data-target="#eventModal{{ $item->id }}"
              >
                View Details
              </button>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div
          class="modal fade"
          id="eventModal{{ $item->id }}"
          tabindex="-1"
          role="dialog"
          aria-labelledby="eventModalLabel{{ $item->id }}"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="eventModalLabel{{ $item->id }}">
                  {{ $item->title }}
                </h5>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-4">
                    <img
                      src="{{ asset('uploads/event/' . $item->image) }}"
                      alt="{{ $item->title }}"
                      class="img-fluid rounded shadow-sm event-image"
                    />
                  </div>
                  <div class="col-md-8 modal-text">
                    <p class="text-muted mb-1">
                      <i class="fas fa-calendar-alt"></i> {{ $item->date }}
                    </p>
                    <p class="mb-2">
                      <strong>Short Description:</strong>
                      {{ \Illuminate\Support\Str::limit($item->description, 100) }}
                    </p>
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

    @include('frontend.footer')
  </div>

  <script src="{{ asset('js/script.js') }}"></script>
  <script
    src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"
  ></script>
</body>

</html>
