<?php

use App\Services\Route;
use App\Controllers\Home\HomeController;
use App\Controllers\Migrations\MigrationController;
use App\Controllers\Website\WebsiteController;

Route::get('/migration/create', MigrationController::class, 'create')->name('migration.create');

Route::prefix('')->as('home')->group(function () {
    Route::get('/', HomeController::class, 'index')->name('index');
});

Route::prefix('/website')->as('website')->group(function () {
    Route::get('', WebsiteController::class, 'index')->name('index');
    Route::post('/store', WebsiteController::class, 'store')->name('store');
});