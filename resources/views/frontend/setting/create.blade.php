@extends('layouts.app1', ['activePage' => 'frontend.setting.index', 'titlePage' => __('Dashboard')])

    @section('content')
    <div class="container content">
        <div class="heading">
                <h3>Add Site Settings</h3>
                {{-- <a href="{{url('setting')}}" class="btn btn-success float-right">Back</a> --}}
        </div>
     @if(session ('status'))
    <h4 class="alert alert-success">{{session ('status')}}</h4>
    @endif
       <div class="row">
        <div class="col-md-5">
             <form action="{{url('add-logo')}}" method="POST" enctype="multipart/form-data">
             @csrf
            <div>
                <label for="headinlogo">Logo</label>
                <input type="file" class="form-control" name="headinlogo" >
            </div>

             <div>
                <label for="footerlogo">Footer Logo</label>
                <input type="file" class="form-control" name="footerlogo" >
            </div>

            <div>
                <label for="footerlogo">Facebook Icon</label>
                <input type="file" class="form-control" name="facebookicon" >
            </div>

            <div>
                <label for="footerlogo">Insta Icon</label>
                <input type="file" class="form-control" name="instaicon" >
            </div>

            <div>
                <label for="footerlogo">Twitter Icon</label>
                <input type="file" class="form-control" name="twittericon" >
            </div>

            <div>
                <label for="footerlogo">Email Icon</label>
                <input type="file" class="form-control" name="emailicon" >
            </div>
            <div>
                <label for="footerlogo">Youtube Icon</label>
                <input type="file" class="form-control" name="youtubeicon" >
            </div>

            <div>
                <label for="footerlogo">Address Icon</label>
                <input type="file" class="form-control" name="addressicon" >
            </div>

            <div>
                <label for="footerlogo">Phone Icon</label>
                <input type="file" class="form-control" name="phoneicon" >
            </div>
      
        </div>

        <div class="col-md-2"></div>
            <div class="col-md-5">
           
             <form  action="{{url('add-logo')}}" method="POST">
             @csrf
             <div class="form-group">
              <label for="aboutdescription">About Description</label>
              <textarea name="aboutdescription" class="form-control"  ></textarea>
             </div>

             <div class="form-group mt-3">
              <label for="phone">Phone Number</label>
              <input type="number" name="phonenumber" class="form-control" id="phone" >
             </div>

             <div class="form-group mt-3">
              <label for="mapurl">Map URL</label>
              <input type="text" name="mapurl" class="form-control" id="mapurl" >
             </div>

              <div class="form-group mt-3">
              <label for="email">Email</label>
              <input type="email" name="emailaddress" class="form-control" id="emailaddress" >
             </div>

              <div class="form-group mt-3">
              <label for="address">Address</label>
              <input type="text" name="address" class="form-control" id="address" >
             </div>

              <div class="form-group mt-3">
              <label for="footercopyright">Copyright info</label>
              <input type="text" name="footercopyright" class="form-control" id="footercopyright" >
             </div>

              <div class="form-group mt-3">
              <label for="facebookurl">Facebook URL</label>
              <input type="text" name="facebookurl" class="form-control" id="facebookurl" >
             </div>

              <div class="form-group mt-3">
              <label for="youtubeurl">Youtube URL</label>
              <input type="text" name="youtubeurl" class="form-control" id="youtubeurl" >
             </div>

              <div class="form-group mt-3">
              <label for="emailurl">Email URL</label>
              <input type="text" name="emailurl" class="form-control" id="emailurl" >
             </div>

              <div class="form-group mt-3">
              <label for="insturl">Instagram URL</label>
              <input type="text" name="insturl" class="form-control" id="insturl" >
             </div>

              <div class="form-group mt-3">
              <label for="twitterurl">Twitter URL</label>
              <input type="text" name="twitterurl" class="form-control" id="twitterurl">
             </div>


            <div class="form-group">
                <button class="btn btn-primary"> Save </button>
            </div>
        </form>
        </div>
       </div>
    </div>
    @endsection
