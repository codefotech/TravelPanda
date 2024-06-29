<?php

namespace App\Modules\Destination\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DestinationController extends Controller
{
    public function index():View{
        return view("Destination::index");
    }
}
