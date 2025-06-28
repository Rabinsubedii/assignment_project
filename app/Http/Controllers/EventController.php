<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Setting;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    //
    public function index()
    {
       $setting = Setting::all();
       $event = Event::all();
       return view('frontend.event.index',compact('event','setting'));
    }

     public function create()
    {
        return view('frontend.event.create');
    }


     public function store(Request $request)
    {
        $event = new Event;
        $event ->title = $request->input('title');
        $event ->type = $request->input('type');
        $event ->description = $request->input('description');
        $event ->event_date = $request->input('event_date');
        $event ->status = $request->input('status');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/event/',$filename);
            $event->image=$filename;

        }
         dump($event);

        $event->save();
        return redirect()->back()->with('status', 'Event Added');
    }


    public function show(Event $event)
    {
        $setting = Setting::all();
        return view('frontend.event.event_details', compact('event', 'setting')); 
    }


    public function edit($id)
    {
        $event = Event::find($id);
        return view('frontend.event.edit',compact('event','category'));
    }

     public function update(Request $request, $id)
    {
        $event = Event::find($id);
         $event ->name = $request->input('name');
         $event ->description = $request->input('description');
         $event ->status = $request->input('status');
         $event ->event_date = $request->input('event_date');
        if($request->hasfile('image'))
        {
             $destination = 'uploads/event/'.$event->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/event/',$filename);
            $event->image=$filename;
        }
        $event->update();
        return redirect()->back()->with('status', 'Event Updated');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        // Delete image file if it exists
        $destination = public_path('uploads/event/' . $event->image);
        if (File::exists($destination)) {
            File::delete($destination);
        }

        // Delete the event
        $event->delete();

        return redirect()->back()->with('status', 'Event deleted successfully!');
    }

}
