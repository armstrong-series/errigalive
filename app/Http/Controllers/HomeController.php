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

    public function eventTicket($eventId)
    {
        $event = EventsModel::where('id', $eventId)->first();
        if(!$event) {
            $message = "Unknown Event!";
            return response()->json(["message" => $message], 404);
        }

        $data = [
            "event" => $event
        ];

        return view('Frontend.event-details', $data);


    }



    public function tickets()
    {
        $events = EventsModel::all();
        $data = [
            'events' => $events
        ];

        return view('Frontend.event-tickets', $data);
    }

    public function ticket()
    {
        // return csrf_token();

        return view('Frontend.ticket');
    }



}
