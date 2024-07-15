<?php

use App\Modules\Traveller\Http\Controllers\TravellerController;
use Illuminate\Support\Facades\Route;

Route::group(array('Module'=>'Traveller'), function () {
// Web routes
    Route::get('/dashboard/traveller', [TravellerController::class, 'index']);
    Route::get('/dashboard/traveller_create', [TravellerController::class, 'travellerCreate']);
    Route::get('/dashboard/traveller_update/{id}', [TravellerController::class, 'travellerUpdate']);
    Route::get('/dashboard/traveller_details/{id}', [TravellerController::class, 'travellerDetails']);

// API routes

    Route::get('/dashboard/traveller/all', [TravellerController::class, 'allTraveller']);
    Route::get('/dashboard/traveller/get/{id}', [TravellerController::class, 'getTraveller']);
    Route::post('/dashboard/traveller/create', [TravellerController::class, 'createTraveller']);
    Route::post('/dashboard/traveller/update/{id}', [TravellerController::class, 'updateTraveller']);
    Route::post('/dashboard/traveller/delete/{id}', [TravellerController::class, 'deleteTraveller']);
});
