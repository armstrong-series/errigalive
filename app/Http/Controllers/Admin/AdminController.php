<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\EventsModel;
use App\Models\TicketModel;

use Exception;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(Request $request){

        $events = EventsModel::all()->count();
        $tickets = TicketModel::all()->count();
        $data = [
            "page" => "dashboard",
            "events" => $events,
            "tickets" => $tickets
        ];
        return view('App.Admin.admin', $data);

    }

    public function clubEvent(){

        $data = ["page" => "events"];
        return view('App.ticket-event', $data);
    }



    public function addClubTruthEvent(Request $request){
        try {

        } catch (Exception $error) {

        }
    }
}
