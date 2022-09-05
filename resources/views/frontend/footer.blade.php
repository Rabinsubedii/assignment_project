 <div class="footer-dark">
      @foreach ( $setting as $setting )
            <footer>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5 item text">
                            <h3>Cafe Culture</h3>
                          
                                 <p>{{$setting->aboutdescription}}</p>
                        
                           
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
                                    
                                    <li class="list-inline-item">
                                        <a href="{{$setting->facebookurl}}">
                                            {{-- <i class="fa fa-facebook"></i> --}}
                                            <img src="{{asset('uploads/facebookicon/'.$setting->facebookicon)}}" height="30px" alt="facebook icon">
                                        </a>
                                    </li>

                                       <li class="list-inline-item">
                                        <a href="{{$setting->twitterurl}}">
                                            {{-- <i class="fa fa-facebook"></i> --}}
                                            <img src="{{asset('uploads/twittericon/'.$setting->twittericon)}}" height="30px" alt="twitter  icon">
                                        </a>
                                    </li>

                                     <li class="list-inline-item">
                                        <a href="{{$setting->insturl}}">
                                            {{-- <i class="fa fa-facebook"></i> --}}
                                            <img src="{{asset('uploads/instaicon/'.$setting->instaicon)}}" height="30px" alt="insta icon">
                                        </a>
                                    </li>

                                     <li class="list-inline-item">
                                        <a href="{{$setting->youtubeurl}}">
                                            {{-- <i class="fa fa-facebook"></i> --}}
                                            <img src="{{asset('uploads/youtubeicon/'.$setting->youtubeicon)}}" height="30px" alt="youtube icon">
                                        </a>
                                    </li>

                                      <li class="list-inline-item">
                                        <a href="mailto:{{$setting->emailurl}}">
                                            {{-- <i class="fa fa-facebook"></i> --}}
                                            <img src="{{asset('uploads/emailicon/'.$setting->emailicon)}}" height="30px" alt="emailicon icon">
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                    <p class="copyright">{{$setting->footercopyright}}</p>
                </div>
            </footer>
                @endforeach
        </div>