        <!-- Top navbar -->
        @foreach ( $setting as $setting )
              <nav class="navbar navbar-expand-lg top-nav">
            <div id="my-nav" class="container-fluid">
                <a id="primary-contact" href="tel:984-4910404">{{$setting->phonenumber}}</a>
                <a id="primary-contact" href="mailto:{{$setting->emailaddress}}">
                 {{$setting->emailaddress}}</a>
            </div>
        </nav>
        @endforeach
      