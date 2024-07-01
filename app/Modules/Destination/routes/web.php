<?php

use App\Modules\Destination\Http\Controllers\DestinationController;
use Illuminate\Support\Facades\Route;


Route::group(array('Module'=>'Destination'), function () {
// Web routes
    Route::get('/dashboard/destinationList', [DestinationController::class, 'index']);
    Route::get('/dashboard/destinationCreate', [DestinationController::class, 'destinationCreate']);
    Route::get('/dashboard/destinationUpdate/{id}', [DestinationController::class, 'destinationUpdate']);
    Route::get('/dashboard/destinationDetails/{id}', [DestinationController::class, 'destinationDetails']);

// API routes
    Route::get('/dashboard/allDestination', [DestinationController::class, 'allDestination']);
    Route::get('/dashboard/destination/get/{id}', [DestinationController::class, 'get_destination']);
    Route::post('/dashboard/destination/create', [DestinationController::class, 'createDestination']);
    Route::post('/dashboard/destination/update/{id}', [DestinationController::class, 'updateDestination']);
    Route::post('/dashboard/destination/delete/{id}', [DestinationController::class, 'deleteDestination']);
});
