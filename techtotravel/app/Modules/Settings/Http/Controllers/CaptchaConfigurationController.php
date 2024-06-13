<?php

namespace App\Modules\Settings\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Settings\Models\CaptchaConfiguration;
use Illuminate\Http\Request;
use Illuminate\View\View;

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



    public function captchaConfigurationList(Request $request){
        return CaptchaConfiguration::all();
    }

    public function captchaConfigurationCreate(Request $request){
        CaptchaConfiguration::create([
            'recaptcha_site_key' => $request->input('recaptcha_site_key'),
            'recaptcha_status' => $request->input('recaptcha_status'),
        ]);

        return response()->json([
            'success' => 'success',
            'message' => 'Captcha Configuration Created Successfully!!'
        ], 201);
    }

    public function captchaConfigurationDelete(Request $request){
        $captcha_configuration_id = $request->input('id');
        $captchaConfiguration = CaptchaConfiguration::find($captcha_configuration_id);

        if ($captchaConfiguration) {
            $captchaConfiguration->delete();
            return response()->json([
                'success' => 'success',
                'message' => 'Captcha Configuration Deleted Successfully!!'
            ], 200);
        }

        return response()->json([
            'success' => 'failure',
            'message' => 'Captcha Configuration Not Found!!'
        ], 404);
    }

    public function captchaConfigurationUpdate(Request $request){
        $captcha_configuration_id = $request->input('id');
        $captchaConfiguration = CaptchaConfiguration::find($captcha_configuration_id);

        if ($captchaConfiguration) {
            $captchaConfiguration->update([
                'recaptcha_site_key' => $request->input('recaptcha_site_key'),
                'recaptcha_status' => $request->input('recaptcha_status'),
            ]);

            return response()->json([
                'success' => 'success',
                'message' => 'Captcha Configuration Updated Successfully!!'
            ], 200);
        }

        return response()->json([
            'success' => 'failure',
            'message' => 'Captcha Configuration Not Found!!'
        ], 404);
    }

    public function captchaConfigurationIdCheck(Request $request){

        $captcha_configuration_id = $request->input('id');
        $captchaConfiguration = CaptchaConfiguration::find($captcha_configuration_id);

        if ($captchaConfiguration) {
            return response()->json([
                'success' => 'success',
                'message' => 'Captcha Configuration Found'
            ], 200);
        }

        return response()->json([
            'success' => 'failure',
            'message' => 'Captcha Configuration Not Found'
        ], 404);

    }
}
