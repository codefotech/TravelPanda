<?php

namespace App\Modules\Settings\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Settings\Models\GeneralSettings;
use Illuminate\Http\Request;
use Illuminate\View\View;

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

    }
    public function generalSettingsDelete(Request $request){

    }
    public function generalSettingsUpdate(Request $request){

    }
    public function generalSettingsIdCheck(Request $request){

    }
}
