<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('home.index');
});

Route::get('/bulk-order', function () {
    return view('bulk.bulk');
});

Route::get('/franchise', function () {
    return view('franchise.franchise');
});

Route::get('/franchise', function () {
    return view('franchise.franchise');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'authenticate');

    Route::get('/signup', 'signup_view');
    Route::post('/signup', 'signup');
});


Route::get('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/login');
});
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::get('/dashboard/order-status', function () {
    return view('dashboard.order-status');
})->name('order-status');

Route::get('/dashboard/franchise-status', function () {
    return view('dashboard.franchise-status');
})->name('franchise-status');

Route::get('/dashboard/menu-edit', function () {
    return view('dashboard.menu-edit');
})->name('menu-edit');

Route::get('/dashboard/franchise-edit', function () {
    return view('dashboard.franchise-edit');
})->name('franchise-edit');

Route::get('/dashboard/franchise-edit/page', function () {
    return view('dashboard.franchise-edit-page');
})->name('franchise-edit-page');

Route::get('/dashboard/menu-edit/tambah-rasa', function () {
    return view('dashboard.tambah-rasa');
})->name('tambah-rasa');

Route::get('/dashboard/menu-edit/tambah-series', function () {
    return view('dashboard.tambah-series');
})->name('tambah-series');

Route::get('/dashboard/menu-edit/edit-bulk', function () {
    return view('dashboard.edit-bulk');
})->name('edit-bulk');