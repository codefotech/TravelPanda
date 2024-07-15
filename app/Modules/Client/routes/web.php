<?php

use App\Modules\Client\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::group(['Module'=>'Client'], function () {
// Web routes
    Route::get('/dashboard/client', [ClientController::class, 'index']);
    Route::get('/dashboard/client_create', [ClientController::class, 'clientCreate']);
    Route::get('/dashboard/client_update/{id}', [ClientController::class, 'clientUpdate']);
    Route::get('/dashboard/client_details/{id}', [ClientController::class, 'clientDetails']);

// API routes
    Route::get('/dashboard/client/all', [ClientController::class, 'allClient']);
    Route::get('/dashboard/client/get/{id}', [ClientController::class, 'getClient']);
    Route::post('/dashboard/client/create', [ClientController::class, 'createClient']);
    Route::post('/dashboard/client/update/{id}', [ClientController::class, 'updateClient']);
    Route::post('/dashboard/client/delete/{id}', [ClientController::class, 'deleteClient']);
});
