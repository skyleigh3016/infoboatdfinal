<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use DB;

class CalendarController extends Controller
{
    public function index()
    {
        $events = array();
        $bookings = Booking::all();
        foreach($bookings as $booking) {
            $color = null;
            if($booking->title == 'Test') {
                $color = '#7914A8';
            }
            if($booking->title == 'Test 1') {
                $color = '#23C6B4';
            }

            $events[] = [
                'id'   => $booking->id,
                'title' => $booking->title,
                'start' => $booking->start_date,
                'end' => $booking->end_date,
                'color' => $color
            ];
        }
        return view('calendar.index', ['events' => $events]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string'
        ]);

        $booking = Booking::create([
            'title' => $request->title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        $color = null;

        if($booking->title == 'Test') {
            $color = '#23C6B4';
        }

        return response()->json([
            'id' => $booking->id,
            'start' => $booking->start_date,
            'end' => $booking->end_date,
            'title' => $booking->title,
            'color' => $color ? $color: '',

        ]);
    }
    public function update(Request $request ,$id)
    {
        $booking = Booking::find($id);
        if(! $booking) {
            return response()->json([
                'error' => 'Unable to locate the event'
            ], 404);
        }
        $booking->update([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        return response()->json('Event updated');
    }
    public function destroy($id)
    {
        $booking = Booking::find($id);
        if(! $booking) {
            return response()->json([
                'error' => 'Unable to locate the event'
            ], 404);
        }
        $booking->delete();
        return $id;
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////
    public function calendar()
    {
        $events = array();
        $bookings = Booking::all();
        foreach($bookings as $booking) {

        $events[] = [
            'id'   => $booking->id,
            'title' => $booking->title,
            'start' => $booking->start_date,
            'end' => $booking->end_date,
            
        ];
    }

        return view('event_calendar', ['events' => $events]);
    }

    public function CalendarAdmin()
    {

        $events = Booking::latest()->get();
        return view('admin.calendar.index', compact('events'));
    }
    public function AddEvent()
    {

        return view('admin.calendar.create');
    }

    public function Event(){
        $events = Booking::latest()->get();
        return view('admin.calendar.index', compact('events'));
    }

    public function StoreEvent(Request $request){
   
        Booking::insert([
        'title' => $request->title,
        'description' => $request->description,
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,
        'venue' => $request->venue,
        'created_at' => Carbon::now()
        
                    ]);
     return Redirect()->route('calendar.admin')->with('success','Event Data Inserted Successfully');
            }

            public function alis(Request $request ,$id) {

                $event = Booking::find($request->id);
                
            
                Booking::where("id", $event->id)->delete();
                return Redirect()->route('calendar.admin')->with('success','Event Data Inserted Successfully');
               
            }
        
            public function UpdateEvent(Request $request){
                $update = [
                    'title' => $request->title,
                    'description' => $request->description,
                    'start_date' => $request->start_date,
                    'end_date' => $request->end_date,
                    'venue' => $request->venue

                ];
                DB:: table('bookings')->where('id',$request->id)->update($update);
                return Redirect()->route('calendar.admin')->with('success','Event Data Inserted Successfully');
                   
            }
}
