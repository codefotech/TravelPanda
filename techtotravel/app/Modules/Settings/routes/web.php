<?php

use App\Modules\Dashboard\Http\Controllers\DashboardController;
use App\Modules\Settings\Http\Controllers\CaptchaConfigurationController;
use App\Modules\Settings\Http\Controllers\EmailConfigurationController;
use App\Modules\Settings\Http\Controllers\HomePageController;
use App\Modules\Settings\Http\Controllers\PaymentConfigurationController;
use App\Modules\Settings\Http\Controllers\GeneralSettingsController;
use Illuminate\Support\Facades\Route;

Route::group(array('Module'=>'Dashboard, Settings'), function () {
    //    web routes ---------------------------
    Route::get('/dashboard/settings/generalSettings', [GeneralSettingsController::class, 'generalSettings']);
    Route::get('/dashboard/settings/emailConfiguration', [EmailConfigurationController::class, 'emailConfiguration']);
    Route::get('/dashboard/settings/paymentConfiguration', [PaymentConfigurationController::class, 'paymentConfiguration']);
    Route::get('/dashboard/settings/captchaConfiguration', [CaptchaConfigurationController::class, 'captchaConfiguration']);





    //    api routes ---------------------------
    Route::get('/dashboard/settings/email_configuration', [EmailConfigurationController::class, 'getEmailConfiguration']);
    Route::get('/dashboard/settings/email_configuration/create', [EmailConfigurationController::class, 'emailConfigurationCreate']);
    Route::post('/dashboard/settings/email_configuration/update', [EmailConfigurationController::class, 'emailConfigurationUpdate']);



    Route::get('/dashboard/settings/captcha_configuration', [CaptchaConfigurationController::class, 'captchaConfigurationList']);
    Route::get('/dashboard/settings/captcha_configuration/create', [CaptchaConfigurationController::class, 'captchaConfigurationCreate']);
    Route::get('/dashboard/settings/captcha_configuration/delete/{id}', [CaptchaConfigurationController::class, 'captchaConfigurationDelete']);
    Route::get('/dashboard/settings/captcha_configuration/update/{id}', [CaptchaConfigurationController::class, 'captchaConfigurationUpdate']);
    Route::get('/dashboard/settings/captcha_configuration/id_check/{id}', [CaptchaConfigurationController::class, 'captchaConfigurationIdCheck']);

    Route::get('/dashboard/settings/payment_configuration', [PaymentConfigurationController::class, 'paymentConfigurationList']);
    Route::get('/dashboard/settings/payment_configuration/create', [PaymentConfigurationController::class, 'paymentConfigurationCreate']);
    Route::get('/dashboard/settings/payment_configuration/delete/{id}', [PaymentConfigurationController::class, 'paymentConfigurationDelete']);
    Route::get('/dashboard/settings/payment_configuration/update/{id}', [PaymentConfigurationController::class, 'paymentConfigurationUpdate']);
    Route::get('/dashboard/settings/payment_configuration/id_check/{id}', [PaymentConfigurationController::class, 'paymentConfigurationIdCheck']);

    Route::get('/dashboard/settings/general_settings', [GeneralSettingsController::class, 'generalSettingsList']);
    Route::get('/dashboard/settings/general_settings/create', [GeneralSettingsController::class, 'generalSettingsCreate']);
    Route::get('/dashboard/settings/general_settings/delete/{id}', [GeneralSettingsController::class, 'generalSettingsDelete']);
    Route::get('/dashboard/settings/general_settings/update/{id}', [GeneralSettingsController::class, 'generalSettingsUpdate']);
    Route::get('/dashboard/settings/general_settings/id_check/{id}', [GeneralSettingsController::class, 'generalSettingsIdCheck']);

    Route::get('/dashboard/settings/home_page', [HomePageController::class, 'homePageList']);
    Route::get('/dashboard/settings/home_page/create', [HomePageController::class, 'homePageCreate']);
    Route::get('/dashboard/settings/home_page/delete/{id}', [HomePageController::class, 'homePageDelete']);
    Route::get('/dashboard/settings/home_page/update/{id}', [HomePageController::class, 'homePageUpdate']);
    Route::get('/dashboard/settings/home_page/id_check/{id}', [HomePageController::class, 'homePageIdCheck']);

});






