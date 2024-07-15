<?php

use App\Modules\Testimonial\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::group(['Module'=>'Testimonial'], function () {
// Web routes
    Route::get('/dashboard/testimonial', [TestimonialController::class, 'index']);
    Route::get('/dashboard/testimonial_create', [TestimonialController::class, 'testimonialCreate']);
    Route::get('/dashboard/testimonial_update/{id}', [TestimonialController::class, 'testimonialUpdate']);
    Route::get('/dashboard/testimonial_details/{id}', [TestimonialController::class, 'testimonialDetails']);

// API routes
    Route::get('/dashboard/testimonial/all', [TestimonialController::class, 'allTestimonial']);
    Route::get('/dashboard/testimonial/get/{id}', [TestimonialController::class, 'getTestimonial']);
    Route::post('/dashboard/testimonial/create', [TestimonialController::class, 'createTestimonial']);
    Route::post('/dashboard/testimonial/update/{id}', [TestimonialController::class, 'updateTestimonial']);
    Route::post('/dashboard/testimonial/delete/{id}', [TestimonialController::class, 'deleteTestimonial']);
});
