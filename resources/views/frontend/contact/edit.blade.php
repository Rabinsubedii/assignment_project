@extends('layouts.app1', ['activePage' => 'frontend.contact.index', 'titlePage' => __('Dashboard')])

    @section('content')
    <div class="container content">
        <div class="heading">
            <h3>Update Contact</h3>
                <a href="{{url('contact')}}" class="btn btn-success float-right">Back</a>
        </div>
     @if(session ('status'))
    <h4 class="alert alert-success">{{session ('status')}}</h4>
    @endif
         <form action="{{ url('updatecontact/'.$contact->id) }}" method="POST"  class="mt-5">
             @csrf
               @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" value="{{$contact->name}}" name="name" required>
            </div>

            
            <div class="form-group mt-3 ">
                <label for="name">Email</label>
                <input type="text" class="form-control" value="{{$contact->email}}" name="email" required>
            </div>


            <div class="form-group mt-3 ">
                <label for="name">Phone</label>
                <input type="text" class="form-control" value="{{$contact->phone}}" name="phone" required>
            </div>

            <div class="form-group mt-3 ">
                <label for="name">Message</label>
                <textarea class="form-control"  name="message"  required
                autofocus> {{ ucfirst($contact->message) }} </textarea>
            </div>
            </select>
            </div>

            <div class="form-group">
                <button class="btn btn-primary"> Save </button>
            </div>
        </form>
    </div>
    @endsection
