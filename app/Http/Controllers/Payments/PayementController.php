<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\TicketModel;
use App\Models\User;
use App\Mail\PaymentVerificationMail;
use Illuminate\Support\Facades\Mail;
use Exception;
use App\ErrigaLive\ErrigaLive;
use Illuminate\Support\Facades\Http;

class PayementController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function initializePaystackPayment(Request $request)
    {

        try {

            $requestParams = [
                "amount" => ($request->price) * 100,
                "email" => Auth::user()->email,
                "currency" => "NGN",
                "channels" => ["card"],
                "subaccount" => ErrigaLive::BANK_ACCOUNT,
                "callback_url" => route('payment.callback')
            ];

            $InitializeURL = ErrigaLive::PAYSTACK_INITIALIZE_URL;
            $response = Http::withHeaders([
                'accept' => '*/*',
                'Authorization' => 'Bearer ' . ErrigaLive::PAYSTACK_SECRET_KEY,
                'Cache-Control' => 'no-cache',
                'Content-Type' => 'application/json'
            ])->post($InitializeURL,  $requestParams);
            $transportData = json_decode($response, true);
            return redirect()->away($transportData['data']['authorization_url']);
        } catch (Exception $error) {
            Log::info("Payments\PaymentController@initializePaystackPayment" . $error->getMessage());
            $message = "Unable to process payment";
            return response()->json(["message" => $message], 500);
        }
    }



    public function paystackCallbackURL(Request $request)
    {
        try {

            if (!$request->reference) {
                $message = "No reference supplied!";
                return response()->json(["message" => $message], 400);
            }

            $reference = $request->reference;
            $verificaionURL = ErrigaLive::PAYSTACK_VERIFYURL .rawurlencode($reference);

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . ErrigaLive::PAYSTACK_SECRET_KEY,
                'Cache-Control' => 'no-cache',
                'Content-Type' => 'application/json'
            ])->get($verificaionURL);

            $paymentDetails = json_decode($response);

            $user = Auth::user();
            $amount = ($paymentDetails->data->amount) / 100;
            $status =  $paymentDetails->data->status;
            if ($status === "success") {
                $ticket = new TicketModel();
                $ticket->user_id = Auth::id();
                $ticket->email = $user->email;
                $ticket->price = $amount;
                $ticket->ticket_number = 'erigga-live' . mt_rand(100000, 999999);
                $ticket->ticket_id = $paymentDetails->data->reference;
                $ticket->qty = 0;
                $ticket->save();
                Mail::to($user->email)->send(new PaymentVerificationMail($user, $ticket));
                return view('Frontend.ticket');
            }
        } catch (Exception $error) {
            Log::info("Payments\PaymentController@paystackCallbackURL" . $error->getMessage());
            $message = "Unable to process Payment. Try again";
            return response()->json(["message" => $message], 500);
        }
    }



    public function ticketPayment()
    {


        return view('Frontend.ticket');
    }
}
