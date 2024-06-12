<?php

use App\Modules\Dashboard\Http\Controllers\DashboardController;
use App\Modules\EmailConfiguration\Http\Controllers\EmailConfigurationController;
use Illuminate\Support\Facades\Route;

Route::group(array('Module'=>'Dashboard, EmailConfiguration'), function () {
    Route::get('/dashboard/settings/email_configuration', [EmailConfigurationController::class, 'index']);
});
