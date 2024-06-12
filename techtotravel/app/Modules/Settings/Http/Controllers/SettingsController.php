<?php

namespace App\Modules\Settings\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingsController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function index():View{
        return view("Settings::index");
    }

    public function logo(Request $request){

    }

    public function favicon(Request $request){

    }

    public function generalContent(Request $request){

    }
    public function homePage(Request $request){

    }
    public function contentQuantity(Request $request){

    }
    public function bannerTable(Request $request){

    }
}
