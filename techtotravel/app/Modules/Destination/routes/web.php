<?php

use App\Modules\Destination\Http\Controllers\DestinationController;
use Illuminate\Support\Facades\Route;


Route::group(array('Module'=>'Dashboard, Traveller'), function () {
    Route::get('/dashboard/traveller', [DestinationController::class, 'welcome']);
});
