<?php

namespace App\Modules\Settings\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Settings\Models\EmailConfiguration;
use http\Env\Request;
use Illuminate\View\View;

class EmailConfigurationController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function emailConfiguration():View{
        return view("Settings::email_configuration");
    }

    public function create(Request $request){
        return EmailConfiguration::create([
            ''
        ]);
    }
}
