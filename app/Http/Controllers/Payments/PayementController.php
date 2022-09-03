<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use \GuzzleHttp\Client;
use App\ErrigaLive\ErrigaLive;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\PaymentModel;
use Exception;

class PayementController extends Controller
{
   

    public function initializePaystackPayment(Client $httpClient, Request $request){
        try {
            

            $url = ErrigaLive::PAYSTACK_INITIALIZE_URL;
            $secretKey = ErrigaLive::PAYSTACK_SECRET_KEY;

            $user = User::where('id', Auth::id())->first();
           
            $response = $httpClient->post($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $secretKey,
                    'Content-Type'  => 'application/json'  ,
                    'Cache-Control' => 'no-cache', 
                ],
                'form_params' => [
                    'email' => $request->email,
                    'amount' => $request->price  
                ],
            ]);
            $response = json_decode($response->getBody());

            $ticketNumber = random_int(100, 9999895);
            $payment = new PaymentModel();
            $payment->email = $user->email;
            $payment->qty = $request->qty;
            $payment->price = $request->price;
            $payment->config = $response;
            $payment->ticket_number = "errigalive-".$ticketNumber;
            $payment->save();
            return Redirect::to($url);

        } catch (Exception $error) {
            Log::info("Payments\PaymentController@initializePayment". $error->getMessage());
        }
    }


    protected function paystackCallbackURL() {
        try {
            //code...
        } catch (Exception $error) {
            Log::info("Payments\PaymentController@paystackCallbackURL". $error->getMessage());
        }

    }
}
