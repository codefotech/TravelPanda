<?php

use App\Modules\Dashboard\Http\Controllers\DashboardController;
use App\Modules\Settings\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

Route::group(array('Module'=>'Dashboard, Settings'), function () {
    Route::get('/dashboard/settings/general_settings', [SettingsController::class, 'index']);
});

