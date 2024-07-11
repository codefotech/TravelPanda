<?php

use App\Modules\Package\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

Route::group( ['Module' => 'Package'], function () {
    // Web routes
    Route::get( '/dashboard/packageList', [PackageController::class, 'index'] );
    Route::get( '/dashboard/packageCreate', [PackageController::class, 'packageCreate'] );
    Route::get( '/dashboard/packageUpdate/{id}', [PackageController::class, 'packageUpdate'] );
    Route::get( '/dashboard/packageDetails/{id}', [PackageController::class, 'packageDetails'] );

    // API routes
    Route::get( '/dashboard/allPackages', [PackageController::class, 'allPackage'] );
    Route::get('/dashboard/package/get/{id}', [PackageController::class, 'get_package']);
    Route::post( '/dashboard/package/create', [PackageController::class, 'createPackage'] );
    Route::post( '/dashboard/package/update/{id}', [PackageController::class, 'updatePackage'] );
    Route::post( '/dashboard/package/delete/{id}', [PackageController::class, 'deletePackage'] );
} );
