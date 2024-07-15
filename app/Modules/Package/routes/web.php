<?php

use App\Modules\Package\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

Route::group( ['Module' => 'Package'], function () {
    // Web routes
    Route::get( '/dashboard/package', [PackageController::class, 'index'] );
    Route::get( '/dashboard/package_create', [PackageController::class, 'packageCreate'] );
    Route::get( '/dashboard/package_update/{id}', [PackageController::class, 'packageUpdate'] );
    Route::get( '/dashboard/package_details/{id}', [PackageController::class, 'packageDetails'] );

    // API routes
    Route::get( '/dashboard/package/all', [PackageController::class, 'allPackage'] );
    Route::get('/dashboard/package/get/{id}', [PackageController::class, 'getPackage']);
    Route::post( '/dashboard/package/create', [PackageController::class, 'createPackage'] );
    Route::post( '/dashboard/package/update/{id}', [PackageController::class, 'updatePackage'] );
    Route::post( '/dashboard/package/delete/{id}', [PackageController::class, 'deletePackage'] );
} );
