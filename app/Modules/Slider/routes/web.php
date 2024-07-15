<?php

use App\Modules\Slider\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

Route::group(['Module'=>'Slider'], function () {
// Web routes
    Route::get('/dashboard/slider', [SliderController::class, 'index']);
    Route::get('/dashboard/slider_create', [SliderController::class, 'sliderCreate']);
    Route::get('/dashboard/slider_update/{id}', [SliderController::class, 'sliderUpdate']);
    Route::get('/dashboard/slider_details/{id}', [SliderController::class, 'sliderDetails']);

// API routes
    Route::get('/dashboard/slider/all', [SliderController::class, 'allSlider']);
    Route::get('/dashboard/slider/get/{id}', [SliderController::class, 'getSlider']);
    Route::post('/dashboard/slider/create', [SliderController::class, 'createSlider']);
    Route::post('/dashboard/slider/update/{id}', [SliderController::class, 'updateSlider']);
    Route::post('/dashboard/slider/delete/{id}', [SliderController::class, 'deleteSlider']);
});
