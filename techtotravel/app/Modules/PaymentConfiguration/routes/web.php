<?php

use App\Modules\Dashboard\Http\Controllers\DashboardController;
use App\Modules\PaymentConfiguration\Http\Controllers\PaymentConfigurationController;
use Illuminate\Support\Facades\Route;

Route::group(array('Module'=>'Dashboard, PaymentConfiguration'), function () {
    Route::get('/dashboard/settings/payment_configuration', [PaymentConfigurationController::class, 'index']);
});
