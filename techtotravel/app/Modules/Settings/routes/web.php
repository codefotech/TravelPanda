<?php

use App\Modules\Dashboard\Http\Controllers\DashboardController;
use App\Modules\Settings\Http\Controllers\CaptchaConfigurationController;
use App\Modules\Settings\Http\Controllers\EmailConfigurationController;
use App\Modules\Settings\Http\Controllers\HomePageController;
use App\Modules\Settings\Http\Controllers\PaymentConfigurationController;
use App\Modules\Settings\Http\Controllers\GeneralSettingsController;
use Illuminate\Support\Facades\Route;

Route::group(array('Module'=>'Dashboard, Settings'), function () {
    Route::get('/dashboard/settings/general_settings', [GeneralSettingsController::class, 'generalSettings']);
    Route::get('/dashboard/settings/email_configuration', [EmailConfigurationController::class, 'emailConfiguration']);
    Route::get('/dashboard/settings/payment_configuration', [PaymentConfigurationController::class, 'paymentConfiguration']);
    Route::get('/dashboard/settings/captcha_configuration', [CaptchaConfigurationController::class, 'captchaConfiguration']);

    Route::prefix('/dashboard/settings/email_configuration')->group(function () {
        Route::match(['get', 'post'], '/', [EmailConfigurationController::class, 'emailConfigurationList'])->name('email_configuration.list');
        Route::get('create', [EmailConfigurationController::class, 'emailConfigurationCreate'])->name('email_configuration.create');
        Route::get('delete', [EmailConfigurationController::class, 'emailConfigurationDelete'])->name('email_configuration.delete');
        Route::get('edit/{id}', [EmailConfigurationController::class, 'emailConfigurationUpdate'])->name('email_configuration.edit');
        Route::get('id_check', [EmailConfigurationController::class, 'emailConfigurationIdCheck'])->name('email_configuration.id_check');
    });

    Route::prefix('/dashboard/settings/captcha_configuration')->group(function () {
        Route::match(['get', 'post'], '/', [CaptchaConfigurationController::class, 'captchaConfigurationList'])->name('captcha_configuration.list');
        Route::get('create', [CaptchaConfigurationController::class, 'captchaConfigurationCreate'])->name('captcha_configuration.create');
        Route::get('delete', [CaptchaConfigurationController::class, 'captchaConfigurationDelete'])->name('captcha_configuration.delete');
        Route::get('edit/{id}', [CaptchaConfigurationController::class, 'captchaConfigurationUpdate'])->name('captcha_configuration.edit');
        Route::get('id_check', [CaptchaConfigurationController::class, 'captchaConfigurationIdCheck'])->name('captcha_configuration.id_check');
    });

    Route::prefix('/dashboard/settings/payment_configuration')->group(function () {
        Route::match(['get', 'post'], '/', [PaymentConfigurationController::class, 'paymentConfigurationList'])->name('payment_configuration.list');
        Route::get('create', [PaymentConfigurationController::class, 'paymentConfigurationCreate'])->name('payment_configuration.create');
        Route::get('delete', [PaymentConfigurationController::class, 'paymentConfigurationDelete'])->name('payment_configuration.delete');
        Route::get('edit/{id}', [PaymentConfigurationController::class, 'paymentConfigurationUpdate'])->name('payment_configuration.edit');
        Route::get('id_check', [PaymentConfigurationController::class, 'paymentConfigurationIdCheck'])->name('payment_configuration.id_check');
    });

    Route::prefix('/dashboard/settings/general_settings')->group(function () {
        Route::match(['get', 'post'], '/', [GeneralSettingsController::class, 'generalSettingsList'])->name('general_settings.list');
        Route::get('create', [GeneralSettingsController::class, 'generalSettingsCreate'])->name('general_settings.create');
        Route::get('delete', [GeneralSettingsController::class, 'generalSettingsDelete'])->name('general_settings.delete');
        Route::get('edit/{id}', [GeneralSettingsController::class, 'generalSettingsUpdate'])->name('general_settings.edit');
        Route::get('id_check', [GeneralSettingsController::class, 'generalSettingsIdCheck'])->name('general_settings.id_check');
    });

    Route::prefix('/dashboard/settings/home_page')->group(function () {
        Route::match(['get', 'post'], '/', [HomePageController::class, 'homePageList'])->name('home_page.list');
        Route::get('create', [HomePageController::class, 'homePageCreate'])->name('home_page.create');
        Route::get('delete', [HomePageController::class, 'homePageDelete'])->name('home_page.delete');
        Route::get('edit/{id}', [HomePageController::class, 'homePageUpdate'])->name('home_page.edit');
        Route::get('id_check', [HomePageController::class, 'homePageIdCheck'])->name('home_page.id_check');
    });

});






