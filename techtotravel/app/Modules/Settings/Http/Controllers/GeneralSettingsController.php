<?php

namespace App\Modules\Settings\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Settings\Models\GeneralSettings;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Mockery\Exception;

class GeneralSettingsController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function generalSettings():View{
        return view("Settings::general_settings");
    }

    public function generalSettingsList(Request $request){
        return GeneralSettings::all();
    }

    public function generalSettingsCreate(Request $request){
        try {
            GeneralSettings::create([
                'logo' => $request->input('logo'),
                'favicon' => $request->input('favicon'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'copyright_text' => $request->input('copyright_text'),
                'social_icon' => $request->input('social_icon'),
                'social_icon_url' => $request->input('social_icon_url'),
                'banner' => $request->input('banner'),
            ]);

            return response()->json([
                'success' => 'success',
                'message' => 'Email Configuration Created Successfully!!'
            ], 201);
        } catch (Exception $exception) {
            return response()->json([
                'success' => 'failure',
                'message' => $exception->getMessage()
            ], 404);
        }
    }
    public function generalSettingsDelete(Request $request){
        $general_settings_id = $request->input('id');
        $generalSettings = GeneralSettings::find($general_settings_id);

        if ($generalSettings) {
            $generalSettings->delete();
            return response()->json([
                'success' => 'success',
                'message' => 'General Settings Deleted Successfully!!'
            ], 200);
        }

        return response()->json([
            'success' => 'failure',
            'message' => 'General Settings Not Found!!'
        ], 404);
    }
    public function generalSettingsUpdate(Request $request){

    }
    public function generalSettingsIdCheck(Request $request){
        $general_settings_id = $request->input('id');
        $generalSettings = EmailConfiguration::find($general_settings_id);

        if ($generalSettings) {
            return response()->json([
                'success' => 'success',
                'message' => 'General Settings Found'
            ], 200);
        }

        return response()->json([
            'success' => 'failure',
            'message' => 'General Settings Not Found'
        ], 404);
    }
}
