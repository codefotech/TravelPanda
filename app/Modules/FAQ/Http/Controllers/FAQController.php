<?php

namespace App\Modules\FAQ\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FAQController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view("FAQ::welcome");
    }
}
