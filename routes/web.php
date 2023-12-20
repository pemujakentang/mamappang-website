<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FranchiseController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PreordersController;
use App\Http\Controllers\PriceController;
use App\Livewire\Counter;
use App\Livewire\QtyForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendMailController;


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

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::controller(Controller::class)->group(
    function(){
        Route::get('/admin/dashboard', 'adminDashboard')->name('admin-dashboard')->middleware(['admin', 'auth']);
        Route::match(['get', 'post'], '/my-dashboard', 'userDashboard')->name('user-dashboard')->middleware(['auth','verified']);
    }
)->middleware('auth');

Route::controller(MenuController::class)->middleware(['admin', 'auth'])->group(
    function(){
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

Route::controller(MenuController::class)->group(
    function () {
        Route::get('/', 'home')->name('home');
        Route::get('/bulk-order', 'index')->name('bulk-order');
    }
);

Route::controller(FranchiseController::class)->group(
    function(){
        Route::get('/franchise', 'index')->name('franchise');
        Route::post('/franchise/{franchise:id}/cancel', 'cancel')->middleware('auth');
        Route::post('/franchise/add', 'store')->middleware('auth');
    }
);

Route::controller(FranchiseController::class)->middleware(['admin', 'auth'])->group(
    function(){
        Route::get('/admin/dashboard/franchise-status', 'dashboard')->name('franchise-status');
        Route::post('/franchise/{franchise:id}/reject', 'reject');
        Route::post('/franchise/{franchise:id}/confirm', 'confirm');
    }
);

Route::controller(PackageController::class)->middleware(['auth', 'admin'])->group(
    function () {
        Route::get('/admin/dashboard/franchises', 'index')->name('franchises');
        Route::get('/admin/package/{package:id}/edit', 'edit');
        Route::put('/admin/package/{package:id}/update', 'update');
        Route::get('/admin//dashboard/franchise-create', function () {
            return view('dashboard.franchise-create');
        })->name('franchise-create');
        Route::post('/admin/package/add', 'store');
        Route::delete('/admin/package/{package:id}/delete', 'destroy');
        Route::post('/admin/upload', 'upload');
    }
);

Route::controller(PreordersController::class)->middleware(['admin', 'auth'])->group(
    function(){
        Route::get('/admin/dashboard/order-status', 'dashboard')->name('order-status');
        Route::get('/admin/billing/{preorder:id}', 'confirmView');
        Route::post('/admin/billing/{preorder:id}/new', 'confirmOrder');
        Route::post('/preorder/{preorder:id}/confirm-payment', 'confirmPayment');
        Route::post('/preorder/{preorder:id}/ship', 'shipping');
        Route::post('/preorder/{preorder:id}/finish', 'finishOrder');
        Route::post('/preorder/{preorder:id}/reject', 'reject');
        Route::get('/preorders/{preorder:id}/rejectform', 'rejectView');
    }
);

Route::controller(PreordersController::class)->middleware(['auth', 'verified'])->group(
    function(){
        Route::get('/bulks', 'index')->name('bulk-index');
        Route::post('/bulk-order/order', 'store');
        Route::post('/bill/{bill:id}/pay', 'submitPayment');
        Route::post('/preorder/{preorder:id}/cancel', 'cancel');
        Route::post('/preorder/{preorder:id}/finish-shipment', 'finishShipment');
    }
);

Route::controller(CartController::class)->middleware(['auth', 'verified'])->group(
    function(){
        Route::post('/cart/new', 'newCart');
    }
);

Route::controller(PriceController::class)->middleware('admin')->group(
    function(){
        Route::get('/admin/dashboard/edit-price', 'index');
        Route::put('/admin/price/{price:id}/update', 'update');
    }
);

Route::get('/about-us', function(){
    return view('home.aboutus');
})->name('about-us');

// Route::get('/{any}', function () {
//     return redirect('/');
// })->where('any', '.*');

// Route::get('/dashboard/order-status', function () {
//     return view('dashboard.order-status');
// })->name('order-status');

// Route::get('/dashboard/menu-edit/edit-bulk', function () {
//     return view('dashboard.edit-bulk');
// })->name('edit-bulk');

// Route::get('/userdashboard', function(){
//     return view('home.userdashboard');
// })->middleware('auth');

// Route::get('/livewire/qty-form', QtyForm::class)->name('livewire.qty-form');

// Route::get('/counter', Counter::class);

require __DIR__.'/auth.php';

Route::get('/sendMail',[SendMailController::class,'index'])->name("sendMail");


