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


    public function eriggaEvents(){
       $data = [
        "page" => "events"
       ];
       return view('App.ticket-event', $data);
    }


    public function createErrigaEvent(Request $request){
        try {
        


        } catch (Exception $error) {
            Log::info("EventController@createErrigaEvent". $error->getMessage());
        }
    }

}
