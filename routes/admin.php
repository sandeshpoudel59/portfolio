<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ThemeController;
use App\Http\Controllers\Admin\ContentController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/portfolio', [PortfolioController::class, 'edit'])->name('portfolio.edit');
        Route::put('/portfolio', [PortfolioController::class, 'update'])->name('portfolio.update');

        Route::prefix('theme')->name('theme.')->controller(ThemeController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/colors', 'colors')->name('colors');
            Route::post('/colors', 'updateColors')->name('colors.update');
            Route::get('/typography', 'typography')->name('typography');
            Route::post('/typography', 'updateTypography')->name('typography.update');
            Route::get('/layout', 'layout')->name('layout');
            Route::post('/layout', 'updateLayout')->name('layout.update');
            Route::get('/custom-css', 'customCss')->name('custom-css');
            Route::post('/custom-css', 'updateCustomCss')->name('custom-css.update');
        });

        Route::prefix('content/{section}')
            ->whereIn('section', ['projects', 'experience', 'education', 'achievements', 'certifications', 'services'])
            ->name('content.')
            ->controller(ContentController::class)
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/', 'store')->name('store');
                Route::get('/{item}/edit', 'edit')->whereNumber('item')->name('edit');
                Route::put('/{item}', 'update')->whereNumber('item')->name('update');
                Route::delete('/{item}', 'destroy')->whereNumber('item')->name('destroy');
            });
    });
