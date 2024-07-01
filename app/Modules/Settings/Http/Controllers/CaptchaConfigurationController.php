<?php

namespace App\Modules\Settings\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Settings\Models\CaptchaConfiguration;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Exception;

class CaptchaConfigurationController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function captchaConfiguration():View{
        return view("Settings::captcha_configuration");
    }



    public function getCaptchaConfiguration()
    {
        try {
            $captchaConfiguration = CaptchaConfiguration::first();

            if (!$captchaConfiguration) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Captcha Configuration Not Found!!'
                ], 404);
            }

            $captchaData = $captchaConfiguration->toArray();

            return response()->json([
                'status' => 'success',
                'message' => 'Captcha Configuration Retrieved Successfully',
                'data' => $captchaData
            ], 200);

        } catch (Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch captcha configuration',
                'error' => $exception->getMessage()
            ], 500);
        }
    }

    public function captchaConfigurationCreate(Request $request)
    {
        try {
            CaptchaConfiguration::create([
                'traveller_name' => $request->input('traveller_name'),
                'traveller_email' => $request->input('traveller_email'),
                'traveller_phone' => $request->input('traveller_phone'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'country' => $request->input('country'),
                'address' => $request->input('address'),
                'status' => $request->input('status')
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Captcha Configuration Created Successfully!!'
            ], 201);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failure',
                'message' => 'Failed to create captcha configuration',
                'error' => $exception->getMessage()
            ], 500);
        }
    }

    public function captchaConfigurationUpdate(Request $request)
    {
        try {
            $captchaConfiguration = CaptchaConfiguration::first();

            if (!$captchaConfiguration) {
                return response()->json([
                    'status' => 'failure',
                    'message' => 'Captcha Configuration Not Found!!'
                ], 404);
            }

            $captchaConfiguration->update([
                'traveller_name' => $request->input('traveller_name'),
                'traveller_email' => $request->input('traveller_email'),
                'traveller_phone' => $request->input('traveller_phone'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'country' => $request->input('country'),
                'address' => $request->input('address'),
                'status' => $request->input('status')
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Captcha Configuration Updated Successfully!!',
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
