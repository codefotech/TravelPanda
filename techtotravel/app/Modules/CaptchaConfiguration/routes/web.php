<?php

use App\Modules\CaptchaConfiguration\Http\Controllers\CaptchaConfigurationController;
use App\Modules\Dashboard\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(array('Module'=>'Dashboard, CaptchaConfiguration'), function () {
    Route::get('/dashboard/settings/captcha_configuration', [CaptchaConfigurationController::class, 'index']);
});
