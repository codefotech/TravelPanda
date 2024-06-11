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
//    public function welcome()
//    {
//        return view("Settings::welcome");
//    }
    public function index():View{
        return view("Settings::index");
    }

    public function logo(Request $request){

    }

    public function favicon(Request $request){

    }

    public function generalContent(Request $request){

    }
    public function email(Request $request){

    }
    public function newsAndTours(Request $request){

    }
    public function homePage(Request $request){

    }
    public function banner(Request $request){

    }
    public function payment(Request $request){

    }
    public function captcha(Request $request){

    }
    public function other(Request $request){

    }
}
