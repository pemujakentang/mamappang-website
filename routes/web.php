<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\FranchiseController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::controller(Controller::class)->group(
    function(){
        Route::get('/admin/dashboard', 'adminDashboard')->name('admin-dashboard');
    }
)->middleware('auth');

Route::controller(MenuController::class)->group(
    function(){
        Route::get('/', 'home')->name('home');
        Route::get('/bulk-order', 'index')->name('bulk-order');
        Route::get('/admin/dashboard/menus', 'dashboard')->name('menu-edit');
        Route::get('/admin/dashboard/add-menu', 'create');
        Route::get('/admin/dashboard/add-series', 'createseries');
        Route::post('/admin/dashboard/create-menu', 'store');
        Route::post('/admin/dashboard/create-series', 'storeseries');
        Route::get('/admin/menu/{menu:id}/edit', 'edit');
        Route::get('/admin/series/{category:id}/edit', 'editseries');
        Route::put('/admin/menu/{menu:id}/update', 'update');
        Route::put('/admin/series/{category:id}/update', 'updateseries');
        Route::delete('/admin/menu/{menu:id}/delete', 'destroy');
        Route::delete('/admin/series/{category:id}/delete', 'destroyseries');
    }
);

Route::controller(FranchiseController::class)->group(
    function(){
        Route::get('/franchise', 'index')->name('franchise');
        Route::post('/franchise/add', 'store');
        Route::get('/admin/dashboard/franchise-status', 'dashboard')->name('franchise-status');
        Route::post('/franchise/{franchise:id}/reject', 'reject');
        Route::post('/franchise/{franchise:id}/confirm', 'confirm');
    }
)->middleware('auth');

Route::controller(PackageController::class)->group(
    function () {
        Route::get('/admin/dashboard/franchises', 'index')->name('franchises');
        Route::get('/admin/package/{package:id}/edit', 'edit');
        Route::put('/admin/package/{package:id}/update', 'update');
        Route::get('/admin//dashboard/franchise-create', function () {
            return view('dashboard.franchise-create');
        })->name('franchise-create');
        Route::post('/admin/package/add', 'store');
        Route::delete('/admin/package/{package:id}/delete', 'destroy');
    }
);

Route::get('/dashboard/order-status', function () {
    return view('dashboard.order-status');
})->name('order-status');

Route::get('/dashboard/menu-edit/edit-bulk', function () {
    return view('dashboard.edit-bulk');
})->name('edit-bulk');

require __DIR__.'/auth.php';


