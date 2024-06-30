<?php

use App\Modules\Traveller\Http\Controllers\TravellerController;
use Illuminate\Support\Facades\Route;

Route::group(array('Module'=>'Traveller'), function () {
// Web routes
    Route::get('/dashboard/travellerList', [TravellerController::class, 'index']);
    Route::get('/dashboard/travellerCreate', [TravellerController::class, 'travellerCreate']);
    Route::get('/dashboard/travellerUpdate/{id}', [TravellerController::class, 'travellerUpdate']);

// API routes

    Route::get('/dashboard/allTraveller', [TravellerController::class, 'allTraveller']);
    Route::get('/dashboard/traveller/get/{id}', [TravellerController::class, 'get_traveller']);
    Route::post('/dashboard/traveller/create', [TravellerController::class, 'createTraveller']);
    Route::post('/dashboard/traveller/update/{id}', [TravellerController::class, 'updateTraveller']);
    Route::post('/dashboard/traveller/delete/{id}', [TravellerController::class, 'deleteTraveller']);
});
