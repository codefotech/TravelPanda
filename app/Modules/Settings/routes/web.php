<?php

use App\Modules\Dashboard\Http\Controllers\DashboardController;
use App\Modules\Settings\Http\Controllers\CaptchaConfigurationController;
use App\Modules\Settings\Http\Controllers\EmailConfigurationController;
use App\Modules\Settings\Http\Controllers\PagesController;
use App\Modules\Settings\Http\Controllers\PaymentConfigurationController;
use App\Modules\Settings\Http\Controllers\GeneralSettingsController;
use App\Modules\Settings\Http\Controllers\SocialMediaController;
use Illuminate\Support\Facades\Route;

Route::group(array('Module'=>'Settings'), function () {
    // web routes ---------------------------
    Route::get('/dashboard/settings/generalSettings', [GeneralSettingsController::class, 'generalSettings']);
    Route::get('/dashboard/settings/emailConfiguration', [EmailConfigurationController::class, 'emailConfiguration']);
    Route::get('/dashboard/settings/paymentConfiguration', [PaymentConfigurationController::class, 'paymentConfiguration']);
    Route::get('/dashboard/settings/captchaConfiguration', [CaptchaConfigurationController::class, 'captchaConfiguration']);
    Route::get('/dashboard/socialMedia', [SocialMediaController::class, 'socialMedia']);





    // api routes ---------------------------
    Route::get('/dashboard/settings/email_configuration', [EmailConfigurationController::class, 'getEmailConfiguration']);
    Route::post('/dashboard/settings/email_configuration/create', [EmailConfigurationController::class, 'emailConfigurationCreate']);
    Route::post('/dashboard/settings/email_configuration/update', [EmailConfigurationController::class, 'emailConfigurationUpdate']);

    Route::get('/dashboard/settings/captcha_configuration', [CaptchaConfigurationController::class, 'getCaptchaConfiguration']);
    Route::post('/dashboard/settings/captcha_configuration/create', [CaptchaConfigurationController::class, 'captchaConfigurationCreate']);
    Route::post('/dashboard/settings/captcha_configuration/update', [CaptchaConfigurationController::class, 'captchaConfigurationUpdate']);

    Route::get('/dashboard/settings/payment_configuration', [PaymentConfigurationController::class, 'getPaymentConfiguration']);
    Route::post('/dashboard/settings/payment_configuration/create', [PaymentConfigurationController::class, 'paymentConfigurationCreate']);
    Route::post('/dashboard/settings/payment_configuration/update', [PaymentConfigurationController::class, 'paymentConfigurationUpdate']);

    Route::get('/dashboard/settings/general_settings', [GeneralSettingsController::class, 'getGeneralSettings']);
    Route::post('/dashboard/settings/general_settings/create', [GeneralSettingsController::class, 'generalSettingsCreate']);
    Route::post('/dashboard/settings/general_settings/update', [GeneralSettingsController::class, 'generalSettingsUpdate']);

    Route::get('/dashboard/settings/pages', [PagesController::class, 'getPages']);
    Route::post('/dashboard/settings/pages/create', [PagesController::class, 'pagesCreate']);
    Route::post('/dashboard/settings/pages/update', [PagesController::class, 'pagesUpdate']);

    Route::get('/dashboard/social_media', [SocialMediaController::class, 'getSocialMedia']);
    Route::post('/dashboard/social_media/create', [SocialMediaController::class, 'socialMediaCreate']);
    Route::post('/dashboard/social_media/update', [SocialMediaController::class, 'socialMediaUpdate']);

});






