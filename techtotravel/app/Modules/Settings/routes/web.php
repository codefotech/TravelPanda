<?php

use App\Modules\Dashboard\Http\Controllers\DashboardController;
use App\Modules\Settings\Http\Controllers\CaptchaConfigurationController;
use App\Modules\Settings\Http\Controllers\EmailConfigurationController;
use App\Modules\Settings\Http\Controllers\PaymentConfigurationController;
use App\Modules\Settings\Http\Controllers\GeneralSettingsController;
use Illuminate\Support\Facades\Route;

Route::group(array('Module'=>'Dashboard, Settings'), function () {
    Route::get('/dashboard/settings/general_settings', [GeneralSettingsController::class, 'generalSettings']);
    Route::get('/dashboard/settings/email_configuration', [EmailConfigurationController::class, 'emailConfiguration']);
    Route::get('/dashboard/settings/payment_configuration', [PaymentConfigurationController::class, 'paymentConfiguration']);
    Route::get('/dashboard/settings/captcha_configuration', [CaptchaConfigurationController::class, 'captchaConfiguration']);


    Route::prefix('/dashboard/settings/email_configuration')->group(function () {
        Route::match(['get', 'post'], '/', [EmailConfigurationController::class, 'list'])->name('email_configuration.list');
        Route::get('create', [EmailConfigurationController::class, 'create'])->name('email_configuration.create');
        Route::post('store', [EmailConfigurationController::class, 'store'])->name('email_configuration.store');
        Route::get('delete', [EmailConfigurationController::class, 'delete'])->name('email_configuration.delete');
        Route::get('edit/{id}', [EmailConfigurationController::class, 'edit'])->name('email_configuration.edit');
        Route::get('id_check', [EmailConfigurationController::class, 'id_check'])->name('email_configuration.id_check');
    });


});






