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






    public function getPaymentConfiguration()
    {
        try {
            $paymentConfiguration = PaymentConfiguration::first();

            if (!$paymentConfiguration) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Payment Configuration Not Found!!'
                ], 404);
            }

            $paymentConfigurationData = $paymentConfiguration->toArray();

            // Decode bank_details JSON field
            $bankDetails = json_decode($paymentConfiguration->bank_details, true);
            $paymentConfigurationData['bank_details'] = $bankDetails;

            // Return data in JSON format
            return response()->json([
                'status' => 'success',
                'message' => 'Payment Configuration Retrieved Successfully',
                'data' => $paymentConfigurationData
            ], 200);

        } catch (Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch payment configuration',
                'error' => $exception->getMessage()
            ], 500);
        }
    }




    public function paymentConfigurationCreate(Request $request)
    {
        try {
            $bankDetails = [
                'bank_name' => $request->input('bank_name'),
                'account_number' => $request->input('account_number'),
                'branch_name' => $request->input('branch_name'),
                'country' => $request->input('country')
            ];

            PaymentConfiguration::create([
                'paypal_email' => $request->input('paypal_email'),
                'stripe_public_key' => $request->input('stripe_public_key'),
                'stripe_secret_key' => $request->input('stripe_secret_key'),
                'bank_details' => json_encode($bankDetails),
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Payment Configuration Created Successfully!!'
            ], 201);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failure',
                'message' => $exception->getMessage()
            ], 500);
        }
    }


    public function paymentConfigurationUpdate(Request $request)
    {
        try {
            $paymentConfiguration = PaymentConfiguration::first();

            if (!$paymentConfiguration) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Payment Configuration Not Found!!'
                ], 404);
            }

            // Decode bank_details from request
            $bankDetails = [
                'bank_name' => $request->input('bank_details.bank_name'),
                'account_number' => $request->input('bank_details.account_number'),
                'branch_name' => $request->input('bank_details.branch_name'),
                'country' => $request->input('bank_details.country')
            ];

            // Update payment configuration
            $paymentConfiguration->update([
                'paypal_email' => $request->input('paypal_email'),
                'stripe_public_key' => $request->input('stripe_public_key'),
                'stripe_secret_key' => $request->input('stripe_secret_key'),
                'bank_details' => json_encode($bankDetails),
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Payment Configuration Updated Successfully!!',
            ], 200);

        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Update Failed',
                'error' => $exception->getMessage()
            ], 500);
        }
    }







}
