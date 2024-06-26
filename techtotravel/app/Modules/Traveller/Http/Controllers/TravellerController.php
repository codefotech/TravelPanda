<?php

namespace App\Modules\Traveller\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TravellerController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view("Traveller::welcome");
    }
}
