<?php

namespace App\Modules\PaymentConfiguration\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PaymentConfigurationController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function index():View{
        return view("PaymentConfiguration::index");
    }
}
