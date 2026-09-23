<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ContentController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/portfolio', [PortfolioController::class, 'edit'])->name('portfolio.edit');
        Route::put('/portfolio', [PortfolioController::class, 'update'])->name('portfolio.update');

        Route::prefix('theme')->name('theme.')->group(function () {
            Route::get('/', function () {
                return view('admin.theme.index');
            })->name('index');

            Route::get('/colors', function () {
                return view('admin.theme.colors');
            })->name('colors');

            Route::get('/typography', function () {
                return view('admin.theme.typography');
            })->name('typography');

            Route::get('/layout', function () {
                return view('admin.theme.layout');
            })->name('layout');

            Route::get('/custom-css', function () {
                return view('admin.theme.custom-css');
            })->name('custom-css');
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
