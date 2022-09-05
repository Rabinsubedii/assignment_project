<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        $contact = Contact::all();
        return view('frontend.contact.index',compact('contact'));
        
    }

    function add(Request $request){
        $data = new Contact;
        $data ->name = $request->input('name');
        $data ->email = $request->input('email');
        $data ->phone = $request->input('phone');
        $data ->message = $request->input('message');
        $data->save();
        Mail::to('rabbinsubedi@gmail.com')->send (new ContactMail($data));
        return redirect()->back()->with('status', 'Done');
    }

      public function edit ($id)
    {
        $contact = Contact::find($id);
        return view('frontend.contact.edit',compact('contact'));
    }
    
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
         $contact ->name = $request->input('name');
         $contact ->email = $request->input('email');
         $contact ->phone = $request->input('phone');
         $contact ->message = $request->input('message');
        $contact->update();
        return redirect()->back()->with('status', 'Contact Updated Successfully');
     
    }

      public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('status', 'Contact Deleted');
    }
    
}
