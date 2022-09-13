<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventsModel;
use App\Models\TicketModel;
use \GuzzleHttp\Client;
use App\ErrigaLive\ErrigaLive;
use Illuminate\Support\Facades\Redirect;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function errigaLiveHome()
    {
        $events = EventsModel::all();

        $data = [
            'events' => $events
        ];
        return view('Frontend.index', $data);
    }

    public function eventTicket($eventId){
        $event = EventsModel::where('id', $eventId)->first();
        if(!$event){
            $message = "Unknown Event!";
            return response()->json(["message" => $message], 404);
        }

        $data = [
            "event" => $event
        ];

        return view('Frontend.event-details', $data);


    }

    public function ticket($eventId){
        $event = EventsModel::where('id', $eventId)->first();
        if(!$event){
            $message = "Unknown Event!";
            return response()->json(["message" => $message], 404);
        }
        $data = [
            "event" => $event
        ];

        return view('Frontend.ticket', $data);
    }


    public function ticketPayement(Request $request, $eventId){

        $event = EventsModel::where('id', $eventId)->first();
        if(!$event){
            $message = "Unknown Event!";
            return response()->json(["message" => $message], 404);
        }

        $ticketNumber = random_int(100, 9999895);
        $ticket = new TicketModel();
        $ticket->id = $request->id;
        $ticket->ticket_name = $event->name;
        $ticket->qty = $request->qty;
        $ticket->price = $event->price;
        $ticket->ticket_number ="errigalive-".$ticketNumber;
        dd($ticket);
        $ticket->save();
        $url = route("ticket");
        return response()->json([ "url" => $url]);

    }
}
