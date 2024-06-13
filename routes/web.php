<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TicketController;
use Xendit\Configuration;
use App\Http\Controllers\PaymentController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('landing_page');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/travel', function () {
    return view('travel');
})->name('travel');

Route::get('rooms', function () {
    return view('rooms');
})->name('rooms');

Route::get('managekonten', function () {
    return view('managekonten');
})->name('managekonten');

Route::get('kontenRooms', function () {
    return view('kontenRooms');
})->name('kontenRooms');

Route::get('kontentrans', function () {
    return view('kontentrans');
})->name('kontentrans');

Route::get('transport', function () {
    return view('transport');
})->name('transport');

Route::get('userprofile', function () {
    return view('userprofile');
})->name('userprofile');

Route::get('setting', function () {
    return view('setting');
})->name('setting');

Route::get('/payment/confirmation', function () {
    return view('confirmationpay');
})->name('payment.confirmation');

Route::resource('trips', TripController::class);

Route::resource('products', ProductController::class);

Route::resource('tickets', TicketController::class);

Configuration::setXenditKey(config('xendit.api_key'));

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware('auth', 'admin')->name('admin.dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/admin/managekonten', [AdminController::class, 'manageKonten'])->name('managekonten');

Route::get('/admin/kontenRooms', [AdminController::class, 'kontenRooms'])->name('kontenRooms');

Route::get('/admin/kontentrans', [AdminController::class, 'kontentrans'])->name('kontentrans');

Route::get('/rooms', [DashboardController::class, 'Rooms'])->name('rooms');

// Route::get('/current-time', [TimeController::class, 'getCurrentTimeInMilliseconds']);

Route::get('/transport/search', [TicketController::class, 'search'])->name('transport.search'); 

Route::get('transport', [TicketController::class, 'transport'])->name('transport');

Route::get('/travel', [TripController::class, 'ketravel'])->name('travel');

// Route::get('/pay', [PaymentController::class, 'pay'])->name('pay');
// Route::post('/pay', [PaymentController::class, 'processPayment'])->name('pay.post');
Route::post('/pay', [PaymentController::class, 'pay'])->name('pay.post');
Route::post('/payment/callback', [PaymentController::class, 'callback'])->name('payment.callback');
Route::get('/payment/success', [PaymentController::class, 'success'])->name('payment.success');
Route::get('/payment/failure', [PaymentController::class, 'failure'])->name('payment.failure');

Route::get('/trips', [TripController::class, 'index'])->name('trips.index'); 
Route::post('/trips/store', [TripController::class, 'store'])->name('trips.store'); 
Route::get('/trips/edit/{id}', [TripController::class, 'edit'])->name('trips.edit'); 
Route::post('/trips/update/{id}', [TripController::class, 'update'])->name('trips.update'); 
Route::delete('/trips/delete/{id}', [TripController::class, 'destroy'])->name('trips.destroy');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::delete('/products/delete/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// Route::get('/products', 'ProductController@index')->name('products.index');
// Route::post('/products/store', 'ProductController@store')->name('products.store');
// Route::get('/products/edit/{id}', 'ProductController@edit')->name('products.edit');
// Route::delete('/products/delete/{id}', 'ProductController@destroy')->name('products.destroy');

Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::post('/tickets/store', [TicketController::class, 'store'])->name('tickets.store');
Route::get('/tickets/edit/{id}', [TicketController::class, 'edit'])->name('tickets.edit');
Route::put('/tickets/update/{id}', [TicketController::class, 'update'])->name('tickets.update');
Route::delete('/tickets/destroy/{id}', [TicketController::class, 'destroy'])->name('tickets.destroy');
