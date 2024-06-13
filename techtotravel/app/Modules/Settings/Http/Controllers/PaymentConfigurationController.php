<?php

namespace App\Modules\Settings\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Settings\Models\PaymentConfiguration;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PaymentConfigurationController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function paymentConfiguration():View{
        return view("Settings::payment_configuration");
    }



    public function paymentConfigurationList(Request $request){
        return PaymentConfiguration::all();
    }

    public function paymentConfigurationCreate(Request $request){
        PaymentConfiguration::create([
            'payment_email' => $request->input('payment_email'),
            'stripe_public_key' => $request->input('stripe_public_key'),
            'stripe_secret_key' => $request->input('stripe_secret_key'),
            'bank_details' => $request->input('bank_details'),
        ]);

        return response()->json([
            'success' => 'success',
            'message' => 'Payment Configuration Created Successfully!!'
        ], 201);
    }

    public function paymentConfigurationDelete(Request $request){
        $payment_configuration_id = $request->input('id');
        $paymentConfiguration = PaymentConfiguration::find($payment_configuration_id);

        if ($paymentConfiguration) {
            $paymentConfiguration->delete();
            return response()->json([
                'success' => 'success',
                'message' => 'Payment Configuration Deleted Successfully!!'
            ], 200);
        }

        return response()->json([
            'success' => 'failure',
            'message' => 'Payment Configuration Not Found!!'
        ], 404);
    }

    public function paymentConfigurationUpdate(Request $request){
        $payment_configuration_id = $request->input('id');
        $paymentConfiguration = PaymentConfiguration::find($payment_configuration_id);

        if ($paymentConfiguration) {
            $paymentConfiguration->update([
                'payment_email' => $request->input('payment_email'),
                'stripe_public_key' => $request->input('stripe_public_key'),
                'stripe_secret_key' => $request->input('stripe_secret_key'),
                'bank_details' => $request->input('bank_details'),
            ]);

            return response()->json([
                'success' => 'success',
                'message' => 'Payment Configuration Updated Successfully!!'
            ], 200);
        }

        return response()->json([
            'success' => 'failure',
            'message' => 'Payment Configuration Not Found!!'
        ], 404);
    }

    public function paymentConfigurationIdCheck(Request $request){
        $payment_configuration_id = $request->input('id');
        $paymentConfiguration = PaymentConfiguration::find($payment_configuration_id);

        if ($paymentConfiguration) {
            return response()->json([
                'success' => 'success',
                'message' => 'Payment Configuration Found'
            ], 200);
        }

        return response()->json([
            'success' => 'failure',
            'message' => 'Payment Configuration Not Found'
        ], 404);
    }
}
