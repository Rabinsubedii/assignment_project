@extends('layouts.app1', ['activePage' => 'frontend.product.index', 'titlePage' => __('Dashboard')])

    @section('content')
    <div class="container content">
        <div class="heading">
            <h3>Update Site Settings</h3>
                <a href="{{url('setting')}}" class="btn btn-success float-right">Back</a>
        </div>
     @if(session ('status'))
    <h4 class="alert alert-success">{{session ('status')}}</h4>
    @endif
     <div class="row">
        <div class="col-md-5">
             <form action="{{ url('updatesetting/'.$setting->id) }}" method="POST" enctype="multipart/form-data">
             @csrf
               @method('PUT')
            <div>
                <label for="headinlogo">Logo</label>
                <input type="file" class="form-control" name="headinlogo" >
                <img src="{{asset('uploads/headinglogo/'.$setting->headinlogo)}}" height="70px" alt="Logo">
            </div>

             <div>
                <label for="footerlogo">Footer Logo</label>
                <input type="file" class="form-control" name="footerlogo" >
                 <img src="{{asset('uploads/footerlogo/'.$setting->footerlogo)}}" height="70px" alt="footer logo">
            </div>

            <div>
                <label for="facebookicon">Facebook Icon</label>
                <input type="file" class="form-control" name="facebookicon" >
                 <img src="{{asset('uploads/facebookicon/'.$setting->facebookicon)}}" height="70px" alt="Facebook icon">
                
            </div>

            <div>
                <label for="instlogo">Insta Icon</label>
                <input type="file" class="form-control" name="instaicon" >
                 <img src="{{asset('uploads/instaicon/'.$setting->instaicon)}}" height="70px" alt="insta icon">
            </div>

            <div>
                <label for="twittericon">Twitter Icon</label>
                <input type="file" class="form-control" name="twittericon" >
                  <img src="{{asset('uploads/twittericon/'.$setting->twittericon)}}" height="70px" alt="twotter icon">
            </div>

            <div>
                <label for="emailicon">Email Icon</label>
                <input type="file" class="form-control" name="emailicon" >
                 <img src="{{asset('uploads/emailicon/'.$setting->emailicon)}}" height="70px" alt="emailicon">
            </div>
            <div>
                <label for="youtubeicon">Youtube Icon</label>
                <input type="file" class="form-control" name="youtubeicon" >
                 <img src="{{asset('uploads/youtubeicon/'.$setting->youtubeicon)}}" height="70px" alt="youtubeicon">
            </div>

            <div>
                <label for="addressicon">Address Icon</label>
                <input type="file" class="form-control" name="addressicon" >
                  <img src="{{asset('uploads/addressicon/'.$setting->addressicon)}}" height="70px" alt="addressicon">
            </div>

            <div>
                <label for="phoneicon">Phone Icon</label>
                <input type="file" class="form-control" name="phoneicon" >
                 <img src="{{asset('uploads/phoneicon/'.$setting->phoneicon)}}" height="70px" alt="phoneicon">
            </div>
      
        </div>

        <div class="col-md-2"></div>
            <div class="col-md-5">
           
             <form  action="{{ url('updatesetting/'.$setting->id) }}"  method="POST">
             @csrf
               @method('PUT')
             <div class="form-group">
              <label for="aboutdescription">About Description</label>
              <textarea name="aboutdescription"  class="form-control"  required  autofocus>{{ ucfirst($setting->aboutdescription) }}</textarea>
             </div>

             <div class="form-group mt-3">
              <label for="phone">Phone Number</label>
              <input type="number" name="phonenumber" value="{{$setting->phonenumber}}" class="form-control" id="phone" required>
             </div>

               <div class="form-group mt-3">
              <label for="mapurl">Map URL</label>
              <input type="text" name="mapurl" value="{{$setting->mapurl}}" class="form-control" id="mapurl" required>
             </div>

              <div class="form-group mt-3">
              <label for="email">Email</label>
              <input type="email" name="emailaddress" value="{{$setting->emailaddress}}" class="form-control" id="emailaddress" required>
             </div>

              <div class="form-group mt-3">
              <label for="address">Address</label>
              <input type="text" name="address" value="{{$setting->address}}" class="form-control" id="address" required>
             </div>

              <div class="form-group mt-3">
              <label for="footercopyright">Copyright info</label>
              <input type="text" name="footercopyright" value="{{$setting->footercopyright}}" class="form-control" id="footercopyright" required>
             </div>

              <div class="form-group mt-3">
              <label for="facebookurl">Facebook URL</label>
              <input type="text" name="facebookurl"  value="{{$setting->facebookurl}}" class="form-control" id="facebookurl" required>
             </div>

              <div class="form-group mt-3">
              <label for="youtubeurl">Youtube URL</label>
              <input type="text" name="youtubeurl" value="{{$setting->youtubeurl}}" class="form-control" id="youtubeurl" required>
             </div>

              <div class="form-group mt-3">
              <label for="emailurl">Email URL</label>
              <input type="text" name="emailurl" value="{{$setting->emailurl}}" class="form-control" id="emailurl" required>
             </div>

              <div class="form-group mt-3">
              <label for="insturl">Instagram URL</label>
              <input type="text" name="insturl" value="{{$setting->insturl}}" class="form-control" id="insturl" required>
             </div>

              <div class="form-group mt-3">
              <label for="twitterurl">Twitter URL</label>
              <input type="text" name="twitterurl" value="{{$setting->twitterurl}}" class="form-control" id="twitterurl" required>
             </div>


            <div class="form-group">
                <button class="btn btn-primary"> Save </button>
            </div>
        </form>
        </div>
       </div>
    </div>
    @endsection
