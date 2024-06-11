<?php

namespace App\Modules\Dashboard\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
//    public function welcome()
//    {
//        return view("Dashboard::welcome");
//    }

    public function index():View
    {
        return view("Dashboard::index");
    }
}
