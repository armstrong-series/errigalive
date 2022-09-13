<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use \GuzzleHttp\Client;
use App\ErrigaLive\ErrigaLive;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\TicketModel;
use Exception;

class PayementController extends Controller
{


    public function initializePaystackPayment(Http $httpClient, Request $request){
        try {
            $url = ErrigaLive::PAYSTACK_INITIALIZE_URL;
            $secretKey = ErrigaLive::PAYSTACK_SECRET_KEY;
             $params = [
                'email' => 'test@gmail.com',
                'amount' => '40000',
                'callback_url' => route('ticket.callback')
             ];

            $response = $httpClient::withHeaders([
                "accept" => "*/*",
                'authorization' => 'Bearer ' . $secretKey,
                'content-Type'  => 'application/json'  ,
                'cache-Control' => 'no-cache',
            ])->post($url, $params);
            $response = json_decode($response->getBody());
            // dd($response);
            return Redirect::to($url);

            // $ticketNumber = random_int(100, 9999895);
            // $payment = new TicketModel();

            // $payment->qty = $request->qty;
            // $payment->price = $request->price;
            // $payment->config = $response;
            // $payment->ticket_number = "errigalive-".$ticketNumber;
            // $payment->save();
            // return Redirect::to($url);

        } catch (Exception $error) {
            Log::info("Payments\PaymentController@initializePayment". $error->getMessage());
        }
    }


    protected function paystackCallbackURL() {
        try {
            return view('Frontend.index');
        } catch (Exception $error) {
            Log::info("Payments\PaymentController@paystackCallbackURL". $error->getMessage());
        }

    }
}
