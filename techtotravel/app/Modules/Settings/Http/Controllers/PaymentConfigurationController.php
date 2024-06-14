<?php

namespace App\Modules\Settings\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Settings\Models\PaymentConfiguration;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Mockery\Exception;

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
        try {
            $paymentConfiguration = new PaymentConfiguration();
            $paymentConfiguration->payment_email = $request->input('payment_email');
            $paymentConfiguration->stripe_public_key = $request->input('stripe_public_key');
            $paymentConfiguration->stripe_secret_key = $request->input('stripe_secret_key');

            $bankDetails = [
                'bank_name' => $request->input('bank_name'), // assuming you have individual inputs for bank_name, account_number, etc.
                'account_number' => $request->input('account_number'),
                'branch_name' => $request->input('branch_name'),
                'country' => $request->input('country')
            ];
            $paymentConfiguration->bank_details = json_encode($bankDetails);

            $paymentConfiguration->save();

            return response()->json([
                'success' => true,
                'message' => 'Payment Configuration Created Successfully!!',
                'data' => $paymentConfiguration
            ], 201);
        } catch (Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => $exception->getMessage()
            ], 500);
        }
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
