<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Safaricom\Mpesa\Mpesa;
use App\Models\payment;

class MpesaController extends Controller
{
    public $artistCode;
    public function payments(){
        $payments = payment::get();
        return view('payments.index',compact('payments'));

    }

    //
    public function stk(Request $request){
       $this->artistCode = $request->code;
       $amount = $request->vote;
       $code = $request->code;
       $phone_number =  $request->phone;
       $phone = str_replace("254","0",$phone_number);

        $BusinessShortCode = env('SHORTCODE');
        $LipaNaMpesaPasskey = env('PASSKEY');
        $TransactionType = 'CustomerPayBillOnline';
        $Amount = $request->vote;
        // $PartyA = $request->phone;
        $PartyA = $phone;
        $PartyB = env('SHORTCODE');
        $PhoneNumber = $request->phone;
        // $CallBackURL = 'http://491b-105-163-200-73.ngrok.io/folder/callback.php';
        $CallBackURL = 'https://913c-197-248-18-239.ngrok.io/api/mpesa/stkpush/response';
        $AccountReference = 'TalantaAwards artist-code -'.$code;
        $TransactionDesc = 'Payment code X';
        $Remarks = 'Payment Succefull!';

        $mpesa= new Mpesa();

       $stkPushSimulation=$mpesa->STKPushSimulation(
        $BusinessShortCode,
        $LipaNaMpesaPasskey,
        $TransactionType,
        $Amount,
        $PartyA,
        $PartyB,
        $PhoneNumber,
        $CallBackURL,
        $AccountReference,
        $TransactionDesc,
        $Remarks
    );
    // $senddata = json_encode($stkPushSimulation);
    return redirect()->route('payments');

    }

    public function callback(Request $request){


        $stkCallbackResponse = $request->getContent();
        $logFile = "stkPushCallbackResponse.txt";
        $log = fopen($logFile, "a");
        fwrite($log, $stkCallbackResponse);
        fclose($log);

        $data = json_decode($stkCallbackResponse);
        $result_desc = $data->Body->stkCallback->ResultDesc;
        $result_code = $data->Body->stkCallback->ResultCode;
        $merchant_request_id = $data->Body->stkCallback->MerchantRequestID;
        $checkout_request_id = $data->Body->stkCallback->CheckoutRequestID;
        $amount = $data->Body->stkCallback->CallbackMetadata->Item[0]->Value;
        $mpesa_receipt_number = $data->Body->stkCallback->CallbackMetadata->Item[1]->Value;
        $transaction_date = $data->Body->stkCallback->CallbackMetadata->Item[3]->Value;
        $phone_number = $data->Body->stkCallback->CallbackMetadata->Item[4]->Value;

        $mpesa_payment = new payment;
        $mpesa_payment->phone = $phone_number;
        $mpesa_payment->amount = $amount;
        $mpesa_payment->mpesa_receipt_number = $mpesa_receipt_number;
        $mpesa_payment->transaction_date = $transaction_date;
        $mpesa_payment->artist_code = $this->artistCode;
        $mpesa_payment->save();

    }

}
