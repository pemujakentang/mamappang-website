<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\FranchiseController;
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

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('/bulk-order', function () {
    return view('bulk.bulk');
})->name('bulk-order');

Route::controller(Controller::class)->group(
    function(){
        Route::get('/admin/dashboard', 'adminDashboard')->name('admin-dashboard');
    }
)->middleware('auth');

Route::controller(FranchiseController::class)->group(
    function(){
        Route::get('/franchise', 'index')->name('franchise');
        Route::post('/franchise/add', 'store');
        Route::get('/dashboard/franchise-status', 'dashboard')->name('franchise-status');
        Route::post('/franchise/{franchise:id}/reject', 'reject');
        Route::post('/franchise/{franchise:id}/confirm', 'confirm');
    }
)->middleware('auth');

Route::controller(PackageController::class)->group(
    function () {
        Route::get('/dashboard/franchises', 'index')->name('franchises');
        Route::get('/admin/package/{package:id}/edit', 'edit');
        Route::put('/admin/package/{package:id}/update', 'update');
        Route::get('/dashboard/franchise-create', function () {
            return view('dashboard.franchise-create');
        })->name('franchise-create');
        Route::post('/admin/package/add', 'store');
        Route::delete('/admin/package/{package:id}/delete', 'destroy');
    }
);

Route::get('/dashboard/order-status', function () {
    return view('dashboard.order-status');
})->name('order-status');

Route::get('/dashboard/menu-edit', function () {
    return view('dashboard.menu-edit');
})->name('menu-edit');

Route::get('/dashboard/menu-edit/tambah-rasa', function () {
    return view('dashboard.tambah-rasa');
})->name('tambah-rasa');

Route::get('/dashboard/menu-edit/tambah-series', function () {
    return view('dashboard.tambah-series');
})->name('tambah-series');
Route::get('/dashboard/menu-edit/edit-bulk', function () {
    return view('dashboard.edit-bulk');
})->name('edit-bulk');

require __DIR__.'/auth.php';


