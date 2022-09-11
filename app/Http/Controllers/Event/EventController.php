<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EventsModel;
use Illuminate\Support\Facades\Log;
use Exception;
use App\Helpers\Paths;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }




    public function eriggaEvents()
    {
        $events = EventsModel::all();
        $data = [
        "page" => "events",
        "events" => $events
        ];
        return view('App.ticket-event', $data);
    }


    public function createErrigaEvent(Request $request)
    {
        try {
            // dd($request->all());
            $validator = $this->validateEvent($request->all());
            if ($validator->fails()) {
                $message = $validator->errors()->all();
                foreach ($message as $messages) {
                    return response()->json(['message' => $messages], 400);
                }
            }

            if ($request->hasFile('event_banner')) {
                $imagePath = storage_path('app/' . Paths::EVENT_BANNER_PATH);
                $extension = $request->file('event_banner')->getClientOriginalExtension();
                if (in_array(strtolower($extension), ["jpg", "png", "jpeg"])) {
                    $fileName = time() . '.' . $extension;
                    $request->file('event_banner')->move($imagePath, $fileName);
                    $event = new EventsModel();
                    $event->id = Auth::id();
                    $event->name = $request->name;
                    $event->venue = $request->venue;
                    $event->date = $request->date;
                    $event->description = $request->description;
                    $event->event_banner = $fileName;
                    // dd($event);
                    $event->save();

                    $message = "New Record added to event";

                    return response()->json(['message' => $message], 200);

                } else {
                    $message = "Invalid file format!";
                    return response()->json(['message' => $message], 400);
                }

            } else {
                $message = "Request has no file";
                return response()->json(['message' => $message], 400);
            }
        } catch (Exception $error) {
            Log::info("EventController@createErrigaEvent". $error->getMessage());
        }
    }


    public function updateEvent(Request $request)
    {
        try {
            $event = EventsModel::where('id', $request->id)->first();
            if(!$event){
                $message = "Event not found!";
                return response()->json(["message" => $message],404);

            }

            $event->name = $request->name;
            $event->venue = $request->venue;
            $event->date = $request->date;
            $event->description = $request->description;
        } catch (Exception $error) {
            Log::info("EventController@updateEvent". $error->getMessage());
        }
    }



    protected function validateEvent(array $data)
    {
        return Validator::make(
            $data, [
            'name' => 'required|string',
            'venue' => 'required|string',
            'date' => 'required|date',
            'description' => 'required|string'

            ]
        );
    }

}
