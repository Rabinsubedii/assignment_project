 <div class="footer-dark">
      @foreach ( $setting as $setting )
            <footer>
                <div class="container-fluid">
                    <p class="copyright">{{$setting->footercopyright}}</p>
                </div>
            </footer>
                @endforeach
        </div>