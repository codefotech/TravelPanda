<?php

use App\Modules\Destination\Http\Controllers\DestinationController;
use Illuminate\Support\Facades\Route;


Route::group(array('Module'=>'Destination'), function () {
    // web routes ---------------------------
    Route::get('/dashboard/destination', [DestinationController::class, 'index']);
});
