<?php

use App\Modules\Destination\Http\Controllers\DestinationController;
use Illuminate\Support\Facades\Route;


Route::group(['Module'=>'Destination'], function () {
// Web routes
    Route::get('/dashboard/destination', [DestinationController::class, 'index']);
    Route::get('/dashboard/destination_create', [DestinationController::class, 'destinationCreate']);
    Route::get('/dashboard/destination_update/{id}', [DestinationController::class, 'destinationUpdate']);
    Route::get('/dashboard/destination_details/{id}', [DestinationController::class, 'destinationDetails']);

// API routes
    Route::get('/dashboard/destination/all', [DestinationController::class, 'allDestination']);
    Route::get('/dashboard/destination/get/{id}', [DestinationController::class, 'getDestination']);
    Route::post('/dashboard/destination/create', [DestinationController::class, 'createDestination']);
    Route::post('/dashboard/destination/update/{id}', [DestinationController::class, 'updateDestination']);
    Route::post('/dashboard/destination/delete/{id}', [DestinationController::class, 'deleteDestination']);
});
