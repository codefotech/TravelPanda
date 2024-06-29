<?php

use App\Modules\Traveller\Http\Controllers\TravellerController;
use Illuminate\Support\Facades\Route;

Route::group(array('Module'=>'Traveller'), function () {
    // web route --
    Route::get('/dashboard/travellerList', [TravellerController::class, 'index']);
    Route::get('/dashboard/travellerCreate', [TravellerController::class, 'travellerCreate']);
    Route::get('/dashboard/travellerUpdate', [TravellerController::class, 'travellerUpdate']);

    // api route --
    Route::get('/dashboard/traveller/get', [TravellerController::class, 'get_traveller']);
    Route::post('/dashboard/traveller/create', [TravellerController::class, 'create']);
    Route::post('/dashboard/traveller/update', [TravellerController::class, 'update']);
    Route::post('/dashboard/traveller/delete', [TravellerController::class, 'delete']);
});
