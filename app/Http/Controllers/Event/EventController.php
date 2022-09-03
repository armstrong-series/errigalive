<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EventsModel;
use Illuminate\Support\Facades\Log;
use Exception;
use Auth;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function errigaEvents(){
        return view('App.ticket-event');
    }


    public function createErrigaEvent(Request $request){
        try {
            //code...
        } catch (Exception $error) {
            Log::info("EventController@createErrigaEvent". $error->getMessage());
        }
    }

}
